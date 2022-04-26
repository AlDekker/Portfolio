window.addEventListener('load', function () {
  
  
  /* Mobile Menu */
  let mmBtn = document.querySelector('.header__hamburger');
  let mmList = document.querySelector('.header__menu .menu__list');
  mmBtn.addEventListener('click', function(e) {
    e.preventDefault;
    if (mmList.classList.contains('opened')) {
      closeMenu();
    }
    else {
      openMenu();
    }
  })
  
  function closeMenu() {
    mmBtn.classList.remove('active');
    mmList.classList.remove('opened');
    enableBodyScroll();
  }
  
  function openMenu() {
    mmBtn.classList.add('active');
    mmList.classList.add('opened');
    disableBodyScroll()
  }
  
  /* Scroll to ID */
  
  let menu = document.querySelector('.menu');
  menu.addEventListener('click', function(e){
    if (!e.target.classList.contains('menu__link')){
      return;
    }
    e.preventDefault();
    let link = e.target;
    let linkTo = link.hash;
    if (linkTo !== '') {
      scrollToId(linkTo);
    }
  });
  
  function scrollToId (id){
    let target = document.querySelector(id);
    if(target !== null){
      let pos = target.offsetTop;
      smoothScroll(pos);
    }
  }
  
  function smoothScroll(position){
    closeMenu();
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
  
  function disableBodyScroll() {
    document.body.classList.add('no-scroll');
  }
  
  function enableBodyScroll() {
    document.body.classList.remove('no-scroll');
  }
  
  /* Accordion */
  let faqItems = document.querySelectorAll('.faq__item');
  for (let i = 0; i < faqItems.length; i++) {
    let item = faqItems[i];
    item.addEventListener('click', function(e){
      
      
      
      if (e.target.classList.contains('faq__toggle')) {
        let faqToggle = e.target;
        let faqBody = item.querySelector('.faq__body');
        
        if (faqBody.classList.contains('opened')){
          faqBody.classList.remove('opened');
          return;
        }

        // remove active class 
        if (document.querySelector('.faq__item.active')) {
          document.querySelector('.faq__item.active .faq__body').classList.remove('opened');
          document.querySelector('.faq__item.active').classList.remove('active');
        }
        

        item.classList.add('active');
        faqBody.classList.add('opened');
      }
    })
  }
  
});
