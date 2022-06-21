$(function() {
    $('.rev_slider').slick({
        dots: true,
        arrows: false,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    })
})

$('.navbar-toggler').click(function () {
  var navbar = $('.navbar');
  var toggle = $('.navbar-toggler');

  if (!toggle .hasClass('collapsed')) {
    navbar.addClass('no-shadow');
  } else {
    navbar.removeClass('no-shadow');
  };
});