//carousel
jQuery(function ($) {
  $('.slider').slick({
    speed: 800,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,

    responsive: [
      {
        breakpoint: 1080,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: '24px',
        }
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: '16px',
        }
      },
    ]
  });
});