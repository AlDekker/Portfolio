import $ from 'jquery'; window.jQuery = $; window.$ = $;
import '../../node_modules/select2/dist/js/select2.js'
import Swiper, { Navigation } from 'swiper'
Swiper.use([ Navigation ]);
import Likely from 'ilyabirman-likely'
import baguetteBox from 'baguettebox.js'


window.addEventListener('load', function () { 
  
  /* Mobile menu */
  const menuButton = document.querySelector('.header__menu-btn')
  const menu = document.querySelector('.header__nav')
  menuButton.addEventListener('click', function(e){
    e.preventDefault()
    $(menu).slideToggle();
    this.classList.toggle('hamburger--active')  
  })
  
  /* Share button */
  let shareButton = document.querySelectorAll('.share__button')
  
  if (shareButton.length > 0) {
    
    shareButton[0].addEventListener('click', (e) => {
      for( let i=0; i < shareButton.length; i++ ) {
        shareButton[i].classList.toggle('open')
        shareButton[0].classList.remove('sent')
      }
    })
    for( let i=1; i < shareButton.length; i++ ) {
      
      shareButton[i].addEventListener('click', (e) => {
        
        for( let i=0; i < shareButton.length; i++ ) {
          shareButton[i].classList.toggle('open')
        }
        shareButton[0].classList.toggle('sent')
      })
    }
    
  }
  

  /* Copy button */
  let copyButton = document.querySelector('.share__button--link')
  if (copyButton) {
    copyButton.addEventListener('click', function(e){
      e.preventDefault()
      let currentUrl = document.location.href
      navigator.clipboard.writeText(currentUrl)
    })
  }
  
  /* Gallery */
  baguetteBox.run('.gallery')
  
  /* Likely */
  Likely.initiate()
  
  /* Swiper */
  new Swiper('#slider-people', {
    slidesPerView: 1,
    spaceBetween: 30,
    autoHeight: false,
    loop: true,
    navigation: {
      nextEl: '.section-people .swiper-button-next',
      prevEl: '.section-people .swiper-button-prev',
    },
    breakpoints: {
      760: {
        slidesPerView: 3,
        autoHeight: true,
      },
    }
  });
  
  /* Lang Button */
  let langToggle = document.querySelector('.lang__toggle')
  let langDropdown   = document.querySelector('.lang__dropdown')
  langToggle.addEventListener('click', function(e){
    e.preventDefault()
    $(langDropdown).slideToggle(200)
  })
  
  /* Person Nav */
  let personNavMoreBtn = document.querySelector('.person-nav__more')
  let personNavHiddenElements = document.querySelectorAll('.person-nav__item.hidden')
  
  if (personNavMoreBtn) {
    personNavMoreBtn.addEventListener('click', function(e){
      e.preventDefault()
      this.style.display = 'none'
      personNavHiddenElements.forEach(function(i){
        $(i).fadeIn()
        i.classList.remove('hidden')
      })
    })
  }
  
  /* See More Button */
  let seeMoreBtns = document.querySelectorAll('.seemore')
  if (seeMoreBtns) {
    seeMoreBtns.forEach(function(item){
      
      let btn    = item
      let target = document.querySelector(btn.dataset.target)
      
      btn.addEventListener('click', function(){
        if (target.classList.contains('active')){
          $(target).slideToggle().removeClass('active')
          this.classList.remove('active')
        }
        else {
          $(target).slideToggle().addClass('active')
          this.classList.add('active')
        }
      })

    })
  }

  /* More Text */

  let moreText = document.querySelectorAll('.more-text')
  if (seeMoreBtns) {
    moreText.forEach(function(item){
      
      let btn     = item.querySelector('.more-text__btn')
      let content = item.querySelector('.more-text__content')

      btn.addEventListener('click', function(){
        this.style.display = 'none';
        $(content).fadeToggle();
      })

    })
  }

  /* Person Details */

  let detailsCells = $('.person__details td');
  $(detailsCells).on('click', function(){
    $(this).addClass('active');
  })

  /* Filter Sort */

  let filterSortBtns = document.querySelectorAll('.filter__sort-btn')
  filterSortBtns.forEach(function(item){
    item.addEventListener('click', function(){
      let last = document.querySelector('.filter__sort-btn.active');
      if (last && last !== this) {
        last.classList.remove('active')
      }
      this.classList.add('active')
      this.classList.toggle('reverse')
    })
  })
  
  /* Select2 */
  $('.custom-select').select2({
    dropdownAutoWidth: true,
  })
  
  $(".custom-select-icons").select2({
    dropdownAutoWidth: true,
    templateResult: formatState
  })
  
  function formatState (state) {
    if (!state.id) {
      return state.text
    }
    let option = state.element
    let iconUrl = state.element.dataset.icon
    let $result = $("<span class='select2-icon'><img src='" + iconUrl + "' alt=''>" + state.text + "</span>")
    
    return $result
  }
    
})


