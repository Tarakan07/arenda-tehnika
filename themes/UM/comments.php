<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) {
		?>
		
		<div class="article__comments-title">Комментарии: <?php echo get_comments_number(); ?></div>

		<?php the_comments_navigation(); ?>
		
		<?php if ( !is_user_logged_in() ) { ?>
			<div class="article__comments-auth"><a href="/">Авторизируйтесь,</a> чтобы оставить комментарий.</div>
		<?php } else {
			comment_form();
		} ?>
		<ul class="comment-list comments">
			<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
					
			) );
			 ?>
		</ul><!-- .comment-list -->
		</div>
		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'kk' ); ?></p>
			<?php
		endif;

	
	} else {
	?>
	<?php if ( !is_user_logged_in() ) { ?>
		<div class="article__comments-auth"><a href="/">Авторизируйтесь,</a> чтобы оставить комментарий.</div>
	<?php } else {
		?>
		<div class="article__comments-title">Комментарии<?php if ( have_comments() ) { echo ': '.get_comments_number(); } ?></div>
		<?php
		comment_form();
	} ?>
	<?php } ?>

</div><!-- #comments -->
