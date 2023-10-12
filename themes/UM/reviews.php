<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sss
 * 
 * Template Name: Reviews
 */

get_header();
?>

<main><div class="reviews-page"><div class="container"><div class="catalog__location"><a class="catalog__location-history" href="/">Главная</a> <img alt="loc-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <span class="catalog__location-current">Отзывы</span></div><div class="reviews__top"><div class="reviews__title">Отзывы</div></div><div class="reviews__list"><?php echo do_shortcode(um_reviews_page_func(8)); ?></div><div class="reviews__button">Показать больше</div></div></div></main>

<?php
get_sidebar();
get_footer();