/* Vars */

const srcFolder = 'src'
const distFolder = 'dist'

/* Modules */

import pkg from 'gulp'
const { gulp, series, parallel, src, dest, watch } = pkg

import browserSync from 'browser-sync'
import devip from 'dev-ip'
import rsync from 'gulp-rsync'

import sourcemaps from 'gulp-sourcemaps'
import rename from 'gulp-rename'
import { deleteAsync } from 'del';

import postcss from 'gulp-postcss'
import autoprefixer from 'autoprefixer'
import cssnano from 'cssnano'
import gcmq from 'gulp-group-css-media-queries'
import gulpSass from 'gulp-sass'
import * as dartSass from 'sass'
const sass = gulpSass(dartSass)

import webpack from 'webpack'
import webpackStream from 'webpack-stream'
import TerserPlugin from 'terser-webpack-plugin'

import imagemin from 'gulp-imagemin'
import webp from 'gulp-webp'
import svgSprite from 'gulp-svg-sprite'
import svgo from 'gulp-svgo'

/* Create Server */

function createServer() {
  browserSync.init({
    server: { baseDir: srcFolder },
    notify: false,
    host: getHostIP(), // If default external link doesn't work
    // tunnel: 'someproject-v1', // URL: https://someproject-v1.loca.lt
  })
}

function getHostIP() {
  let ipList = devip()
  return ipList[ipList.length - 1]
}

/* Styles */

function styles() {
  return src(`${srcFolder}/sass/*.{sass,scss}`)
    // .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
    .pipe(postcss([
      autoprefixer({ cascade: false, grid: "autoplace" })
    ]))
    .pipe(dest(`${srcFolder}/css`))
    .pipe(gcmq())
    .pipe(postcss([
      cssnano({ preset: ['default', { discardComments: { removeAll: true } }] })
    ]))
    .pipe(rename({ suffix: ".min" }))
    // .pipe(sourcemaps.write())
    .pipe(dest(`${srcFolder}/css`))
    .pipe(browserSync.stream())
};

/* Javascript */

function scripts() {
  return src(`${srcFolder}/js/main.js`)
    .pipe(webpackStream({
      mode: 'production',
      performance: { hints: false },
      stats: 'minimal',
      optimization: {
        minimize: true,
        minimizer: [
          new TerserPlugin({
            terserOptions: { format: { comments: false } },
            extractComments: false
          }),
        ]
      },
      // devtool: 'inline-source-map',
      module: {
        rules: [
          {
            test: /\.js$/,
            exclude: /(node_modules)/,
            use: {
              loader: 'babel-loader',
              options: {
                presets: ['@babel/preset-env'],
                plugins: ['babel-plugin-root-import']
              }
            }
          }
        ]
      },
    }, webpack)).on('error', function handleError() {
      this.emit('end')
    })
    .pipe(rename({
      basename: "app",
      suffix: ".min"
    }))
    .pipe(dest(`${srcFolder}/js`))
    .pipe(browserSync.stream())
}

/* Images */

function images() {
  return src([
    `${distFolder}/img/**/*`,
    `!${distFolder}/img/**/favicons/**/*`,
    `!${distFolder}/img/**/sprite.svg`,
    `!${distFolder}/img/webp/*`,
  ])
    .pipe(imagemin())
    .pipe(dest(distFolder + '/img'))
}

function imagesWebp() {
  return src([
    `${srcFolder}/img/**/*.{jpg,jpeg}`,
  ])
    .pipe(webp())
    .pipe(dest(srcFolder + '/img/webp'))
}

function makeSprite() {
  return src(`${srcFolder}/img/sprite/*.svg`)
    .pipe(svgSprite({
      shape: {
        dimension: {
          maxWidth: 500,
          maxHeight: 500
        },
        spacing: {
          padding: 0
        }
      },
      mode: {
        symbol: {
          dest: '.',
          sprite: 'sprite.svg'
        }
      }
    }))
    .on('error', function (error) { console.log(error); })
    .pipe(dest(`${srcFolder}/img`));
}

/*
Using:
  <svg class="icon" aria-hidden="true">
    <use xlink:href="img/sprite/sprite.svg#name"></use>
  </svg>
*/

/* Start Watch */

function startWatch() {
  watch(`${srcFolder}/sass/**/*.{sass,scss}`, styles)
  watch([`${srcFolder}/js/**/*.js`, `!${srcFolder}/js/**/*.min.js`], scripts)
  watch(`${srcFolder}/img/sprite/*`, makeSprite)
  watch(`${srcFolder}/img/**/*`).on('change', browserSync.reload)
  watch(`${srcFolder}/**/*.{html,twig,tpl,php,json,txt,md,woff,woff2,ttf}`).on('change', browserSync.reload)
}

/* Build */

function createDist() {
  return src([
    srcFolder + '/css/*.css',
    srcFolder + '/css/*.min.css',
    srcFolder + '/js/*.js',
    srcFolder + '/js/*.min.js',
    srcFolder + '/fonts/**/*',
    srcFolder + '/img/**/*',
    srcFolder + '/**/*.{html, twig, tpl, php, json, md}',
    srcFolder + '/*.txt',
    srcFolder + '/.htaccess',
  ], { base: `${srcFolder}/` })
    .pipe(dest(distFolder))
}

function clearDist() {
  return deleteAsync([distFolder], { force: true })
}

/* Deploy */

function deploy() {
  return src(distFolder)
    .pipe(rsync({
      root: distFolder,
      hostname: 'username@hostname.com',
      destination: 'yousite/public_html/',
      recursive: true,
      archive: true,
      silent: false,
      compress: true
    }))
}


/* Exports */

export { styles, scripts, images, imagesWebp, makeSprite, createDist, clearDist, deploy }
export let build = series(clearDist, createDist, images)
export let buildLight = series(clearDist, createDist)
export default series(parallel(styles, scripts, makeSprite), parallel(createServer, startWatch))
