import wNumb from 'wnumb';
import noUiSlider from 'nouislider';
import MicroModal from 'micromodal';
import Swiper, { Navigation, Scrollbar, Controller, Thumbs } from 'swiper';
Swiper.use([ Navigation, Scrollbar, Controller, Thumbs ]);

window.addEventListener('load', function () {
  
  let screenWidth = window.innerWidth;
  window.addEventListener('resize', function(){
    screenWidth = this.innerWidth;
    mobileMenuHeight();
    enabledAccordion();
  });
  
  
  /* Header Popup */
  
  let headerAccountItems = document.querySelectorAll('.account__item');
  
  if (headerAccountItems) {
    
    for (let i = 0; i < headerAccountItems.length; i++) {
      
      let accItem      = headerAccountItems[i];
      let accItemPopup = accItem.querySelector('.account__popup-wrapper');
      let accToggle    = accItem.querySelector('.account__btn');
      
      accToggle.addEventListener('click', function(){
        if (accItemPopup.classList.contains('account__popup-wrapper--opened')) {
          accItemPopup.classList.remove('account__popup-wrapper--opened');
        }
        else {
          let otherPopup = document.querySelector('.account__popup-wrapper--opened');
          if (otherPopup) {
            otherPopup.classList.remove('account__popup-wrapper--opened');
          }
          accItemPopup.classList.add('account__popup-wrapper--opened');
          accItemPopup.classList.add('account__popup-wrapper--opened');
        }
      });      
    }
  }
  
  /* Category Popup */
  let catToggle = document.querySelector('.header-category__btn');
  let catPopup = document.querySelector('.header-category__popup');
  if (catToggle) {
    catToggle.addEventListener('click', function() {
      if (catPopup.classList.contains('header-category__popup--active')) {
        this.classList.remove('header-category__btn--active');
        closePopup();
      }
      else {
        this.classList.add('header-category__btn--active');
        openedPopup();
      }
    });
  }
  
  
  function closePopup() {
    catPopup.classList.remove('header-category__popup--active');
    // Add overlay and return scroll
    document.querySelector('.wrapper').classList.remove('overlay');
    document.body.classList.remove('no-scroll'); 
  }
  
  function openedPopup() {
    if (screenWidth <= 576) {
      // Add overlay and remove scroll
      mobileMenuHeight();
      document.querySelector('.wrapper').classList.add('overlay');
      document.body.classList.add('no-scroll');
    }
    catPopup.classList.add('header-category__popup--active');
  }
  
  function mobileMenuHeight() {
    let popup = document.querySelector('.header-category__popup');
    if (screenWidth <= 576) {
      let header = document.querySelector('.header');
      popup.style.height = window.innerHeight - header.clientHeight + 15 + 'px';
    }
    else {
      popup.style.height = "auto";
    }
  }
  
  /* Search Popup */
  
  let search = document.querySelector('.header__search');
  let searchOpenBtn = document.querySelector('.search__open');
  let searchCloseBtn = document.querySelector('.search__close');
  let searchInput = document.querySelector('.header__search .search__input');
  if (search) {
    searchOpenBtn.addEventListener('click', searchToggle);
    searchCloseBtn.addEventListener('click', searchToggle);
  }

  
  function searchToggle() {
    if (search.classList.contains('header__search--abs')) {
      searchOpenBtn.classList.remove('search__open--active')
      search.classList.remove('header__search--abs');
      document.querySelector('.wrapper').classList.remove('overlay');
      searchInput.blur();
    }
    else {
      searchOpenBtn.classList.add('search__open--active')
      search.classList.add('header__search--abs');
      document.querySelector('.wrapper').classList.add('overlay');
      searchInput.focus();
    }
  }
  
  /* Sliders */
  
  new Swiper('#slider-products-1 .swiper', {
    slidesPerView: "auto",
    spaceBetween: 30,
    centeredSlides: false,
    loop: true,
    navigation: {
      nextEl: '#slider-products-1 .swiper-button-next',
      prevEl: '#slider-products-1 .swiper-button-prev',
    },
    scrollbar: {
      el: '#slider-products-1 .swiper-scrollbar',
      draggable: true,
    },
  });
  
  new Swiper('#slider-products-2 .swiper', {
    slidesPerView: "auto",
    spaceBetween: 30,
    centeredSlides: false,
    loop: true,
    navigation: {
      nextEl: '#slider-products-2 .swiper-button-next',
      prevEl: '#slider-products-2 .swiper-button-prev',
    },
    scrollbar: {
      el: '#slider-products-2 .swiper-scrollbar',
      draggable: true,
    },
  });
  
  new Swiper('#slider-products-sm .swiper', {
    slidesPerView: "auto",
    spaceBetween: 30,
    loop: true,
    centeredSlides: false,
    navigation: {
      nextEl: '#slider-products-sm .swiper-button-next',
      prevEl: '#slider-products-sm .swiper-button-prev',
    },
    scrollbar: {
      el: '#slider-products-sm .swiper-scrollbar',
      draggable: true,
    },
  });
  
  
  /* Category Slider */
  new Swiper('.category-slider', {
    slidesPerView: "auto",
    spaceBetween: 20,
    // loop: true,
    navigation: {
      nextEl: '.category-slider .swiper-button-next',
      prevEl: '.category-slider .swiper-button-prev',
    },
  });
  
  /* Slider on Home Page */
  
  new Swiper('.slider-main .swiper', {
    initialSlide: 1,
    slidesPerView: 1,
    spaceBetween: 200,
    loop: true,
    navigation: {
      nextEl: '.slider-main .swiper-button-next',
      prevEl: '.slider-main .swiper-button-prev',
    },
  });
  
  
  /* Product Slider with Thumbs */
  
  const sliderThumbs = new Swiper('#product-images-slider .product-images__thumbs .swiper-container', { 
    direction: 'vertical', 
    slidesPerView: 3, 
    spaceBetween: 10,
    loop: true,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: { 
      nextEl: '#product-images-slider .swiper-button-next', 
      prevEl: '#product-images-slider .swiper-button-prev'
    },
    breakpoints: {
      460: {
        spaceBetween: 20,
      },
      766: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    }
  });
  
  const sliderImages = new Swiper('#product-images-slider .product-images__images .swiper-container', { 
    direction: 'horizontal', 
    slidesPerView: 1, 
    spaceBetween: 20,    
    loop: true,
    navigation: { 
      nextEl: '#product-images-slider .swiper-button-next', 
      prevEl: '#product-images-slider .swiper-button-prev' 
    },
    thumbs: { 
      swiper: sliderThumbs
    },
  });
  
  
  /* Custom input['number'] */
  
  let numInputs = document.querySelectorAll('.input-number');
  if (numInputs) {
    for (let i = 0; i < numInputs.length; i++) {
      let numInp = numInputs[i].querySelector('.input-number__input');
      let numInpMax   = numInp.max;
      let numInpMin   = numInp.min;
      let numInpPlus  = numInputs[i].querySelector('.input-number__plus');
      let numInpMinus = numInputs[i].querySelector('.input-number__minus');
      numInpPlus.addEventListener('click', function(e) {
        let numInpVal = parseInt(numInp.value);
        if ( numInpVal < numInpMax) {
          numInp.value = numInpVal+1;
        }
      })
      numInpMinus.addEventListener('click', function(e) {
        let numInpVal = parseInt(numInp.value);
        if (numInpVal > numInpMin) {
          numInp.value = numInpVal-1;
        }
      })
    }
  }
  
  /* Range-slider */
  
  let ranges = document.querySelectorAll('.range-slider');
  if (ranges) {
    for (let i = 0; i < ranges.length; i++) {
      noUiSlider.create(ranges[i], {
        start: [500, 5000],
        connect: true,
        step: 1,
        range: {
          'min': [500],
          'max': [5000]
        },
        tooltips: true,
        format: wNumb({
          decimals: 0,
          suffix: ' ₽'
        }),
      });
    }
  }
  
  
  
  /* Product Popup */
  MicroModal.init({
    disableFocus: true,
    disableScroll: true
  });
  
  let productCards = document.querySelectorAll('.product-card');
  let productModal = document.querySelector('#product-popup');
  
  if (productCards) {
    for (let i = 0; i < productCards.length; i++) {
      let product = productCards[i];
      product.addEventListener('click', function(e){
        
        if (e.target.classList.contains('product-card__image-wrap')) {
          
          MicroModal.show('product-popup');

          let productModalOverlay = productModal.querySelector('.modal__overlay');
          let offset = e.target.getBoundingClientRect().top + scrollY;
          productModalOverlay.style.position = 'static';
          productModal.style.position = 'absolute';
          productModal.style.top = offset + 'px';
          productModal.style.left = '0';
          productModal.style.width = '100%';

          window.scrollTo({
            top: scrollY
          });

          // Product Info
          let productTitle   = product.querySelector('.product-card__title');
          let productCat     = product.querySelector('.product-card__category');
          let productText    = product.querySelector('.product-card__exerpt');
          
          // Modal
          let modal    = document.querySelector('#product-popup');
          let mTitle   = modal.querySelector('.product-popup__title');
          let mCat     = modal.querySelector('.product-popup__cat');
          let mText    = modal.querySelector('.product-popup__text');
          
          mTitle.innerHTML = productTitle.innerHTML;
          mCat.innerHTML   = productCat.innerHTML;
          mText.innerHTML  = productText.innerHTML;
          
        }
      });
    }
  }
  
  /* Mobile Filter */
  
  let mFilterItems = document.querySelectorAll('.m-filter__body > .m-filter__item');
  if (mFilterItems) {
    for (let i = 0; i < mFilterItems.length; i++) {
      let dropPanel = mFilterItems[i].querySelector('.m-filter-item__dropdown');
      if (dropPanel) {
        let dropPanelBtn = mFilterItems[i].querySelector('.m-filter-item__title');
        
        dropPanelBtn.addEventListener('click', function() {
          let dropPanelClose = dropPanel.querySelector('.m-filter__back');
          dropPanel.classList.add('m-filter-item__dropdown--active');
          
          dropPanelClose.addEventListener('click', function(){
            dropPanel.classList.remove('m-filter-item__dropdown--active');
          })
          
        });
      }
      
    }
    
  }
  
  
  /* Footer Accordion */  
  function enabledAccordion () {
    let footerAccordions = document.querySelectorAll('.footer__accordion');
    
    if (screenWidth <= 576) {
      
      for (let i = 0; i < footerAccordions.length; i++) {
        
        let footerAcc        = footerAccordions[i];
        let footerAccContent = footerAcc.querySelector('.footer__accordion-content');
        let footerAccToggle  = footerAcc.querySelector('.footer__accordion-toggle');
        footerAccToggle.addEventListener('click', function(){
          if ( footerAccContent.classList.contains('footer__accordion-content--active') ) {
            footerAccToggle.classList.remove('footer__accordion-toggle--active');
            footerAccContent.classList.remove('footer__accordion-content--active');
          }
          else {
            footerAccToggle.classList.add('footer__accordion-toggle--active');
            footerAccContent.classList.add('footer__accordion-content--active');
          }
        });
      }
    }
    else {
      return;
    }
  }
  enabledAccordion();
  
  
  
});


