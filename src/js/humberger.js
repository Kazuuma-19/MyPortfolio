// humberger
jQuery(function ($) {

  $('#js-humberger').on('click', function () {
    $(this).toggleClass('nav-active');
    $('#js-humberger-nav').toggleClass('nav-active');
    $('.js-humberger-body').toggleClass('nav-active');
    $('.header-logo-link').toggleClass('nav-active');
  });

  // ハンバーガー内リンクを踏んだ場合
  $('#js-humberger-nav a').on('click', function () {
    $('#js-humberger').removeClass('nav-active');
    $('#js-humberger-nav').removeClass('nav-active');
    $('.js-humberger-body').removeClass('nav-active');
    $('.header-logo-link').toggleClass('nav-active');
  });
});