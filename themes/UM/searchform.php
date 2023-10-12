<form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
  <label class="header__search-label" for="s">Поиск: </label>
  <input class="header__search-input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
  <button type="submit" id="searchsubmit" class="header__search-button">
    <img alt="loop" src="https://arenda-tehnika.by/wp-content/themes/UM/assets/images/loop.svg">
  </button>
  <!-- <ul class="ajax-search"></ul> -->
</form>

<!-- <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
  <label class="screen-reader-text" for="s">Поиск: </label>
  <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
  <input type="submit" id="searchsubmit" value="найти" />
</form> -->