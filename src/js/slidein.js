// slidein
jQuery(function ($) {
  console.log("hello");
  // cta
  const bottom_items = gsap.utils.toArray('.bottom-slidein');
  bottom_items.forEach((item) => {
    let elContainer = item.querySelector('.container');

    gsap.from(elContainer, {
      scrollTrigger: item,
      opacity: 0,
      y: 100,
      duration: 1.3,
      delay: .3
    })
  });

  // works
  const right_items = gsap.utils.toArray('.right-slidein');
  right_items.forEach((item) => {
    let elContainer = item.querySelector('.container');

    gsap.from(elContainer, {
      scrollTrigger: item,
      opacity: 0,
      x: 300,
      duration: 1.3,
      delay: .3
    })
  });

  // promise, profile-title
  const left_items = gsap.utils.toArray('.left-slidein');
  left_items.forEach((item) => {
    let elContainer = item.querySelector('.c-title-content');

    gsap.from(elContainer, {
      scrollTrigger: item,
      opacity: 0,
      x: -300,
      duration: 1.3,
      delay: .3
    })
  });

  // promsise
  const promise_contents = gsap.utils.toArray('.promise-content');
  promise_contents.forEach((item) => {
    gsap.from(item, {
      scrollTrigger: {
        trigger: item,
        start: 'top bottom',
      },
      opacity: 0,
      y: 100,
      duration: 1.3,
      delay: .3
    })
  });

  // profile
  gsap.from(".profile-content", {
    scrollTrigger: {
      trigger: ".profile-content",
      start: 'top bottom',
    },
    opacity: 0,
    y: 100,
    duration: 1.3,
    delay: .3,

    stagger: {
      from: "start",
      amount: .3
    },
  })
});