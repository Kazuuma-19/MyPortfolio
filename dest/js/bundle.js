"use strict";

// humberger
jQuery(function ($) {
  $('#js-humberger').on('click', function () {
    $(this).toggleClass('nav-active');
    $('#js-humberger-nav').toggleClass('nav-active');
    $('.js-humberger-body').toggleClass('nav-active');
    $('.header-logo-link').toggleClass('nav-active');
  }); // ハンバーガー内リンクを踏んだ場合

  $('#js-humberger-nav a').on('click', function () {
    $('#js-humberger').removeClass('nav-active');
    $('#js-humberger-nav').removeClass('nav-active');
    $('.js-humberger-body').removeClass('nav-active');
    $('.header-logo-link').toggleClass('nav-active');
  });
});
"use strict";

// ローディング
jQuery(function ($) {
  var tl = gsap.timeline({}); //loadAnimation 全体

  var load = $("#js-load"); //loadAnimation 文字部分

  var loadContent = $("#js-load-content");

  var disableScroll = function disableScroll() {
    $('.js-humberger-body').addClass('nav-active');
  };

  var enableScroll = function enableScroll() {
    $('.js-humberger-body').removeClass('nav-active');
  };

  disableScroll(); //loadAnimation

  var loadTxtLength = $(loadContent).find('.load-character').length;

  for (var index = 0; index < loadTxtLength; index++) {
    var loadCharIdx = $('.load-character').eq(index);

    if (loadCharIdx.hasClass('_initial')) {
      tl.from(loadCharIdx, {
        opacity: 0,
        duration: .1,
        delay: .3
      });
    } else {
      tl.from(loadCharIdx, {
        opacity: 0,
        duration: .1
      });
    }
  }

  $(document).ready(function () {
    tl.to(loadContent, {
      opacity: 0,
      duration: 1
    });
    tl.to(load, {
      opacity: 0,
      duration: 1.5,
      onComplete: enableScroll
    });
  });
});
"use strict";

//carousel
jQuery(function ($) {
  $('.slider').slick({
    speed: 800,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    responsive: [{
      breakpoint: 1080,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '24px'
      }
    }, {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '16px'
      }
    }]
  });
});
"use strict";

// slidein
jQuery(function ($) {
  console.log("hello"); // cta

  var bottom_items = gsap.utils.toArray('.bottom-slidein');
  bottom_items.forEach(function (item) {
    var elContainer = item.querySelector('.container');
    gsap.from(elContainer, {
      scrollTrigger: item,
      opacity: 0,
      y: 100,
      duration: 1.3,
      delay: .3
    });
  }); // works

  var right_items = gsap.utils.toArray('.right-slidein');
  right_items.forEach(function (item) {
    var elContainer = item.querySelector('.container');
    gsap.from(elContainer, {
      scrollTrigger: item,
      opacity: 0,
      x: 300,
      duration: 1.3,
      delay: .3
    });
  }); // promise, profile-title

  var left_items = gsap.utils.toArray('.left-slidein');
  left_items.forEach(function (item) {
    var elContainer = item.querySelector('.c-title-content');
    gsap.from(elContainer, {
      scrollTrigger: item,
      opacity: 0,
      x: -300,
      duration: 1.3,
      delay: .3
    });
  }); // promsise

  var promise_contents = gsap.utils.toArray('.promise-content');
  promise_contents.forEach(function (item) {
    gsap.from(item, {
      scrollTrigger: {
        trigger: item,
        start: 'top bottom'
      },
      opacity: 0,
      y: 100,
      duration: 1.3,
      delay: .3
    });
  }); // profile

  gsap.from(".profile-content", {
    scrollTrigger: {
      trigger: ".profile-content",
      start: 'top bottom'
    },
    opacity: 0,
    y: 100,
    duration: 1.3,
    delay: .3,
    stagger: {
      from: "start",
      amount: .3
    }
  });
});
"use strict";

// smooth
jQuery(function ($) {
  var windowheight = $(window).height();
  var smooth = $('#js-smooth');
  var top = $("#js-top");
  $(window).scroll(function () {
    var scroll = $(this).scrollTop();

    if (scroll > windowheight) {
      $(smooth).addClass("smooth-active");
    } else {
      $(smooth).removeClass("smooth-active");
    }
  });
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