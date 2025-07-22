$(document).ready(function(){
    $('body').append('<div id="scrollTop" class="gotop circle"></div>');
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

$('a').click(function()
{
    $('html, body').animate(
    {
      scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

$(document).ready(function()
{
    $(".collapse.show").each(function()
    {
      $(this).prev(".card-header").find(".fa").addClass("la-angle-up").removeClass("la-angle-down");
    });
    $(".collapse").on('show.bs.collapse', function()
    {
      $(this).prev(".card-header").find(".fa").removeClass("la-angle-down").addClass("la-angle-up");
    }).on('hide.bs.collapse', function()
    {
      $(this).prev(".card-header").find(".fa").removeClass("la-angle-up").addClass("la-angle-down");
    });
});