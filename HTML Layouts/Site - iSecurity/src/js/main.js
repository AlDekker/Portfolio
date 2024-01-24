import Swiper from 'swiper';
import { Navigation, Pagination, Scrollbar, Controller, Thumbs, Autoplay } from 'swiper/modules';
import HystModal from 'hystmodal';

window.addEventListener('load', function () {

  /*  modal */

  const modal = new HystModal({
    linkAttributeName: 'data-hystmodal',
    catchFocus: true,
    waitTransitions: true,
    closeOnEsc: true,
    backscroll: true,
  });

  /* formSubject */

  const formSubject = document.querySelector('#form-subject')

  if (formSubject) {
    formSubject.addEventListener('submit', function (e) {
      e.preventDefault()
      let value = this.querySelector('input[name="subject"]:checked').value
      let modalId = `modal-${value}`

      if (document.getElementById(modalId)) {
        modal.open(`#${modalId}`)
      }
    })
  }

  /* form */

  const regExps = {
    card: /\D/g
  }

  const forms = document.querySelectorAll('.js-form')

  forms.forEach(form => {

    let inputs = form.querySelectorAll('input, textarea');
    let sendButton = form.querySelector('.form__submit')

    let inputsArray = Array.from(inputs).map(input => {
      const { id, name, validity: { valid } } = input
      return { id, name, valid }
    })

    checkValidForm()

    for (let input of inputs) {

      let rule = input.dataset.rule;
      let count = +input.dataset.count;
      let isValid = true

      input.addEventListener('input', function () {

        isValid = this.validity.valid

        if (!!rule && rule in regExps) {
          this.value = this.value.replace(regExps[rule], '');
        }

        if (!!count) {
          isValid = this.value.length == count
        }

        inputsArray = inputsArray.map(el => {
          if (el.id === input.id) {
            return { ...el, valid: isValid };
          }
          return el;
        });

        checkValidForm()
      })
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(form);

      fetch('mail/send.php', {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (response.ok) {
          form.classList.add('is-success')
          setTimeout(()=> {
            form.reset()
            form.classList.remove('is-success')
            modal.close()
          }, 2000)

        }
      })
      .catch((error) => console.error(error));
    })


    function checkValidForm() {
      let isValid = inputsArray.some(item => item.valid === false)

      if (!isValid) {
        enabledBtn(sendButton)
      }
      else {
        disabledBtn(sendButton)
      }

      return !isValid
    }
  })

  /* DisabledBtn */

  function disabledBtn(btn) {
    btn.disabled = true;
  }

  /* EnabledBtn */

  function enabledBtn(btn) {
    btn.disabled = false;
  }

  /* menu */

  const menu = document.querySelector('.js-menu')

  if (menu) {
    const menuToggle = document.querySelector('.js-menu-toggle')
    let isAnimation = false;

    menuToggle.addEventListener('click', function () {
      if (isAnimation) return

      if (this.classList.contains('is-active')) {
        closeMenu()
      } else {
        openMenu()
      }
    })

    function closeMenu() {
      isAnimation = true
      menuToggle.setAttribute('aria-expanded', false)
      menuToggle.classList.remove('is-active')
      menu.classList.remove('is-active')

      menu.addEventListener('transitionend', function () {
        menu.classList.add('is-closed')
        isAnimation = false
      }, {
        once: true
      })

      document.removeEventListener('keyup', pressEsc)
    }

    function openMenu() {
      isAnimation = true
      menuToggle.setAttribute('aria-expanded', true)
      menuToggle.classList.add('is-active')
      menu.classList.remove('is-closed')

      setTimeout(() => {
        menu.classList.add('is-active')
        isAnimation = false
      }, 20);

      document.addEventListener('keyup', pressEsc)
    }

    function pressEsc(e) {
      if (e.key === 'Escape') {
        closeMenu()
      }
    }
  }

  /* previews slider */

  const previewsSlider = new Swiper('.swiper', {
    modules: [Navigation, Pagination, Scrollbar, Controller, Thumbs, Autoplay],
    initialSlide: 1,
    slidesPerView: 1.3,
    spaceBetween: -15,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3000
    },
    speed: 700,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 1.2,
        spaceBetween: -25,
      }
    }
  });

  /* show hidden block on scroll */

  let hiddenBlock = document.querySelector('.js-show-on-scroll')

  if (hiddenBlock) {
    window.addEventListener('scroll', showRules)
  }

  function showRules() {
    hiddenBlock.classList.add('is-visible');
    window.removeEventListener('scroll', showRules);
  }

  /* check agreements */

  let agreementsCheckbox = document.querySelector('.js-agreements')
  let activateButtons = document.querySelectorAll('.activate-button')

  if (agreementsCheckbox) {
    agreementsCheckbox.addEventListener('change', function () {
      setButtonState(this.checked)
    })
  }

  if (agreementsCheckbox && activateButtons) {
    setButtonState()
  }

  function setButtonState(status = agreementsCheckbox.checked) {
    activateButtons.forEach(button => {
      button.disabled = !status
    })
  }

  /* setCurrentYear */

  let yearBlock = document.querySelector('.js-current-year')

  if (yearBlock) {
    const today = new Date()
    yearBlock.innerText = today.getFullYear()
  }

});
