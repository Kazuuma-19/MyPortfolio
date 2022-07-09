<?php get_header(); ?>

<section class="contact c-bgblack" id="contact-link">
  <div class="container contact-container">
    <div class="c-title-wrapper">
      <div class="c-title-content c-title-content--bgblack">
        <h2 class="contact-title c-section-title c-section-title--bgblack">CONTACT</h2>
        <p
          class="contact-subtitle c-section-subtitle c-section-subtitle--bgblack c-horizontal-bar c-horizontal-bar--bgblack">
          お問い合わせ</p>
      </div>
    </div>

    <?php echo do_shortcode('[contact-form-7 id="40" title="portfolio"]'); ?>
  </div>
</section>

<?php wp_footer(); ?>