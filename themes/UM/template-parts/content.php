<?php
/**
 * Template part for displaying posts
 * Template name: Инфоцентр
 * Template Post Type: page
 */
get_header();
?>


		<section class="all-articles">
				<div class="container">
					<h1 class="all-articles-title">Инфоцентр</h1>
					
					<ul class="article-list">
						<?php		
								global $post;
										// формируем запрос в базу данных
								$query = new WP_Query ( [
									'category_name' => 'no-category',
								] );

										// проверяем есть ли посты
								if ( $query->have_posts() ) {
									
										// пока посты есть-выводим их
									while ( $query->have_posts() ) {
										$query->the_post();
											?>

								<!-- Вывод постов, функции цикла: the_title() и т.д. -->
						<li class="article-list-item">		
								<a href="<?php the_permalink(); ?>">
									<h3 class="article-title"><?php echo get_the_title() ?></h3>
								</a>
								<span class="last-date"><?php the_time('j M. Y');?></span>
								<p class="last-description"><?php echo mb_strimwidth (get_the_excerpt(), 0, 400, '...') ?></p>
								<a href="<?php the_permalink(); ?>" class="read-more">Читать далее</a>
						
						</li>
						<!-- /.article-list-item -->
												


					</ul>
					<!-- /.news -->
							<?php 
									}
								} else {
									// Постов не найдено
								}

								wp_reset_postdata(); 
									// Сбрасываем $post
								?>
				</div>
				<!-- /.container -->
		</section>


	</main><!-- #main -->
	<?php get_footer() ?>