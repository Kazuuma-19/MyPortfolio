<?php get_header(); ?>

<div class="main-visual">

  <div class="mv-content">
    <p class="mv-copy">
      INSATIABLE SPIRIT
      <br class="md-break">OF<br class="md-break">
      INQUIRY
    </p>

    <p class="mv-subcopy">飽くなき探求心</p>
  </div>

  <p class="scroll">scroll</p>
</div>

<main class="main">
  <a href="" class="smooth" id="js-smooth">
    <span class="smooth-icon"></span>
    <p class="smooth-text">BACK TO TOP</p>
  </a>

  <section class="promise section c-bgwhite left-slidein" id="promise-link">
    <span class="c-triangle c-triangle--top"></span>

    <div class="container promise-container">
      <div class="c-title-content">
        <h2 class="promise-title c-section-title c-section-title--bgwhite">PROMISE</h2>
        <p
          class="promise-subtitle c-section-subtitle c-section-subtitle--bgwhite c-horizontal-bar c-horizontal-bar--bgwhite">
          約束
        </p>
      </div>

      <div class="promise-wrapper">
        <div class="promise-content c-frame promise-content-first">
          <div class="promise-detail">
            <div class="promise-content-title">
              <img src="<?php echo get_template_directory_uri(); ?>/dest/img/icons-mail.png.webp" alt="メールアイコン"
                width="50" height="50" class="promise-content-icon">
              <h3 class="promise-content-text">
                丁寧な対応
              </h3>
            </div>

            <p class="promise-content-explain">
              迅速な対応だけでなく、返信に対するストレスを下げることをお約束します。<br>
              お客様のご要望に即時に対応できることに加え、返信に対するストレスを少なくすることが、良好な関係を築く上で重要であると考えています。
            </p>
          </div>
        </div>

        <div class="promise-content c-frame promise-content-second">
          <div class="promise-detail">
            <div class="promise-content-title">
              <img src="<?php echo get_template_directory_uri(); ?>/dest/img/icons-search.png.webp" alt="メガネアイコン"
                width="50" height="50" class="promise-content-icon">
              <h3 class="promise-content-text">
                探求心
              </h3>
            </div>

            <p class="promise-content-explain">
              常に新しいことへの挑戦を続け、探求を止めないことをお約束します。<br>
              移り変わりの早いWeb業界において、自分自身をアップデートし続けることは、お客様のご要望に合ったサイトを作る上で重要であると考えています。
            </p>
          </div>
        </div>

        <div class="promise-content c-frame promise-content-third">
          <div class="promise-detail">
            <div class="promise-content-title">
              <img src="<?php echo get_template_directory_uri(); ?>/dest/img/icons-code.png.webp" alt="デバイスアイコン"
                width="50" height="50" class="promise-content-icon">
              <h3 class="promise-content-text">
                設計にも注意
              </h3>
            </div>

            <p class="promise-content-explain">
              レスポンシブ対応、CSS設計などにも注意を払いコードを書くことをお約束します。<br>
              誰が、どの状態でサイト・コードを見ても理解できるようにすることが、サイトを見る方・修正する方にとって重要であると考えています。
            </p>
          </div>
        </div>
      </div>
    </div>

    <span class="c-triangle c-triangle--bottom"></span>
  </section>

  <div class="cta bottom-slidein">
    <div class="cta-container container">
      <div class="cta-content">
        <h2 class="cta-title">CONTACT</h2>
        <p class="cta-text">
          お問い合わせはこちらから
        </p>
      </div>

      <a href="/contact/" class="cta-button c-button">相談してみる</a>
    </div>
  </div>

  <section class="works section c-bgblack right-slidein" id="works-link">
    <span class="c-triangle c-triangle--top"></span>

    <div class="works-container container">
      <div class="c-title-wrapper">
        <div class="c-title-content c-title-content--bgblack">
          <h2 class="works-title c-section-title c-section-title--bgblack">WORKS</h2>
          <p
            class="works-subtitle c-section-subtitle c-section-subtitle--bgblack c-horizontal-bar c-horizontal-bar--bgblack">
            制作物
          </p>
        </div>
      </div>

      <div class="works-wrapper slider">
        <?php
          if(have_posts()) :
          while(have_posts()) :
          the_post();
        ?>

        <div class="works-content">
          <?php if(get_the_title() == 'Coming Soon'): ?>
          <a>
            <?php else: // coming soonでなければ ?>
            <a href="<?php echo post_custom('リンク'); ?>">
              <?php endif; ?>
              <?php the_post_thumbnail(null, array('class' => 'works-content-img')); ?>
            </a>

            <p class="works-content-text c-vertical-bar">タイトル：<?php the_title(); ?></p>
            <p class="works-content-text c-vertical-bar">制作期間：<?php echo post_custom('制作期間'); ?></p>
            <p class="works-content-text c-vertical-bar">使用スキル：<?php echo post_custom('使用スキル'); ?></p>
            <p class="works-content-text c-vertical-bar">一言：<?php echo nl2br(post_custom('一言')); ?></p>
        </div>

        <?php
         endwhile;
         else:
        ?>

        <p>お探しの記事はありませんでした。</p>

        <?php endif; ?>
      </div>
    </div>

    <span class="c-triangle c-triangle--bottom"></span>
  </section>

  <section class="profile section c-bgwhite left-slidein" id="profile-link">
    <span class="c-triangle c-triangle--top"></span>

    <div class="profile-container container">
      <div class="c-title-content">
        <h2 class="profile-title c-section-title c-section-title--bgwhite">PROFILE</h2>
        <p
          class="profile-subtitle c-section-subtitle c-section-subtitle--bgwhite c-horizontal-bar c-horizontal-bar--bgwhite">
          自己紹介</p>
      </div>
      <div class="profile-wrapper">
        <div class="profile-content c-frame">
          <h3 class="profile-content-title">About</h3>

          <div class="profile-about">
            <img src="<?php echo get_template_directory_uri(); ?>/dest/img/profile.jpg.webp" alt="twitterプロフィール画像"
              class="profile-about-image" width="95" height="95">

            <div class="profile-name">
              <p class="profile-name-jp">
                齋藤知真

                <a href="https://twitter.com/kazu__tech" class="profile-twitter">

                  <svg class="profile-twitter-icon" height="35" viewBox="0 0 512 512" width="35"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="m256 0c-141.385 0-256 114.615-256 256s114.615 256 256 256 256-114.615 256-256-114.615-256-256-256zm4.926 217.391c.084.004.164.021.25.025-.875-3.752-1.328-7.664-1.328-11.682 0-28.307 22.951-51.258 51.262-51.258 14.742 0 28.063 6.225 37.414 16.188 9.6-1.89 18.684-5.174 27.129-9.523 1.781-.864 3.566-1.723 5.32-2.674-3.039 9.334-8.744 17.412-16.141 23.532-2.004 1.576-4.062 3.098-6.326 4.344.154-.018.304-.052.457-.071-.15.093-.275.22-.428.312 8.402-1.005 16.459-3.051 24.111-5.942 1.715-.592 3.428-1.191 5.127-1.852-6.842 10.159-15.453 19.095-25.375 26.259.098 2.197.148 4.406.148 6.631 0 67.736-51.558 145.842-145.844 145.842-28.947 0-55.891-8.484-78.576-23.028 4.01.473 8.092.715 12.229.715 19.136 0 37.014-5.269 52.383-14.34 3.871-2.23 7.658-4.639 11.273-7.365-.098-.002-.187-.026-.285-.028.094-.073.196-.136.289-.209-19.422-.358-36.184-11.539-44.574-27.747-1.25-2.489-2.32-5.096-3.164-7.831 3.086.58 6.246.898 9.5.898 3.391 0 6.666-.436 9.871-1.063 1.197-.168 2.406-.308 3.586-.502-.156-.032-.293-.1-.449-.133.162-.042.336-.056.496-.1-23.449-4.709-41.119-25.428-41.119-50.262 0-.196.002-.387.004-.58l.024-.055c5.521 3.064 11.693 5.092 18.23 5.94 1.609.269 3.221.516 4.832.657-.11-.074-.205-.164-.314-.238.152.006.297.036.447.041-13.754-9.191-22.803-24.883-22.803-42.666 0-8.142 1.988-15.787 5.367-22.623.539-1.028 1.018-2.078 1.637-3.074 22.711 27.822 55.516 46.971 92.801 52.15 4.16.605 8.332 1.144 12.553 1.388-.006-.024-.008-.051-.014-.076z"
                      fill="#000000" fill-opacity="0.9" />
                  </svg>
                </a>
              </p>

              <p class="profile-name-en">KAZUMA SAITO</p>
            </div>
          </div>

          <p class="profile-detail c-vertical-bar">
            出身：東京都
          </p>
          <p class="profile-detail c-vertical-bar">
            趣味：ランニング、Macbook効率化
          </p>
          <p class="profile-detail">
            ポートフォリオをご覧いただきありがとうございます。<br>
            タイトルにもある通り、「新しいことへの探求」を信念に活動しています。<br>
            何かございましたら、ご遠慮無くお問い合わせください。
          </p>
        </div>

        <div class="profile-content c-frame">
          <h3 class="profile-content-title">Skill</h3>

          <div class="profile-skill">
            <div class="profile-skill-language">
              <img src="<?php echo get_template_directory_uri(); ?>/dest/img/icons-html.svg" alt="HTMLアイコン"
                class="profile-skill-icon" width="100" height="100">
              <p class="profile-skill-explain">HTML</p>
            </div>

            <div class="profile-skill-language">
              <img src="<?php echo get_template_directory_uri(); ?>/dest/img/icons-css.svg" alt="CSSアイコン"
                class="profile-skill-icon" width="100" height="100">
              <p class="profile-skill-explain">CSS</p>
            </div>

            <div class="profile-skill-language">
              <img src="<?php echo get_template_directory_uri(); ?>/dest/img/icons-sass.svg" alt="SASSアイコン"
                class="profile-skill-icon" width="100" height="100">
              <p class="profile-skill-explain">SASS</p>
            </div>

            <div class="profile-skill-language">
              <img src="<?php echo get_template_directory_uri(); ?>/dest/img/icons-jquery.svg" alt="jQueryアイコン"
                class="profile-skill-icon" width="100" height="100">
              <p class="profile-skill-explain">jQuery</p>
            </div>

            <div class="profile-skill-language">
              <img src="<?php echo get_template_directory_uri(); ?>/dest/img/icons-wordpress.svg" alt="WordPressアイコン"
                class="profile-skill-icon" width="100" height="100">
              <p class="profile-skill-explain">WordPress</p>
            </div>

            <div class="profile-skill-language">
              <img src="<?php echo get_template_directory_uri(); ?>/dest/img/icons-xd.svg" alt="XDアイコン"
                class="profile-skill-icon" width="100" height="100">
              <p class="profile-skill-explain">Adobe XD</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <span class="c-triangle c-triangle--bottom"></span>
  </section>

  <div class="cta bottom-slidein">
    <div class="cta-container container">
      <div class="cta-content">
        <h2 class="cta-title">CONTACT</h2>
        <p class="cta-text">
          お問い合わせはこちらから
        </p>
      </div>

      <a href="/contact/" class="cta-button c-button">相談してみる</a>
    </div>
  </div>
</main>
<?php get_footer(); ?>