// ローディング
jQuery(function ($) {
  let tl = gsap.timeline({});
  //loadAnimation 全体
  const load = $("#js-load");
  //loadAnimation 文字部分
  const loadContent = $("#js-load-content");
  const disableScroll = function () {
    $('.js-humberger-body').addClass('nav-active');
  };
  const enableScroll = function () {
    $('.js-humberger-body').removeClass('nav-active');
  };

  disableScroll();

  //loadAnimation
  let loadTxtLength = $(loadContent).find('.load-character').length;

  for (let index = 0; index < loadTxtLength; index++) {
    let loadCharIdx = $('.load-character').eq(index);

    if (loadCharIdx.hasClass('_initial')) {
      tl.from(loadCharIdx, { opacity: 0, duration: .1, delay: .3 });
    } else {
      tl.from(loadCharIdx, { opacity: 0, duration: .1 });
    }
  }

  $(document).ready(function () {
    tl.to(loadContent, { opacity: 0, duration: 1 });
    tl.to(load, { opacity: 0, duration: 1.5, onComplete: enableScroll });
  });
});


