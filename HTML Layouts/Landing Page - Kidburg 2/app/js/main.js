import $ from 'jquery'; window.jQuery = $; window.$ = $;
import magnificPopup from 'magnific-popup';
import Swiper, { Autoplay } from 'swiper';
Swiper.use([Autoplay]);

window.addEventListener('load', function () {
  
  /* Slider */
  const mainSlider = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 80,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true
    },
    grabCursor: true,
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 80
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 80
      },
      1360: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      1920: {
        slidesPerView: "auto",
        spaceBetween: 80
      },
      
    }
  })
  
  /* Gallery */
  $.extend(true, $.magnificPopup.defaults, {
    tClose: 'Закрыть (Esc)',
    tLoading: 'Загрузка...',
    gallery: {
      tPrev: 'Назад',
      tNext: 'Вперед',
      tCounter: '%curr% из %total%'
    },
    image: {
      tError: '<a href="%url%">Изображение</a> не найдено.'
    },
    ajax: {
      tError: '<a href="%url%">Контент</a> не найден.'
    }
  });
  
  $('.gallery').magnificPopup({
    mainClass: 'mfp-my-gallery',
    delegate: 'a',
    type: 'image',
    closeOnContentClick: false,
    closeBtnInside: false,
    closeMarkup: '<button title="%title%" type="button" class="gallery__close mfp-close"></button>',
    // fixedContentPos: false,
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      arrowMarkup: '<button title="%title%" type="button" class="gallery__arrow gallery__arrow--%dir%"></button>'
    }    
  });

  /* Popup */
  $('.popup-modal').magnificPopup({
		type: 'inline'
	});
  
  /* Scroll */
  let scrollToLinks = document.querySelectorAll('.scrollTo');
  for (let i = 0; i <= scrollToLinks.length - 1; i++) {
    scrollToLinks[i].addEventListener('click', function(e){
      e.preventDefault();
      let linkTo = this.hash;
      if (linkTo !== '') {
        scrollToId(linkTo);
      }
    });
  }
  
  /* scrollToID */
  function scrollToId(id){
    let target = document.querySelector(id);
    if(target !== null){
      let coord = target.getBoundingClientRect().top;
      let scroll = window.pageYOffset || document.documentElement.scrollTop;
      let pos = coord + scroll;
      smoothScroll(pos);
    }
  }
  
  /* smoothScroll */
  function smoothScroll(position){
    if('scrollBehavior' in document.documentElement.style){
      window.scrollTo({
        top: position,
        behavior: "smooth"
      });
    }
    else {
      window.scrollTo(0, position);
    }
  }
  
});


