<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sss
 * 
 * Template Name: Test
 */

get_header();

	$args = array(
		'theme_location' => 'um-header', // the one used on register_nav_menus
		/*'submenu' => 'About Us',*/ // could be used __() for translations
	);
?>

	

	<div class="container" style="padding-top:300px;">
		<?php wp_nav_menu( $args ); ?>
	</div>



<?php
get_sidebar();
get_footer();