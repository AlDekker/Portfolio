$(document).ready(function(){



  /*Mobile menu*/
  $('.hamburger__btn').click(function(){
    if ($(this).hasClass('active') ){
      $(this).removeClass('active');
      $('.mobile-menu').stop().removeClass('active');
      $('body').removeClass('no-scroll');
      return;
    }
    $(this).addClass('active');
    $('.mobile-menu').stop().addClass('active');
    $('body').addClass('no-scroll');
  });
  /**/


  /*Chrome Smooth Scroll*/
  try {
    $.browserSelector();
    if($("html").hasClass("chrome")) {
      $.smoothScroll();
    }
  } catch(err) {

  };

  $("img, a").on("dragstart", function(event) { event.preventDefault(); });

});
