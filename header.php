<!DOCTYPE html>
<html lang="ja" class='js-humberger-body'>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kazuma's Portfolio</title>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MG9P26Z');
    </script>
    <!-- End Google Tag Manager -->

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/src/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Noto+Serif+JP&family=Noto+Serif:ital@1&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <?php wp_head(); ?>
  </head>

  <body class='js-humberger-body'>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MG9P26Z" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php if (is_front_page()) : ?>
    <!-- <div class="load" id="js-load">
      <div class="load-content" id="js-load-content">
        <span class="load-character">I</span><span class="load-character">N</span><span
          class="load-character">S</span><span class="load-character">A</span><span class="load-character">T</span><span
          class="load-character">I</span><span class="load-character">A</span><span class="load-character">B</span><span
          class="load-character">L</span><span class="load-character">E&ensp;</span><span
          class="load-character _initial">S</span><span class="load-character">P</span><span
          class="load-character">I</span><span class="load-character">R</span><span class="load-character">I</span><span
          class="load-character">T&ensp;</span><br class="md-break"><span class="load-character _initial">O</span><span
          class="load-character">F&ensp;</span><br class="md-break"><span class="load-character _initial">I</span><span
          class="load-character">N</span><span class="load-character">Q</span><span class="load-character">U</span><span
          class="load-character">I</span><span class="load-character">R</span><span class="load-character">Y</span>
      </div>
    </div> -->
    <?php endif; ?>

    <header <?php if(is_page('contact')) : ?> class="header header-contact" <?php else: ?> class="header"
      <?php endif; ?>>
      <h1 class="header-logo">
        <a href="<?php echo home_url(); ?>" class="header-logo-link">Kazuma's Portfolio</a>
      </h1>

      <nav class="header-nav" id="js-humberger-nav">
        <ul class="header-list">
          <li class="header-item">
            <a href="/#promise-link" class="header-item-link">
              <span class="header-item-sublink">PROMISE</span>
              <span class="header-item-sublink">約束</span>
            </a>
          </li>

          <li class="header-item">
            <a href="/#works-link" class="header-item-link">
              <span class="header-item-sublink">WORKS</span>
              <span class="header-item-sublink">制作物</span>
            </a>
          </li>

          <li class="header-item">
            <a href="/#profile-link" class="header-item-link">
              <span class="header-item-sublink">PROFILE</span>
              <span class="header-item-sublink">自己紹介</span>
            </a>
          </li>

          <li class="header-item">
            <a href="/contact/" class="header-item-link header-item-link--stress">
              <span class="header-item-sublink">CONTACT</span>
              <span class="header-item-sublink">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="humberger humberger-wrapper" id="js-humberger">
        <span class="humberger humberger-bar"></span>
        <span class="humberger humberger-bar"></span>
        <span class="humberger humberger-bar"></span>
      </div>
    </header>