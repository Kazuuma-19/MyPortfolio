<?php 
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  function load_script() {
    if ( !is_admin()) {
      wp_enqueue_style(
        'reset-css',
        get_template_directory_uri() . '/dest/css/reset.css',
      );
      wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/dest/css/style.min.css',
      );
      wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        array(),
        false,
        true
      );
      wp_enqueue_script(
        'gsap.min',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"',
        array(),
        false,
        true
      );
      wp_enqueue_script(
        'ScrollTrigger.min',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js',
        array(),
        false,
        true
      );
      wp_enqueue_script(
        'slick.min',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('jquery'),
        false,
        true
      );
      wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/dest/js/bundle.min.js',
        array('jquery'),
        false,
        true
      );
    }
  }
  add_action('init', 'load_script');

  // 投稿並び順
  function change_old( $query ) {
    $query->set('order', 'ASC');
    $query->set('orderby', 'date' );
  }
  add_action( 'pre_get_posts', 'change_old' );
 ?>