<form class="search" action="<?php echo home_url( '/' ); ?>">
  <input type="search" name="s" placeholder="Search&hellip;">
  <input type="submit" value="Search">
  <input type="hidden" name="post_type" value="kb_article">
</form>

<form role="search" method="get" id="searchform" class="search" action="<?php echo home_url( '/' ) ?>" >
  <label class="screen-reader-text" for="s">Поиск: </label>
  <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
  <input type="submit" id="searchsubmit" value="найти" />
</form>