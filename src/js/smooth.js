// smooth
jQuery(function ($) {
  const windowheight = $(window).height();
  let smooth = $('#js-smooth');
  let top = $("#js-top");

  $(window).scroll(function () {
    let scroll = $(this).scrollTop();

    if (scroll > windowheight) {
      $(smooth).addClass("smooth-active");
    } else {
      $(smooth).removeClass("smooth-active");
    }
  })

  $(smooth).click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 600);
    return false;
  });

  $(top).click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 600);
    return false;
  });
});