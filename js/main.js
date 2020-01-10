$(document).ready(function() {

    //sticky-nav//
    $(window).scroll(function() {
      var header = $('.navigation');
    
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 1) {
          header.addClass('nav-sticky');
        } else {
          header.removeClass('nav-sticky');
        }
      });
    });


    $('.nav-items li').click(function () {
        $('.nav-items li').removeClass("active");
        $(this).addClass("active");
    });



      //Modal//
  $('.nav-bar').click(function() {
    $('.menu-modal').fadeIn('fast');
    $('body').css('overflow', 'hidden');
  });


  $('.close').click(function() {
    $('.menu-modal').fadeOut('fast');
    $('body').css('overflow', 'visible');
  });



  //swiper

  var swiper = new Swiper('.swiper-container', {
    
    autoplay: {
      delay: 2500,
      speed:800,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

  });

});
  
  