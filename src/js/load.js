// ローディング
jQuery(function ($) {
  let tl = gsap.timeline({});
  const load = $("#js-load");
  const loadContent = $("#js-load-content");
  const disableScroll = function () {
    $('.js-humberger-body').addClass('nav-active');
  };
  const enableScroll = function () {
    $('.js-humberger-body').removeClass('nav-active');
  };

  disableScroll();

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


