<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sss
 * 
 * Template Name: News
 */

get_header() ?>


<div class="info-center">
    <div class="container">
      <div class="catalog__location"><a class="catalog__location-history" href="/">Главная</a> <img alt="loc-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <span class="catalog__location-current">Новости</span></div>
      <div class="info-center__news">
        <div class="info-center__top">
          <div class="info-center__title">Новости</div>
		</div>
        <a href="<?php the_permalink(); ?>">
            <div class="info-center__main">
            <?php		
                global $post;
                        // формируем запрос в базу данных
                $query = new WP_Query ( [
                        // получаем 10 постов
                    // 'posts_per_page' => 10,
                    'category_name' => 'no-category',
                ] );
                        // проверяем есть ли посты
                if ( $query->have_posts() ) {
                        // создаем переменную-счетчик постов
                    $cnt = 0;
                        // пока посты есть-выводим их
                    while ( $query->have_posts() ) {
                        $query->the_post();
                                // увеличиваем счетчик постов
                        $cnt++;
                        switch ($cnt) {
                                    // выводим первый пост
                            case '1':
                ?>
            
			    <img class="info-center__image" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); ?>">
                <div class="info-center__item-image mobile-box"><img class="news-article-image" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); ?>"></div>
                <div class="info-center__data">
                    <div class="info-center__data-top">
                        <div class="info-center__data-author">Александр Малашкевич</div>
                        <div class="info-center__data-date"><?php the_time('d.m.Y');?></div>
                    </div>
                    <div class="info-center__data-title"><a href="<?php the_permalink(); ?>"><?php echo mb_strimwidth (get_the_title(), 0, 55, '...') ?></a></div>
                    <div class="info-center__data-text"><?php the_field('post_description') ?></div>
			        <a href="<?php the_permalink(); ?>" class="info-center__data-link">
                        Читать дальше
                        <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 5L1 9" stroke="#202022"/></svg>
                        <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 5L1 9" stroke="#EAA515"/></svg>
                    </a>
		        </div>        
            </div>
        </a>              
        <div class="info-center__items">

                <?php 
                    break;
                    // выводим остальные посты 
                    default: 
                ?>

				<a href="<?php the_permalink() ?>" class="info-center__item">
					<div class="info-center__item-image" style="background: url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat center grey; background-size: cover;"></div>
					<div class="info-center__item-data">
					<div class="info-center__item-top">
						<div class="info-center__item-author">Александр Малашкевич</div>
						<div class="info-center__item-date">
						<?php the_time('d.m.Y'); ?>
						</div>
					</div>
					<div class="info-center__item-title">
						<?php echo get_the_title(); ?>
					</div>
					</div>
				</a>
                

                <?php
                    break;
                    }
                ?>
                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->

                <?php 
                    }
                } else {
                    // Постов не найдено
                }

                wp_reset_postdata(); 
                    // Сбрасываем $post
                ?>
            </div>
            <!-- /.all-wrapper -->
			</div>
        <!-- /.news -->
    </div>
    <!-- /.news-section -->

  </div>
  <!-- /.container -->
</div>
<!-- /.infocenter-page -->
<?php get_footer() ?>