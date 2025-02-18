$(document).ready(function(){
    $('body').append('<div id="scrollTop" class="gotop"> <i class="las la-angle-up h3"></i> </div>');
      $(window).scroll(function () {
          if ($(this).scrollTop() != 0) {
              $('#scrollTop').fadeIn();
          } else {
              $('#scrollTop').fadeOut();
          }
      }); 
  $('#scrollTop').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 1000);
      return false;
  });
});