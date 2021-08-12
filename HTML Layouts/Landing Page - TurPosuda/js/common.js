$(document).ready(function(){

  $('.btn-popup').magnificPopup({
    type: 'inline',
    fixedContentPos: false,
    closeOnBgClick: false, // Отключает закрытие окна при нажатии на фон
  });

  $(".form__input[type=tel]").mask("+7 (999) 999-99-99");

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
