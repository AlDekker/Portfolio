import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

window.addEventListener('load', function () {

  let fixHeader = document.querySelector('.js-fixed-header')

  if (fixHeader) {
    document.addEventListener('scroll', function () {

      let fixHeaderTopBlock = fixHeader.querySelector('.header__top')
      let fixHeaderTopBlockHeight = fixHeaderTopBlock ? fixHeaderTopBlock.clientHeight : 0

      let fixHeaderMainBlock = fixHeader.querySelector('.header__main')
      let fixHeaderMainBlockHeight = fixHeaderMainBlock ? fixHeaderMainBlock.clientHeight : 0

      let fixHeaderHeight = fixHeaderTopBlockHeight + fixHeaderMainBlockHeight

      if (window.scrollY > fixHeaderHeight) {
        fixHeader.classList.add('is-fixed')
      }
      else {
        fixHeader.classList.remove('is-fixed')
      }

    })
  }

  /* dropdown menu */

  const dropdowns = document.querySelectorAll('.dropdown')

  dropdowns.forEach(el => {
    let dropdown = el
    let toggle = dropdown.querySelector('.dropdown__toggle')
    let menu = dropdown.querySelector('.dropdown__menu')

    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      if (menu.classList.contains('is-show')) {
        closeDropdown()
      }
      else {
        showDropdown()
      }
    })

    function showDropdown() {
      menu.setAttribute('aria-expanded', true)
      menu.classList.add('is-show')
      toggle.classList.add('is-active')

      document.addEventListener('click', clickOutsideDropdown)

      document.addEventListener('keyup', pressEsc)

    }

    function closeDropdown() {
      menu.setAttribute('aria-expanded', false)
      menu.classList.remove('is-show')
      toggle.classList.remove('is-active')
      document.removeEventListener('click', clickOutsideDropdown)
    }

    function clickOutsideDropdown(e) {
      if (e.target.closest('.dropdown') !== dropdown) {
        closeDropdown()
      }
    }

    function pressEsc(e) {
      if (e.key === 'Escape') {
        closeDropdown()
      }
    }

  })

  /* menu */

  const menu = document.querySelector('.js-menu')

  if (menu) {
    const menuToggle = document.querySelector('.js-menu-toggle')
    const menuLinks = menu.querySelectorAll('a')

    menuToggle.addEventListener('click', function () {
      if (this.classList.contains('is-active')) {
        closeMenu()
      } else {
        openMenu()
      }
    })

    for (let i = 0; i < menuLinks.length; i++) {
      menuLinks[i].addEventListener('click', closeMenu)
    }

    function closeMenu() {
      document.body.classList.remove('no-scroll')

      menuToggle.setAttribute('aria-expanded', false)
      menuToggle.classList.remove('is-active')
      menu.classList.remove('is-active')

      menu.addEventListener('transitionend', function () {
        menu.classList.add('is-closed')
      }, {
        once: true
      })

      document.removeEventListener('keyup', pressEsc)
    }

    function openMenu() {
      document.body.classList.add('no-scroll')

      menuToggle.setAttribute('aria-expanded', true)
      menuToggle.classList.add('is-active')
      menu.classList.remove('is-closed')

      setTimeout(() => {
        menu.classList.add('is-active'), 20
      });

      document.addEventListener('keyup', pressEsc)
    }

    function pressEsc(e) {
      if (e.key === 'Escape') {
        closeMenu()
      }
    }
  }

  /* categories-menu */

  const catMenu = document.querySelector('.js-categories')

  if (catMenu) {
    const catToggle = document.querySelector('.js-categories-toggle')
    const catLinks = menu.querySelectorAll('a')

    catToggle.addEventListener('click', function () {
      if (this.classList.contains('is-active')) {
        closeCatMenu()
      } else {
        openCatMenu()
      }
    })

    for (let i = 0; i < catLinks.length; i++) {
      catLinks[i].addEventListener('click', closeCatMenu)
    }

    function closeCatMenu() {
      catToggle.setAttribute('aria-expanded', false)
      catToggle.classList.remove('is-active')
      catMenu.classList.remove('is-active')
      catMenu.classList.add('is-closed')

      document.removeEventListener('keyup', pressEsc)
    }

    function openCatMenu() {
      catToggle.setAttribute('aria-expanded', true)
      catToggle.classList.add('is-active')
      catMenu.classList.remove('is-closed')

      setTimeout(() => {
        catMenu.classList.add('is-active'), 20
      });

      document.addEventListener('keyup', pressEsc)
    }

    function pressEsc(e) {
      if (e.key === 'Escape') {
        closeCatMenu()
      }
    }
  }

  /* header-slider */

  const headerSlider = new Swiper('.header-slider', {
    modules: [Navigation, Pagination],
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: false,
    // loop: true,
    navigation: {
      nextEl: '.header-slider .swiper-button-next',
      prevEl: '.header-slider .swiper-button-prev',
    },
    pagination: {
      el: '.header-slider .swiper-pagination',
      clickable: true,
    },
    scrollbar: {
      el: '.header-slider .swiper-scrollbar',
      draggable: true,
    }
  });

  /* video-slider */

  const videoSlider = new Swiper('.video-slider', {
    modules: [Navigation],
    initialSlide: 2,
    slidesPerView: 1.2,
    spaceBetween: 10,
    centeredSlides: true,
    navigation: {
      nextEl: '.video-slider .swiper-button-next',
      prevEl: '.video-slider .swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        centeredSlides: false,
        spaceBetween: 10
      },
      998: {
        slidesPerView: 2,
        centeredSlides: false,
        spaceBetween: 30
      },
      1368: {
        slidesPerView: 3,
        centeredSlides: false,
        spaceBetween: 30
      }
    }
  });

  const resizableSwiper = (breakpoint, swiperClass, swiperSettings, callback) => {

    if(!document.querySelector(swiperClass)) {
      return;
    }

    let swiper;

    breakpoint = window.matchMedia(breakpoint);

    const enableSwiper = function (className, settings) {
      swiper = new Swiper(className, settings);

      if (callback) {
        callback(swiper);
      }
    }

    const checker = function () {
      if (breakpoint.matches) {
        return enableSwiper(swiperClass, swiperSettings);
      } else {
        if (swiper !== undefined) swiper.destroy(true, true);
        return;
      }
    };

    breakpoint.addEventListener('change', checker);
    checker();
  }

  resizableSwiper(
    '(max-width: 998px)',
    '.slider-catalog',
    {
      modules: [Navigation, Pagination],
      initialSlide: 1,
      slidesPerView: 1.2,
      spaceBetween: 10,
      centeredSlides: true,
      navigation: {
        nextEl: '.slider-catalog .swiper-button-next',
        prevEl: '.slider-catalog .swiper-button-prev',
      },
      pagination: {
        el: '.slider-catalog .swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2.5,
          centeredSlides: true,
          spaceBetween: 30
        },
      }
    }
  );

  /* Youtube video */

  function findVideos() {
    let videos = document.querySelectorAll('.video__video');

    for (let i = 0; i < videos.length; i++) {
      setupVideo(videos[i]);
    }
  }

  function setupVideo(video) {
    let link = video.querySelector('.video__link');
    let media = video.querySelector('.video__media');
    let button = video.querySelector('.video__button');
    let id = parseMediaURL(media);

    video.addEventListener('click', function () {
      let iframe = createIframe(id);

      link.remove();
      button.remove();
      video.appendChild(iframe);
    });

    link.removeAttribute('href');
    video.classList.add('video__video--enabled');
  }

  function parseMediaURL(media) {
    let regexp = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/maxresdefault\.jpg/i;
    let url = media.src;
    let match = url.match(regexp);

    return match[1];
  }

  function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('src', generateURL(id) + '&autoplay=1&mute=0');
    iframe.classList.add('video__media');

    return iframe;
  }

  function generateURL(id) {
    let query = '?rel=0&showinfo=0&autoplay=1';

    return 'https://www.youtube.com/embed/' + id + query;
  }

  findVideos();

  /* footer accordion */

  let footerAccordion = document.querySelectorAll('.js-footer-accordion')

  if (footerAccordion.length > 0) {

    footerAccordion.forEach(el => {

      const button = el.querySelector('.js-footer-accordion-toggle')
      const block = el.querySelector('.js-footer-accordion-content')

      button.addEventListener('click', e => {

        e.stopPropagation()

        let height = block.scrollHeight;

        if (el.classList.contains('is-active')) {
          el.classList.remove('is-active')
          button.classList.remove('is-active')
          button.setAttribute('aria-expanded', false)
          block.style.height = '';
        } else {
          el.classList.add('is-active')
          button.classList.add('is-active')
          button.setAttribute('aria-expanded', true)
          block.style.height = height + 'px';
        }

      })

    })
  }

});
