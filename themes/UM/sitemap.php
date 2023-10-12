<?php
/**
 * Template Name: SitemapPage
 */

get_header();
?>


<section class="map">
  <?php echo do_shortcode("[simple-sitemap types='page']"); ?>
  <?php echo do_shortcode('[simple-sitemap-group include_terms="seo, smm"]'); ?>
</section>

<?php get_footer(); ?>