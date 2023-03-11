// import MicroModal from 'micromodal';
import Swiper, { Navigation, Pagination } from 'swiper';
Swiper.use([Navigation, Pagination]);
import Chart from 'chart.js/auto';

window.addEventListener('load', function () {

  /* Menu */

  let menu = document.querySelector('.header-menu')
  let menuClose = menu.querySelector('.header-menu__close')
  let hamburder = document.querySelector('.header__hamburger')

  hamburder.addEventListener('click', openMenu)
  menuClose.addEventListener('click', closeMenu)
  menuClose.addEventListener('touchstart', closeMenu)

  function openMenu() {
    menu.classList.add('active')
    document.body.classList.add('is-menu-opened')
    window.addEventListener('click', clickOutsideMenu)
    window.addEventListener('touchstart', clickOutsideMenu)
  }

  function closeMenu() {
    menu.classList.remove('active')
    document.body.classList.remove('is-menu-opened')
    window.removeEventListener('click', clickOutsideMenu)
    window.removeEventListener('touchstart', clickOutsideMenu)
  }

  function clickOutsideMenu(e) {
    if (e.target.classList.contains('header-menu')) {
      closeMenu()
    }
  }

  window.addEventListener('resize', function () {
    if (menu.classList.contains('active')) {
      if (window.innerWidth > 998) {
        closeMenu()
      }
    }
  })

  /* FAQ */

  let faqItems = document.querySelectorAll('.faq__item')
  if (faqItems) {
    for (let i = 0; i < faqItems.length; i++) {
      let item = faqItems[i]
      let itemAnswer = item.querySelector('.faq__answer')
      let itemQuestion = item.querySelector('.faq__question')

      itemQuestion.addEventListener('click', function () {
        if (item.classList.contains('opened')) {
          item.classList.remove('opened')
          return;
        }
        item.classList.add('opened')
      })
    }
  }

  /* Product */

  let products = document.querySelectorAll('.product')

  products.forEach(product => {
    if (product.querySelector('.product__form')) {

      let button = product.querySelector('.js-product__button')
      let form = product.querySelector('.product__form')
      let addAllBtn = product.querySelector('.product__add-all')
      let count = product.querySelector('.counter__input')
      let max = count.dataset.max

      button.addEventListener('click', function () {
        this.remove();
        form.classList.add('opened')
      })

      addAllBtn.addEventListener('click', () => count.value = max)
    }
  })

  /* Product counter */

  let counters = document.querySelectorAll('.counter')
  counters.forEach(counter => {

    let input = counter.querySelector('.counter__input')
    let incBtn = counter.querySelector('.counter__inc')
    let decBtn = counter.querySelector('.counter__dec')
    let min = input.dataset.min
    let max = input.dataset.max

    function setValue(value) {
      if (isNaN(value)) {
        value = min
      }
      input.value = Math.max(min, Math.min(value, max))
    }

    function inc() {
      setValue(parseInt(input.value) + 1)
    }

    function dec() {
      setValue(parseInt(input.value) - 1)
    }

    incBtn.addEventListener('click', inc)
    decBtn.addEventListener('click', dec)

    input.addEventListener('input', function () {
      input.value = input.value.replace(/\D/g, '')
    })

    input.addEventListener('change', function () {
      setValue(parseInt(input.value))
    })
  })

  /* Product Payments Mobile */

  let prPayment = document.querySelector('.products-options__payments')
  if (prPayment) {
    let prPaymentSelect = prPayment.querySelector('.products-options__payments-select')
    let prPaymentDropdown = prPayment.querySelector('.products-options__payments-switcher')
    let prPaymentInputs = prPayment.querySelectorAll('.switcher__input')

    function closeDropdown() {
      prPaymentDropdown.classList.remove('opened')
    }

    function openDropdown() {
      prPaymentDropdown.classList.add('opened')
    }

    prPaymentSelect.addEventListener('click', function () {
      if (prPaymentDropdown.classList.contains('opened')) {
        closeDropdown()
      }
      else {
        openDropdown()
      }
    })

    prPaymentInputs.forEach(input => {
      input.addEventListener('change', function () {
        prPaymentSelect.innerHTML = input.dataset.label
        closeDropdown()
      })
    })

  }

  /* Product Tabs */

  let prTabsWrapper = document.querySelector('.products-tabs')

  if (prTabsWrapper) {

    let tabsToggles = prTabsWrapper.querySelectorAll('.products-tabs__toggle')

    function setActiveTab(id) {
      document.getElementById(id).classList.add('active')
    }

    if (!prTabsWrapper.querySelector('products-tabs__toggle')) {
      tabsToggles[0].classList.add('active')
      setActiveTab(tabsToggles[0].dataset.targetId)
    }

    tabsToggles.forEach(toggle => {
      toggle.addEventListener('click', function () {
        let id = this.dataset.targetId;
        let target = document.getElementById(id)

        if (!target.classList.contains('active')) {
          prTabsWrapper.querySelector('.products-tabs__item.active').classList.remove('active')
          prTabsWrapper.querySelector('.products-tabs__toggle.active').classList.remove('active')

          toggle.classList.add('active')
          setActiveTab(id);
        }
      })
    })
  }

  /* Tooltip */

  let tooltips = document.querySelectorAll('*[data-tooltip]')
  for (let i = 0; i < tooltips.length; i++) {
    tooltips[i].addEventListener('click', function () {
      toggleTooltip(this)
    })
  }

  function toggleTooltip(el) {
    if (el.classList.contains('active')) {
      el.classList.remove('active')
    }
    else {
      el.classList.add('active')
    }
  }

  /* Custom Select */

  const selects = document.querySelectorAll('.select')

  for (let i = 0; i < selects.length; i++) {

    let selectNative = selects[i].querySelector('.select__native')
    let selectCustom = selects[i].querySelector('.select__custom')
    let selectCustomBox = selectCustom.querySelector('.select__custom-trigger')
    let selectCustomOpts = selectCustom.querySelector('.select__custom-options')
    let customOptsList = Array.from(selectCustomOpts.children)
    let optionsCount = customOptsList.length;
    let defaultLabel = selectCustomBox.getAttribute("data-value");

    let optionChecked = ''
    let optionHoveredIndex = -1

    selectCustomBox.addEventListener('click', (e) => {
      const isClosed = !selectCustom.classList.contains('is-active')

      if (isClosed) {
        openSelectCustom();
      } else {
        closeSelectCustom();
      }
    })

    function openSelectCustom() {
      selectCustom.classList.add("is-active");
      // Remove aria-hidden in case this was opened by a user
      // who uses AT (e.g. Screen Reader) and a mouse at the same time.
      selectCustom.setAttribute("aria-hidden", false);

      if (optionChecked) {
        const optionCheckedIndex = customOptsList.findIndex(
          (el) => el.getAttribute("data-value") === optionChecked
        );
        updateCustomSelectHovered(optionCheckedIndex);
      }

      // Add related event listeners
      document.addEventListener("click", watchClickOutside);
      document.addEventListener("keydown", supportKeyboardNavigation);
    }

    function closeSelectCustom() {
      selectCustom.classList.remove("is-active");

      selectCustom.setAttribute("aria-hidden", true);

      updateCustomSelectHovered(-1);

      // Remove related event listeners
      document.removeEventListener("click", watchClickOutside);
      document.removeEventListener("keydown", supportKeyboardNavigation);
    }

    function updateCustomSelectHovered(newIndex) {
      const prevOption = selectCustomOpts.children[optionHoveredIndex];
      const option = selectCustomOpts.children[newIndex];

      if (prevOption) {
        prevOption.classList.remove("isHover");
      }
      if (option) {
        option.classList.add("isHover");
      }

      optionHoveredIndex = newIndex;
    }

    function updateCustomSelectChecked(value, text) {
      const prevValue = optionChecked;

      const elPrevOption = selectCustomOpts.querySelector(
        `[data-value="${prevValue}"`
      );
      const elOption = selectCustomOpts.querySelector(`[data-value="${value}"`);

      if (elPrevOption) {
        elPrevOption.classList.remove("is-active");
      }

      if (elOption) {
        elOption.classList.add("is-active");
      }

      selectCustomBox.textContent = text;
      optionChecked = value;
    }

    function watchClickOutside(e) {
      const didClickedOutside = !selectCustom.contains(e.target);
      if (didClickedOutside) {
        closeSelectCustom();
      }
    }

    function supportKeyboardNavigation(e) {
      // press down -> go next
      if (e.keyCode === 40 && optionHoveredIndex < optionsCount - 1) {
        let index = optionHoveredIndex;
        e.preventDefault(); // prevent page scrolling
        updateCustomSelectHovered(optionHoveredIndex + 1);
      }

      // press up -> go previous
      if (e.keyCode === 38 && optionHoveredIndex > 0) {
        e.preventDefault(); // prevent page scrolling
        updateCustomSelectHovered(optionHoveredIndex - 1);
      }

      // press Enter or space -> select the option
      if (e.keyCode === 13 || e.keyCode === 32) {
        e.preventDefault();

        const option = selectCustomOpts.children[optionHoveredIndex];
        const value = option && option.getAttribute("data-value");

        if (value) {
          selectNative.value = value;
          updateCustomSelectChecked(value, option.textContent);
        }
        closeSelectCustom();
      }

      // press ESC -> close selectCustom
      if (e.keyCode === 27) {
        closeSelectCustom();
      }
    }

    // Update selectCustom value when selectNative is changed.
    selectNative.addEventListener("change", (e) => {
      const value = e.target.value;
      const elRespectiveCustomOption = selectCustomOpts.querySelectorAll(
        `[data-value="${value}"]`
      )[0];

      updateCustomSelectChecked(value, elRespectiveCustomOption.textContent);
    });

    // Update selectCustom value when an option is clicked or hovered
    customOptsList.forEach(function (elOption, index) {
      elOption.addEventListener("click", (e) => {
        const value = e.target.getAttribute("data-value");

        // Sync native select to have the same value
        selectNative.value = value;
        updateCustomSelectChecked(value, e.target.textContent);
        closeSelectCustom();
      });

      elOption.addEventListener("mouseenter", (e) => {
        updateCustomSelectHovered(index);
      });

    });

  }

  /* Editable Field */

  let editableElems = document.querySelectorAll('.js-editable')
  if (editableElems) {
    editableElems.forEach(el => {
      let inputs = el.querySelectorAll('input')
      let button = el.querySelector('.js-editable-btn')

      inputs[0].addEventListener('click', function() {
        if ( !el.classList.contains('is-active') ) {
          el.classList.add('is-active')
          button.classList.add('button')
          for (let input of inputs) {
            input.readOnly = false
          }
        }
      })

      button.addEventListener('click', function() {
        if ( !el.classList.contains('is-active') ) {
          el.classList.add('is-active')
          button.classList.add('button')
          for (let input of inputs) {
            input.readOnly = false
          }
        }
        else {
          el.classList.remove('is-active')
          button.classList.remove('button')
          for (let input of inputs) {
            input.readOnly = true
          }
        }
      })

    })
  }

  /* Table Sort */

  let tableSorts = document.querySelectorAll('.js-sort')
  if (tableSorts) {
    for (let i = 0; i < tableSorts.length; i++) {
      tableSorts[i].addEventListener('click', function () {
        if (this.classList.contains('table__sort--state-2')) {
          this.classList.remove('table__sort--state-2')
          return;
        }
        if (this.classList.contains('table__sort--state-1')) {
          this.classList.remove('table__sort--state-1')
          this.classList.add('table__sort--state-2')
          return;
        }
        this.classList.add('table__sort--state-1')
      })
    }
  }

  /* Micromodal */

  // MicroModal.init({
  //   openTrigger: 'data-modal',
  //   openClass: 'opened',
  //   disableScroll: true
  // });

  /* Slider */

  new Swiper('#profile-balance', {
    initialSlide: 1,
    slidesPerView: 1,
    spaceBetween: 20,
    allowTouchMove: false,
    navigation: {
      nextEl: '.balance-nav__btn--next',
      prevEl: '.balance-nav__btn--prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

});


