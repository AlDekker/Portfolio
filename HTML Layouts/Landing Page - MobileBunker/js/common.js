$(document).ready(function(){

  // Popup
  $('.btn-popup').magnificPopup({
    type: 'inline',
    fixedContentPos: false,
    closeOnBgClick: false // Отключает закрытие окна при нажатии на фон
  });

  $('body').on('click', '[href*="#"]', function(e){
    var fixed_offset = 50;
    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
    e.preventDefault();
  });

  // Accordion
  let acc = document.getElementsByClassName("accordion__btn");
  let i;
  
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      let panel = this.nextElementSibling;
      if (panel.style.maxHeight){
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  };
  
  // Form
  
  $(".form__input[type=tel]").mask("+7 (999) 999-99-99");
  
  // E-mail Ajax Send
  $("#callback-form").submit(function() {
    let th = $(this);
    let fd = new FormData(this);
    
    let btn = $('.form__button'); 
    btn.attr("disabled", true);
    btn.addClass('form__button--loading');
    
    $.ajax({
      type: "POST",
      url: "mail/send.php", //Path to send.php
      contentType: false,
      processData: false,
      data: fd
    }).done(function() {
      
      btn.removeClass('form__button--loading'); // Убираем иконку загрузки
      $(th).find(".form__success").css('display', 'flex').hide().fadeIn(); // Показывает уведомление об отправке
      
      setTimeout(function() {
        $(th).find(".form__success").fadeOut(); // Через 4с скрывает уведомление
      }, 4000);
      
      setTimeout(function() { // Через 6 секунд после отправки
        btn.attr("disabled", false); //Включает кнопку отправки
      }, 6000);
    });
    return false;
  });
  

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
