// import $ from 'jquery'; window.jQuery = $; window.$ = $;
// import Swiper from 'swiper';

window.addEventListener('DOMContentLoaded', function () {

  /* mobile menu */

  let menu = document.querySelector('.mobile-menu')
  let menuBtn = document.querySelector('.mobile-menu-toggle')

  menuBtn.addEventListener('click', function () {
    if (menu.classList.contains('opened')) {
      closeMobileMenu()
    }
    else {
      openMobileMenu()
      let menuLinks = menu.querySelectorAll('a')
      for (let i = 0; i < menuLinks.length; i++) {
        menuLinks[i].addEventListener('click', function () {
          closeMobileMenu()
        })
      }

    }
  })

  function openMobileMenu() {
    menuBtn.classList.add('active')
    menu.classList.add('opened')
    document.body.style.overflow = 'hidden'
  }

  function closeMobileMenu() {
    menuBtn.classList.remove('active')
    menu.classList.remove('opened')
    document.body.style.overflow = 'auto'
  }

  /* Tariffs Input range */
  let tariffs = document.querySelectorAll('.tariff')
  if (tariffs) {
    for (let i = 0; i < tariffs.length; i++) {

      if (tariffs[i].querySelector('.tariff-price__range')) {
        let inputRange = tariffs[i].querySelector('.tariff-price__range')
        let output = inputRange.parentElement.querySelector('.tariff-price__output')
        let subscribers = tariffs[i].querySelector('.tariff__subscribers')

        output.innerHTML = inputRange.value
        subscribers.innerHTML = calcSubscribers(inputRange.value)

        inputRange.addEventListener('input', function () {
          range(this, output, subscribers)
        });

        inputRange.addEventListener('change', function () {
          range(this, output, subscribers)
        });

        function range(input, output, subscribers) {
          output.innerHTML = input.value
          subscribers.innerHTML = calcSubscribers(input.value)
        }

        function calcSubscribers(inpValue) {
          return inpValue / 100
        }

      }

    }
  }

  /* FAQ */

  let faqItems = document.querySelectorAll('.faq__item')

  for (let i = 0; i < faqItems.length; i++) {

    let faqQuestion = faqItems[i].querySelector('.question')
    let faqQuestionBtn = faqItems[i].querySelector('.question__button')

    faqQuestionBtn.addEventListener('click', function () {
      if (faqQuestion.classList.contains('active')) {
        faqQuestion.classList.remove('active')
        return;
      }
      faqQuestion.classList.add('active')
    })

  }

  /* header backgound video autoplay fix */

  const headerVideo = document.querySelector('.header__bg-video')
  if (headerVideo) {
    setTimeout(() => {
      headerVideo.play()
    }, 0)
  }
  

 


})


