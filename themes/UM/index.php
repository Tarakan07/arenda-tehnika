<?php get_header() ?>


<div class="infocenter-page">
  <div class="container">
      <div class="catalog__location">
          <a href="/" class="catalog__location-history">Главная</a>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-breadcrumb.svg" alt="arrow"></a>
          <span class="catalog__location-current">Инфоцентр</span>
      </div>

<!-- Блок Новости -->
    <div class="news-section">
        <div class="infocenter-title-wrapper">
            <h1 class="infocenter-title">Новости</h1>
            <a href="https://arenda-tehnika.by/novosti/" class="read-all">
                Посмотреть все
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/read-all.svg" alt="icon: arrow">
            </a>
        </div>
        
        <ul class="news">
            <?php		
            global $post;
                    // формируем запрос в базу данных
            $query = new WP_Query ( [
                    // получаем 10 постов
                'posts_per_page' => 10,
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
            <a href="<?php the_permalink(); ?>">
            <li class="last-block">
                <div class="last-left">
                <img class="news-article-image" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); ?>">
                </div>
                <!-- /.last-left -->
                <div class="last-right">
                    <div class="last-right-top">
                        <p class="news-article-author">Александр Малашкевич</p>
                        <span class="last-date"><?php the_time('d.m.Y');?></span>
                    </div>
                    <!-- /.last-right-top -->
                    <a href="<?php the_permalink(); ?>"><h4 class="news-article-title"><?php echo mb_strimwidth (get_the_title(), 0, 55, '...') ?></h4></a>
                    <?php the_field('post_description') ?>
                    <a href="<?php the_permalink(); ?>" class="read-more">
                        Читать дальше
                        <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 5L1 9" stroke="#202022"/></svg>
                        <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 5L1 9" stroke="#EAA515"/></svg>
                    </a>
                </div>
                <!-- /.last-right -->
            </li>
            <!-- /.last-block -->
            </a>
            <div class="all-wrapper">
                <?php 
                    break;
                    // выводим остальные посты 
                    default: 
                ?>

                <li class="all-block">
                    <a href="<?php the_permalink(); ?>">													
                        <img class="news-article-image" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); ?>">	
                        <div class="all-block-top">
                            <p class="news-article-author">Александр Малашкевич</p>
                            <span class="last-date"><?php the_time('d.m.Y');?></span>
                        </div>					
                        <h4 class="news-article-title news-article-title-height">
                            <?php the_title() ?>
                        </h4>														
                    </a>
                </li>
                <!-- /.all-block -->

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
        </ul>
        <!-- /.news -->
    </div>
    <!-- /.news-section -->

<!-- Блок Статьи -->

    <div class="articles-section">
        <div class="infocenter-title-wrapper">
            <h2 class="infocenter-title">Статьи</h2>
            <a href="#" class="read-all">
                Посмотреть все
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/read-all.svg" alt="icon: arrow">
            </a>
        </div>
        
        <ul class="articles">
        <?php		
            global $post;
                    // формируем запрос в базу данных
            $query = new WP_Query ( [
                    // получаем 10 постов
                'posts_per_page' => 10,
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
            <li class="last-block">
                <div class="last-left">
                <img class="news-article-image" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); ?>">
                </div>
                <!-- /.last-left -->
                <div class="last-right">
                    <div class="last-right-top">
                        <p class="news-article-author">Александр Малашкевич</p>
                        <span class="last-date"><?php the_time('d.m.Y');?></span>
                    </div>
                    <!-- /.last-right-top -->
                    <a href="<?php the_permalink(); ?>"><h4 class="news-article-title"><?php echo mb_strimwidth (get_the_title(), 0, 55, '...') ?></h4></a>
                    <?php the_field('post_description') ?>
                    <a href="<?php the_permalink(); ?>" class="read-more">
                        Читать дальше
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/read-all.svg" alt="icon: arrow">
                    </a>
                </div>
                <!-- /.last-right -->
            </li>
            <!-- /.last-block -->
            <div class="all-wrapper">
                <?php 
                    break;
                    // выводим остальные посты 
                    default: 
                ?>

                <li class="all-block">
                    <a href="<?php the_permalink(); ?>">													
                        <img class="news-article-image" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); ?>">	
                        <div class="all-block-top">
                            <p class="news-article-author">Александр Малашкевич</p>
                            <span class="last-date"><?php the_time('d.m.Y');?></span>
                        </div>					
                        <h4 class="news-article-title news-article-title-height">
                            <?php the_title() ?>
                        </h4>														
                    </a>
                </li>
                <!-- /.all-block -->

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
        </ul>
        <!-- /.articles -->
    </div>
    <!-- /.articles-section -->

  </div>
  <!-- /.container -->
</div>
<!-- /.infocenter-page -->
<?php get_footer() ?>