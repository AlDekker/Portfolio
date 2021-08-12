(function($) {
  
  'use strict';

  // variables
  let isAnimatedMain         = $('.screen-main h1, .screen-main h3');
  let isAnimatedSecond       = $('.screen-second h2, .screen-second p');
  let isAnimatedThird        = $('.screen-third p');
  let isAnimatedThirdImg     = $('.screen-third svg');
  let isAnimatedLastLeft     = $('.screen-last h2').eq(0);
  let isAnimatedLastRight    = $('.screen-last h2').eq(1);




    // initialize fullPage
    $('#fullpage').fullpage({
      navigation: true,
      afterLoad: function(origin, destination, direction){
        if( origin.index == 0 ) {
          isAnimatedMain.addClass('animated fadeIn');
          isAnimatedMain.eq(0).css('animation-delay', '.5s');
          isAnimatedMain.eq(1).css('animation-delay', '1s');
        }
      },
      onLeave: function(origin, destination, direction){
        /**
        * use the following condition: 
        *
        *   if( index == 1 && direction == 'down' ) {
        *
        * if you haven't enabled the dot navigation
        * or you aren't interested in the animations that occur 
        * when you jump (using the dot navigation) 
        * from the first section to another sections 
        */
       
        // Second Screen
        if( origin.index == 0 && direction =='down' ) {
          isAnimatedSecond.addClass('animated fadeInRight');
          isAnimatedSecond.eq(0).css('animation-delay', '.5s');
          isAnimatedSecond.eq(1).css('animation-delay', '.8s');
          isAnimatedSecond.eq(2).css('animation-delay', '1.1s');
        }

        // Third Screen 
        if( origin.index == 1 && direction =='down' ) {
          isAnimatedThird.addClass('animated fadeInLeft').css('animation-delay', '.5s');
          isAnimatedThirdImg.addClass('animated rotateIn').css('animation-delay', '.5s');
        }

        // Last Screen 
        if( origin.index == 2 && direction =='down' ) {
          isAnimatedLastLeft.addClass('animated fadeInLeft').css('animation-delay', '.5s');
          isAnimatedLastRight.addClass('animated fadeInRight').css('animation-delay', '.5s');
        }

      }
    });
  

  
})(jQuery);
