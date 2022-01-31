import Typed from 'typed.js';

window.addEventListener('load', function () {

  /* Typed text effect */
  let typedInHeader = new Typed('.header__typed-text', {
    stringsElement: '.header__typed-strings',
    typeSpeed: 50,
    startDelay: 500,
    backSpeed: 20,
    loop: true
  });
  
  /* Smooth scrolling to ID */
  let scrollLinks = document.querySelectorAll('.scrollToId');
  for (let scrollLink of scrollLinks) {
    scrollLink.addEventListener('click', function(e){
      e.preventDefault();
      let linkTo = this.hash;
      if (linkTo !== '') {
        scrollToId(linkTo);
      }
    })
  }

  function scrollToId(id){
    let target = document.querySelector(id);
    if(target !== null){
      let pos = target.offsetTop;
      smoothScroll(pos);
    }
  }
  
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

  /*  */
  let images = document.querySelectorAll('img');
  for (let image of images) {
    image.addEventListener('dragstart', function(e){
      e.preventDefault();
    })
  }

});


