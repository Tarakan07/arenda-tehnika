<div class="container">
  <div class="reviews__top">
    <div class="reviews__title">Отзывы</div>
    <a class="posts__link" href="/reviews/">Посмотреть все
      <img alt="link-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-2.svg">
    </a>
  </div>
  <div id="reviews-slider" class="reviews__items owl-carousel owl-theme"><?php echo do_shortcode( '[um-reviews]' ); ?>
  </div>
  <div class="reviews__bar">
    <div class="reviews__scroller"></div>
  </div>
</div>