import Swiper, { Navigation } from 'swiper';
Swiper.use([ Navigation ]);
import anime from 'animejs/lib/anime.es.js';

window.addEventListener('load', function () {
  
  /* Mobile menu */
  
  const mobileMenu   = document.querySelector('.header__menu')
  const mobileButton = document.querySelector('.header__hamburger')
  mobileButton.addEventListener('click', function(){
    
    if (!mobileMenu.classList.contains('opened')) {
      this.classList.add('hamburger--active')
      mobileMenu.classList.add('opened')
      anime({
        targets: mobileMenu,
        translateY: [-250, 0],
        opacity: [0, 1],
        easing: 'easeInOutSine',
        duration: 200
      })
    }
    else {
      this.classList.remove('hamburger--active')
      anime({
        targets: mobileMenu,
        translateY: '-250px',
        opacity: 0,
        easing: 'easeInOutSine',
        duration: 200,
        complete: function(anim) {
          mobileMenu.classList.remove('opened')
        }
      })
      
    }
  });
  
  /* Reviews Slider */
  
  new Swiper('.slider-reviews', {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: false,
    loop: true,
    navigation: {
      nextEl: '.slider-container--reviews .swiper-button-next',
      prevEl: '.slider-container--reviews .swiper-button-prev',
    },
    breakpoints: {
      578: {
        slidesPerView: 2,
      },
      998: {
        slidesPerView: 3,
      }
    }
  });
  
  /* Partners Sliders */
  new Swiper('.slider-partners-1', {
    slidesPerView: 2,
    spaceBetween: 30,
    centeredSlides: false,
    loop: true,
    navigation: {
      nextEl: '.slider-container--partners-1 .swiper-button-next',
      prevEl: '.slider-container--partners-1 .swiper-button-prev',
    },
    breakpoints: {
      578: {
        slidesPerView: 3,
      },
      998: {
        slidesPerView: 6,
      }
    }
  });
  
  new Swiper('.slider-partners-2', {
    slidesPerView: 2,
    spaceBetween: 30,
    centeredSlides: false,
    loop: true,
    navigation: {
      nextEl: '.slider-container--partners-2 .swiper-button-next',
      prevEl: '.slider-container--partners-2 .swiper-button-prev',
    },
    breakpoints: {
      578: {
        slidesPerView: 3,
      },
      998: {
        slidesPerView: 6,
      }
    }
  });
  
  new Swiper('.slider-partners-3', {
    slidesPerView: 2,
    spaceBetween: 30,
    centeredSlides: false,
    loop: true,
    navigation: {
      nextEl: '.slider-container--partners-3 .swiper-button-next',
      prevEl: '.slider-container--partners-3 .swiper-button-prev',
    },
    breakpoints: {
      578: {
        slidesPerView: 3,
      },
      998: {
        slidesPerView: 6,
      }
    }
  });
  
  new Swiper('.slider-partners-4', {
    slidesPerView: 2,
    spaceBetween: 30,
    centeredSlides: false,
    loop: true,
    navigation: {
      nextEl: '.slider-container--partners-4 .swiper-button-next',
      prevEl: '.slider-container--partners-4 .swiper-button-prev',
    },
    breakpoints: {
      578: {
        slidesPerView: 3,
      },
      998: {
        slidesPerView: 6,
      }
    }
  });
  
  /* Tabs */
  
  let tabsContainers = document.querySelectorAll('.tabs')
  if (tabsContainers.length > 0) {
    
    for (let tabsContainer of tabsContainers) {
      let tabsButtons = tabsContainer.querySelectorAll('.tabs__toggle')
      
      /* Если не задана активная вкладка, то делаем активной 1ю */
      if (!tabsContainer.querySelector('.tabs__toggle.active')) {
        tabsButtons[0].classList.add('active')
        if (tabsContainer.querySelector('.tabs__tab.active')){
          tabsContainer.querySelector('.tabs__tab.active').classList.remove('active')
        }
        tabsContainer.querySelector(tabsButtons[0].dataset.tabTarget).classList.add('active')
      }
      
      for (let i = 0; i < tabsButtons.length; i++) {
        tabsButtons[i].addEventListener('click', function(e){
          e.preventDefault()
          
          let target = tabsContainer.querySelector(this.dataset.tabTarget);
          
          if (this.classList.contains('active')) { 
            return 
          }
          
          tabsContainer.querySelector('.tabs__toggle.active').classList.remove('active')
          tabsContainer.querySelector('.tabs__tab.active').classList.remove('active')
          this.classList.add('active')
          target.classList.add('active')
        })
      }
    }
  }
  
});


