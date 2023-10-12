<div class="container">
  <div class="posts__top">
    <div class="posts__title">Интересное</div>
    <a class="posts__link" href="#">Посмотреть все
      <img alt="link-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-2.svg">
    </a>
  </div>
  <div id="posts-slider" class="posts__items owl-carousel owl-theme"><?php echo do_shortcode( '[um-posts]' ); ?></div>
  <div class="posts__bar">
    <div class="posts__scroller"></div>
  </div>
</div>