//bs-tooltips
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
// scrollToTop button
//Thanks to: http://www.webtipblog.com/adding-scroll-top-button-website/
$(document).ready(function(){
  $(function(){
      $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 100) {
        $('.scroll-top-wrapper').addClass('show');
      } else {
        $('.scroll-top-wrapper').removeClass('show');
      }
    });
    $('.scroll-top-wrapper').on('click', scrollToTop);
  });
  function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
  }
});
// carousel partners
$(document).ready(function () {
  $('#eventCarousel').carousel({
      interval: 5000
  })
  $('.fdi-Carousel .item').each(function () {
      var next = $(this).next();
      if (!next.length) {
          next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      if (next.next().length > 0) {
          next.next().children(':first-child').clone().appendTo($(this));
      }
      else {
          $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
      }
  });
});
