<?php

/* константы путей к основным директориям */

define('UM_PATH_CSS', get_template_directory_uri() . '/assets/css/');
define('UM_PATH_JS', get_template_directory_uri() . '/assets/js/');
define('UM_PATH_IMG', get_template_directory_uri() . '/assets/images/');
define('UM_PATH_FONTS', get_template_directory_uri() . '/assets/fonts/');

/* подколючение скриптов и стилей */

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style('um-index-styles', UM_PATH_CSS . 'index.css');
	wp_enqueue_style('um-owl-styles', UM_PATH_CSS . 'owl.carousel.min.css');
	wp_enqueue_style('um-owl-default-styles', UM_PATH_CSS . 'owl.theme.default.min.css');
	wp_enqueue_script('um-jquery-js', UM_PATH_JS . 'jquery.min.js');
	wp_enqueue_script('um-owl-js', UM_PATH_JS . 'owl.carousel.min.js', ['um-jquery-js']);
	wp_enqueue_script('um-main-js', UM_PATH_JS . 'main.min.js', ['um-jquery-js', 'um-owl-js'], '1.0', true);
	if( is_home() ){
		wp_enqueue_style('um-infocenter-styles', UM_PATH_CSS . 'infocenter.css');
	 }
	if( is_page( '1946' ) ){
		wp_enqueue_style('um-about-styles', UM_PATH_CSS . 'about.css');
	}
});


function not_found_page_style () {
	if( is_404() ){
		wp_enqueue_style( '404-page', get_template_directory_uri() . '/assets/css/404.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'not_found_page_style' ); 


/**Подключение стилей на страницу Карта сайта */
function sitemap_page_style () {
	if( is_page('2265') ){
		wp_enqueue_style( 'sitemap-style', get_template_directory_uri() . '/assets/css/sitemap-style.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'sitemap_page_style' );


/* регистрация зон меню и виджетов, добавление изображений постов */

add_action('after_setup_theme', function() {
	add_theme_support('post-thumbnails');
    add_theme_support( 'woocommerce' );
	register_nav_menu('um-header', 'Меню в шапке');
	register_nav_menu('um-footer', 'Меню в подвале');
});

/* вывод постов через шорткод */
 
add_shortcode( 'um-posts', 'um_posts_func' );

function um_posts_func( $args ) {
	ob_start();

	$posts = get_posts( array(
		'post_type'   => 'post',
		'posts_per_page' => '3',
	) );
	global $post;
	?>

	<?php
		foreach( $posts as $post ){		
			setup_postdata($post);	
			$category = get_the_category(); 
	?>
	<a href="<?php the_permalink() ?>" class="posts__item">
		<div class="post-img" style="background: url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat center grey; background-size: cover;">
		</div>
		<div class="posts__item-top">
			<div class="posts__date"><?php the_time('d.m.Y'); ?></div>
			<div class="posts__author"><?php the_author(); ?></div>
		</div>
		<div class="posts__item-title">
			<?php echo get_the_title(); ?>
		</div>
	</a>
	<?php
		}
	?>

	<?php

	wp_reset_postdata();
	wp_reset_query();

	$output_string = ob_get_contents(); 
	ob_end_clean(); 
	return $output_string;
}

/* добавление отзывов как кастомного типа */

add_action('init', function() {
	$labels = array(
    'name' => _x('Отзывы', 'post type general name'),
    'singular_name' => _x('Отзыв', 'post type singular name'),
    'menu_name' => __('Отзывы'),
	'add_new' => _x('Добавить новый', 'review'),
    'edit_item' => __('Редактировать отзыв'),
    'add_new_item' => __('Добавить новый отзыв'),

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array(
		'with_front' => 'false'
	),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('editor', 'title')
  ); 
  register_post_type('review',$args);
});

/* вывод отзывов через шорткод */

add_shortcode( 'um-reviews', 'um_reviews_func' );

function um_reviews_func( $args ) {
	ob_start();

	$posts = get_posts( array(
		'numberposts' => $args['post_num'],
		'post_type'   => 'review',
	) );
	global $post;
	?>

	<?php
		foreach( $posts as $post ){		
			setup_postdata($post);	
			$category = get_the_category(); 
	?>

	<div class="reviews__item">
		<div class="revies__item-top">
			<div class="reviews__image">
				<?php 
					$image = get_field('author_photo');
				?>
				<img src="<?php echo $image['url'] ?>">
			</div>
			<div class="reviews__block">
				<div class="reviews__name">
					<?php echo get_field( 'author' ); ?>
				</div>
				<div class="reviews__position">
					<?php echo get_field( "about_author" ); ?>
				</div>
			</div>
			<div class="reviews__date">
				<?php the_date('d.m.Y'); ?>
			</div>
		</div>
		<div class="reviews__text">
			<?php the_content(); ?>
		</div>
	</div>

	<?php
		}
	?>

	<?php

	wp_reset_postdata();
	wp_reset_query();

	$output_string = ob_get_contents(); 
	ob_end_clean(); 
	return $output_string;
}

/* вывод отзывов на странице отзывов шорткод */

add_shortcode( 'um-reviews', 'um_reviews_page_func' );

function um_reviews_page_func( $args ) {
	ob_start();

	$posts = get_posts( array(
		// 'numberposts' => $args['post_num'],
		'numberposts' => 10,
		'post_type'   => 'review',
	) );
	global $post;
	?>

	<?php
		foreach( $posts as $post ){		
			setup_postdata($post);	
			$category = get_the_category();
	?>

	<div class="reviews__item">
		<div class="revies__item-top">
			<div class="reviews__image">
				<?php 
					$image = get_field('author_photo');
				?>
				<img alt="reviews-img" src="<?php echo $image['url'] ?>">
			</div>
			<div class="reviews__block">
				<div class="reviews__name"><?php echo get_field( 'author' ); ?></div>
				<div class="reviews__position"><?php echo get_field( "about_author" ); ?></div>
			</div>
			<div class="reviews__date"><?php the_date('d.m.Y'); ?></div>
		</div>
		<div class="reviews__text">
			<?php the_content(); ?>
		</div>
	</div>

	<?php
		}
	?>

	<?php

	wp_reset_postdata();
	wp_reset_query();

	$output_string = ob_get_contents(); 
	ob_end_clean(); 
	return $output_string;
}

/* добавление товаров как кастомного типа */

add_action('init', function() {
	$labels = array(
    'name' => _x('Товары', 'post type general name'),
    'singular_name' => _x('Товар', 'post type singular name'),
    'menu_name' => __('Товары'),
	'add_new' => _x('Добавить новый', 'review'),
    'edit_item' => __('Редактировать товар'),
    'add_new_item' => __('Добавить новый товар'),

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('editor', 'title', 'thumbnail'),
	'taxonomies'  => array ( 'category' ),
	  
	
    'rewrite'   => array( 'slug' => false, 'with_front' => false ),
  ); 
  register_post_type('product',$args);
});

/* добавление услуг как кастомного типа */

add_action('init', function() {
	$labels = array(
    'name' => _x('Услуги', 'post type general name'),
    'singular_name' => _x('Услуга', 'post type singular name'),
    'menu_name' => __('Услуги'),
	'add_new' => _x('Добавить новую', 'review'),
    'edit_item' => __('Редактировать услугу'),
    'add_new_item' => __('Добавить новую услугу'),

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    /*'rewrite' => array(
		'with_front' => false,
		'slug' => '/', 
	),*/
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('editor', 'title', 'thumbnail'),
	//'taxonomies'  => array ( 'category' ),
  ); 
  register_post_type('service',$args);
});

/* вывод товаров через шорткод */

add_shortcode( 'um-products', 'um_products_func' );

function um_products_func( $args ) {
	
	if( isset( $_REQUEST[ 'page_number' ] ) ){
		$current_page = $_REQUEST[ 'page_number' ];
	}
	else{
		$current_page = 1;
	}

	$category = get_queried_object();
	$currCategoryID = $category -> term_id;

	$pargs = array(
		'posts_per_page' => '15',
		'post_type' => 'product',
		'cat' => $currCategoryID,
		'paged' => $current_page,
		'meta_key' => $_GET['orderby'],
		'orderby' => 'meta_value_num',
		'order' => $_GET['order'],
		's' => $_GET['search-query']
	);

    $posts = new WP_Query($pargs);
	
	?>

	<div id="catalog-block" class="catalog__items-wrap">
	<div class="catalog__items news">

	<?php

	while ( $posts->have_posts() ) : $posts->the_post();
	?>

	<div class="catalog__card">
		<a href="<?php echo get_permalink(); ?>" class="catalog__card-image" style="display:block;background: url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat center grey; background-size: cover;">
		</a>
		<div class="catalog__card-info">
			<div class="catalog__card-title">
				<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			</div>
			<div class="catalog__card-options">
				<?php
					$post_meta = get_post_meta(get_the_ID());
					foreach($post_meta as $key=>$value)
					{
						if (get_field_object($key)['value'] && $key !== 'price' && strpos($key, 'characteristics') === false) {
						?>
							<div class="catalog__card-option">
								<div class="catalog__card-key">
									<?php echo get_field_object($key)['label'] ?>
								</div>
								<div class="catalog__card-value">
									<?php echo get_field_object($key)['value'] ?>
								</div>
							</div>
						<?php
						}
					}
				?>
			</div>
		</div>
		<div class="card__bottom">
			<div class="catalog__card-price">
				<?php the_field('price'); ?> бел.руб. без НДС
			</div>
			<a href="<?php echo get_permalink(); ?>" class="catalog__card-button">
				Заказать
			</a>
		</div>
	</div>

	<?php
	
    endwhile;
	?>

	</div>

	<?php
		$paginationArgs = array(
			'total' => $posts->max_num_pages,
			'current' => $current_page,
			'format' => '?page_number=%#%',
			'mid_size' => 10,
			'end_size' => 1,
			'type' => 'array',
			'prev_text'    => __('Назад'),
			'next_text'    => __('Далее'),
		);

		global $wp_query;
		$wp_query->max_num_pages = $posts->max_num_pages;
	
		$paginate_links = paginate_links( $paginationArgs );
	
		$c = $paginationArgs['current'];
		$allowed = [
			'current',
			'prev',
			'next',
			sprintf( '?page_number=%d"', $c-4 ),
			sprintf( '?page_number=%d"', $c-3 ),
			sprintf( '?page_number=%d"', $c-2 ),
			sprintf( '?page_number=%d"', $c-1 ),
			sprintf( '?page_number=%d"', $c+1 ),
			sprintf( '?page_number=%d"', $c+2 ),
			sprintf( '?page_number=%d"', $c+3 ),
			sprintf( '?page_number=%d&', $c-4 ),
			sprintf( '?page_number=%d&', $c-3 ),
			sprintf( '?page_number=%d&', $c-2 ),
			sprintf( '?page_number=%d&', $c-1 ),
			sprintf( '?page_number=%d&', $c+1 ),
			sprintf( '?page_number=%d&', $c+2 ),
			sprintf( '?page_number=%d&', $c+3 ),
		];
	
		$n = $posts->max_num_pages;
	
		$paginate_links = array_filter(
			$paginate_links,
			function( $value ) use ( $allowed, $c, $n ) {
				if ($c < 5) {
					for ($i = 1; $i <= 5 - $c; $i++) {
						array_push($allowed, sprintf( '?page_number=%d"', $c+3+$i ));
						array_push($allowed, sprintf( '?page_number=%d&', $c+3+$i ));
					}
				}
				
				if ($c > $n - 3) {
					for ($i = 1; $i <= $c - ($n - 3); $i++) {
						array_push($allowed, sprintf( '?page_number=%d"', $c-4-$i ));
						array_push($allowed, sprintf( '?page_number=%d&', $c-4-$i ));
					}
				}
				
				foreach( (array) $allowed as $tag )
				{
					if( false !== strpos( $value, $tag ) || ($c <= 5 && false == strpos( $value, '?page_number' )))
						return true;
				}
				return false;
			}
		);
	
	
		if( ! empty( $paginate_links ) )
		printf(
			"<nav class='navigation pagination' role='navigation' aria-label='Записи'><div class='nav-links'>%s</div></nav>",
			join( "", $paginate_links )
		);
	?>
		
	</div>

	<?php
    rewind_posts();
    wp_reset_postdata();
}

/* вывод карточек по поиску */

add_shortcode( 'um-products-search', 'um_products_search_func' );
function um_products_search_func( $args ) {

	if( isset( $_REQUEST[ 'page_number' ] ) ){
		$current_page = $_REQUEST[ 'page_number' ];
	}
	else{
		$current_page = 1;
	}

	$category = get_queried_object();
	$currCategoryID = $category -> term_id;

	$args = array(
		'taxonomy'      => array( 'post_tag', 'my_tax' ), // название таксономии с WP 4.5
		'orderby'       => 'meta_value_num',
		'order'         => $_GET['order'],
		'cat' => $currCategoryID,
		'paged' => $current_page,
		'meta_key' => $_GET['orderby'],
		's' => $_GET['search-query']
	);
	
	$term_query = new WP_Term_Query( $args );
	?>
	
	<div id="catalog-block" class="catalog__items-wrap">
	<div class="catalog__items news">

	<?php

	foreach( $term_query->terms as $term ){
	?>

	<div class="catalog__card">
		<a href="<?php echo get_permalink(); ?>" class="catalog__card-image" style="display:block;background: url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat center grey; background-size: cover;">
		</a>
		<div class="catalog__card-info">
			<div class="catalog__card-title">
				<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			</div>
			<div class="catalog__card-options">
				<?php
					$post_meta = get_post_meta(get_the_ID());
					foreach($post_meta as $key=>$value)
					{
						if (get_field_object($key)['value'] && $key !== 'price' && strpos($key, 'characteristics') === false) {
						?>
							<div class="catalog__card-option">
								<div class="catalog__card-key">
									<?php echo get_field_object($key)['label'] ?>
								</div>
								<div class="catalog__card-value">
									<?php echo get_field_object($key)['value'] ?>
								</div>
							</div>
						<?php
						}
					}
				?>
			</div>
		</div>
		<div class="card__bottom">
			<div class="catalog__card-price">
				<?php the_field('price'); ?> бел.руб. без НДС
			</div>
			<a href="<?php echo get_permalink(); ?>" class="catalog__card-button">
				Заказать
			</a>
		</div>
	</div>

	<?php
	
	};
	?>

	</div>

	<?php
		$paginationArgs = array(
			'total' => $posts->max_num_pages,
			'current' => $current_page,
			'format' => '?page_number=%#%',
			'mid_size' => 10,
			'end_size' => 1,
			'type' => 'array',
			'prev_text'    => __('Назад'),
			'next_text'    => __('Далее'),
		);

		global $wp_query;
		$wp_query->max_num_pages = $posts->max_num_pages;
	
		$paginate_links = paginate_links( $paginationArgs );
	
		$c = $paginationArgs['current'];
		$allowed = [
			'current',
			'prev',
			'next',
			sprintf( '?page_number=%d"', $c-4 ),
			sprintf( '?page_number=%d"', $c-3 ),
			sprintf( '?page_number=%d"', $c-2 ),
			sprintf( '?page_number=%d"', $c-1 ),
			sprintf( '?page_number=%d"', $c+1 ),
			sprintf( '?page_number=%d"', $c+2 ),
			sprintf( '?page_number=%d"', $c+3 ),
			sprintf( '?page_number=%d&', $c-4 ),
			sprintf( '?page_number=%d&', $c-3 ),
			sprintf( '?page_number=%d&', $c-2 ),
			sprintf( '?page_number=%d&', $c-1 ),
			sprintf( '?page_number=%d&', $c+1 ),
			sprintf( '?page_number=%d&', $c+2 ),
			sprintf( '?page_number=%d&', $c+3 ),
		];
	
		$n = $posts->max_num_pages;
	
		$paginate_links = array_filter(
			$paginate_links,
			function( $value ) use ( $allowed, $c, $n ) {
				if ($c < 5) {
					for ($i = 1; $i <= 5 - $c; $i++) {
						array_push($allowed, sprintf( '?page_number=%d"', $c+3+$i ));
						array_push($allowed, sprintf( '?page_number=%d&', $c+3+$i ));
					}
				}
				
				if ($c > $n - 3) {
					for ($i = 1; $i <= $c - ($n - 3); $i++) {
						array_push($allowed, sprintf( '?page_number=%d"', $c-4-$i ));
						array_push($allowed, sprintf( '?page_number=%d&', $c-4-$i ));
					}
				}
				
				foreach( (array) $allowed as $tag )
				{
					if( false !== strpos( $value, $tag ) || ($c <= 5 && false == strpos( $value, '?page_number' )))
						return true;
				}
				return false;
			}
		);
	
	
		if( ! empty( $paginate_links ) )
		printf(
			"<nav class='navigation pagination' role='navigation' aria-label='Записи'><div class='nav-links'>%s</div></nav>",
			join( "", $paginate_links )
		);
	?>
		
	</div>

	<?php
    rewind_posts();
    wp_reset_postdata();
}

/* вывод услуг через шорткод */

add_shortcode( 'um-services', 'um_services_func' );

function um_services_func( $args ) {
	
	if( isset( $_REQUEST[ 'page_number' ] ) ){
		$current_page = $_REQUEST[ 'page_number' ];
	}
	else{
		$current_page = 1;
	}
	
	if ( 'cat' === $_GET['getby'] ) {
		if( isset($_GET['orderby']) && isset($_GET['order'])) {
			$pargs = array(
				'posts_per_page' => '21',
				'post_type' => 'product',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'slug',
						'terms' => $_GET['cat']
					)
				),
				'paged' => $current_page,
				'meta_key' => $_GET['orderby'],
				'orderby' => 'meta_value_num',
				'order' => $_GET['order'],
				's' => $_GET['search-query']
			);
		} else {
			$pargs = array(
				'posts_per_page' => '21',
				'post_type' => 'service',
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'slug',
						'terms' => $_GET['cat']
					)
				),
				'paged' => $current_page,
				'orderby'    => 'date',
				's' => $_GET['search-query']
			);
		}
	} else {
		if( isset($_GET['orderby']) && isset($_GET['order'])) {
			$pargs = array(
				'posts_per_page' => '21',
				'post_type' => 'service',
				'paged' => $current_page,
				'meta_key' => $_GET['orderby'],
				'orderby' => 'meta_value_num',
				'order' => $_GET['order'],
				's' => $_GET['search-query']
			);
		} else {
			$pargs = array(
				'posts_per_page' => '21',
				'post_type' => 'service',
				'paged' => $current_page,
				'orderby'    => 'date',
				's' => $_GET['search-query']
			);
		}
	}
	
    $posts = new WP_Query($pargs);
	
	?>


	<div id="catalog-block" class="catalog__items-wrap construction-services-content">
	<div class="catalog__items construction-services-items">

	<?php

	while ( $posts->have_posts() ) : $posts->the_post();
	?>

	<div class="catalog__card">
		<a href="<?php echo get_permalink(); ?>" class="catalog__card-image" style="display:block;background: url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat center grey; background-size: cover;">
		</a>
		<div class="catalog__card-title">
			<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
		</div>
		<div class="card__bottom">
			<div class="catalog__card-price">
				от <?php the_field('service_price'); ?> бел.руб.
			</div>
			<a href="<?php echo get_permalink(); ?>" class="catalog__card-button">
				Подробнее
			</a>
		</div>
	</div>

	<?php
	
    endwhile;
	?>

	</div>

	<?php
		$paginationArgs = array(
			'total' => $posts->max_num_pages,
			'current' => $current_page,
			'format' => '?page_number=%#%',
			'mid_size' => 10,
			'end_size' => 1,
			'type' => 'array',
			'prev_text'    => __('Назад'),
			'next_text'    => __('Далее'),
		);

		global $wp_query;
		$wp_query->max_num_pages = $posts->max_num_pages;
	
		$paginate_links = paginate_links( $paginationArgs );
	
		$c = $paginationArgs['current'];
		$allowed = [
			'current',
			'prev',
			'next',
			sprintf( '?page_number=%d"', $c-4 ),
			sprintf( '?page_number=%d"', $c-3 ),
			sprintf( '?page_number=%d"', $c-2 ),
			sprintf( '?page_number=%d"', $c-1 ),
			sprintf( '?page_number=%d"', $c+1 ),
			sprintf( '?page_number=%d"', $c+2 ),
			sprintf( '?page_number=%d"', $c+3 ),
			sprintf( '?page_number=%d&', $c-4 ),
			sprintf( '?page_number=%d&', $c-3 ),
			sprintf( '?page_number=%d&', $c-2 ),
			sprintf( '?page_number=%d&', $c-1 ),
			sprintf( '?page_number=%d&', $c+1 ),
			sprintf( '?page_number=%d&', $c+2 ),
			sprintf( '?page_number=%d&', $c+3 ),
		];
	
		$n = $posts->max_num_pages;
	
		$paginate_links = array_filter(
			$paginate_links,
			function( $value ) use ( $allowed, $c, $n ) {
				if ($c < 5) {
					for ($i = 1; $i <= 5 - $c; $i++) {
						array_push($allowed, sprintf( '?page_number=%d"', $c+3+$i ));
						array_push($allowed, sprintf( '?page_number=%d&', $c+3+$i ));
					}
				}
				
				if ($c > $n - 3) {
					for ($i = 1; $i <= $c - ($n - 3); $i++) {
						array_push($allowed, sprintf( '?page_number=%d"', $c-4-$i ));
						array_push($allowed, sprintf( '?page_number=%d&', $c-4-$i ));
					}
				}
				
				foreach( (array) $allowed as $tag )
				{
					if( false !== strpos( $value, $tag ) || ($c <= 5 && false == strpos( $value, '?page_number' )))
						return true;
				}
				return false;
			}
		);
	
	
		if( ! empty( $paginate_links ) )
		printf(
			"<nav class='navigation pagination' role='navigation' aria-label='Записи'><div class='nav-links'>%s</div></nav>",
			join( "", $paginate_links )
		);
	?>
		
	</div>

	<?php
    rewind_posts();
    wp_reset_postdata();
}

add_action( 'init', 'create_services_taxonomy', 0 );
 
function create_services_taxonomy() {
  $labels = array(
    'name' => _x( 'Виды услуг', 'taxonomy general name' ),
    'singular_name' => _x( 'Виды услуг', 'taxonomy singular name' ),
    'search_items' =>  __( 'Найти виды услуг' ),
    'all_items' => __( 'Все виды услуг' ),
    'parent_item' => __( 'Родительский вид услуг' ),
    'parent_item_colon' => __( 'Родительский вид услуг:' ),
    'edit_item' => __( 'Изменить вид услуг' ), 
    'update_item' => __( 'Обновить вид услуг' ),
    'add_new_item' => __( 'Добавить вид услуг' ),
    'new_item_name' => __( 'Новый вид услуг' ),
    'menu_name' => __( 'Виды услуг' ),
  );

  register_taxonomy('service_category',array('service'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array(
		'with_front' => 'false'
	),
  ));
}


/* вывод меню  */

class CSS_Menu_Walker extends Walker {
	var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
	
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "$indent<ul>";
	}
	
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "$indent</ul>";
	}
	
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
	
		global $wp_query;
		$class_names = $value = '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		
		/* Проверка наличия дочерних элементов */
		$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
		if (!empty($children)) {
			$classes[] = 'has-sub';
		}
		
		if ($item->ID == 125 && get_post_ancestors(get_the_ID())[0] == 102) {
			$classes[] = 'current-menu-item';
		}
		
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		
		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';
		
		
		
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
		$attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
		
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'><span>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</span>';
		if (!empty($children)) {
			$item_output .= '<svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 5L7.4641 0.5H0.535898L4 5Z" fill="#202022"/></svg>';
		}
		$item_output .= '</a>';
		$item_output .= $args->after;
		if ($depth == 0)
			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	
	function end_el(&$output, $item, $depth = 0, $args = array()) {
		$output .= "</li>";
	}
}

class CSS_Menu_Walker_mobile extends Walker {
	var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
	
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "$indent<ul>";
	}
	
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "$indent</ul>";
	}
	
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
	
		global $wp_query;
		$class_names = $value = '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		
		/* Проверка наличия дочерних элементов */
		$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
		if (!empty($children)) {
			$classes[] = 'has-sub';
		}
		
		if ($item->ID == 63 && is_archive()) {
			$classes[] = 'current-menu-item';
		}
		
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		
		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';
		
		
		
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
		$attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
		
		$item_output = $args->before;
		$item_output .= '<span class="mob-menu-item-wrap"><a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		if (!empty($children)) {
			$item_output .= '<span id="submenu-mob-link-' . $item->ID . '"><svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L7 7L1 13" stroke="#202022" stroke-width="1.5"></path></svg></span>';
		}
		$item_output .= '</span>';
		$item_output .= $args->after;
		if ($depth == 0)
			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	
	function end_el(&$output, $item, $depth = 0, $args = array()) {
		$output .= "</li>";
	}
}

// Enable WebP in WordPress
add_filter( 'wp_check_filetype_and_ext', 'wpse_file_and_ext_webp', 10, 4 );
function wpse_file_and_ext_webp( $types, $file, $filename, $mimes ) {
    if ( false !== strpos( $filename, '.webp' ) ) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }

    return $types;
}


add_filter( 'upload_mimes', 'wpse_mime_types_webp' );
function wpse_mime_types_webp( $mimes ) {
    $mimes['webp'] = 'image/webp';

  return $mimes;
}

add_shortcode( 'um-service-filter', 'um_service_filter_func' );

function um_service_filter_func( $args ) {
	
	//echo get_the_term_list( $post->ID, 'service_category', 'service_category: ', ', ', '' );
	
	$cat_terms = get_terms(
		array('service_category'),
		array(
			'hide_empty'    => false,
			'orderby'       => 'name',
			'order'         => 'ASC',
			'number'        => 6
		)
	 );
	 $work_items = get_terms(
		 array('service_category'),
		 array(
			 'hide_empty'    => false,
			 'orderby'       => 'name',
			 'order'         => 'ASC'
		 )
	 );
	 $filters_html = false;
	 $count = count( $work_items );
	 echo '<div class="catalog__search-group construction-services-search"><input type="text" placeholder="Поиск по разделам">
	 <div class="construction-services-search__active-filters"></div><div class="construction-services-search__select"><ul>';

	 if( $count > 0 ):
		 foreach( $work_items as $work_item )
		 {
			 $work_item_id = $work_item->term_id;
			 $work_item_name = $work_item->name;

			 $filters_html .= '<li class="btn work-filter" title="' . 
				 $work_item->slug . '"><div class="construction-services-search__radio"></div><span class="construction-services-search__label">' . $work_item->name . '</span></li>';
		 }
		 echo $filters_html;
	 endif;
	
	
	 echo '</ul></div></div>';
}

function ajax_filter_posts_scripts() {

wp_register_script('afp_script', get_template_directory_uri() . '/assets/js/work.js', false, null, false);
wp_enqueue_script('afp_script');

wp_localize_script( 'afp_script', 'afp_vars', array(
     'afp_nonce' => wp_create_nonce( 'afp_nonce' ),
     'afp_ajax_url' => admin_url( 'admin-ajax.php' ),
   )
);
}
add_action('wp_enqueue_scripts', 'ajax_filter_posts_scripts', 100);

$result = array();

// функция для передачи параметров фильтра и пагинации

function ajax_filter_get_posts( $work_item ) {
   if( !isset( $_POST['afp_nonce'] ) || !wp_verify_nonce( $_POST['afp_nonce'], 'afp_nonce' ))
      die('Permission denied');
      $work_item = $_POST['expertises'];
      $page = $_POST['page'];
      $result = json_encode(my_get_posts($work_item, $page, true));
      echo $result;
      die();
}

// функция вывода карточек и пагинации

function my_get_posts($work_item = [], $page = 1, $ajax = false){
   $args = array(
     'expertises' => $work_item[0],
     'post_type' => 'service',
     'posts_per_page' => 21,
	 'paged' => $page, // параметр успешно передан
	 'tax_query' => array(
		 array(
			 'taxonomy' => 'service_category',
			 'field'    => 'slug',
			 'terms' => $work_item,
			 'operator' => 'IN'
		 )
	 ),
	 'meta_key' => $_POST['orderby'],
	 'orderby' => 'meta_value_num',
	 'order' => $_POST['order']
   );

   if( !$work_item ) {
     unset( $args['expertises'] );
     unset( $args['tax_query'] );
   }

   $query = new WP_Query( $args );
   $html = '';
   $items = array();

   if ( $query->have_posts() ) : 
        while ( $query->have_posts() ) : 
        $query->the_post();
	
        $res = '<div class="catalog__card" id="post-'.get_the_id().'">'.
			'<a href="'.get_the_permalink().'" class="catalog__card-image" style="display:block;background: url('.get_the_post_thumbnail_url().') no-repeat center grey; background-size: cover;">							  </a>'.
			'<div class="catalog__card-title">'.get_the_title().'</div>'
			.'<div class="card__bottom">'
				.'<div class="catalog__card-price">'
					.'от '. get_field('service_price') . ' бел.руб.'
				.'</div>'
				.'<a href="'.get_the_permalink().'" class="catalog__card-button">
					Подробнее
				</a>
			</div>
		</div>';

        $ajax ? $items[] = $res : $html .= $res;

    endwhile;
	
	$paginationArgs = array(
		'base'         => 'http://test1144.beget.tech/services/excavation-services/',
		'format'       => '?page=%#%',
		'total' => $query->max_num_pages,
		'current' => $page,
		'format' => '?page_number=%#%',
		'mid_size' => 10,
		'end_size' => 10,
		'type' => 'array',
		'prev_text'    => __('Назад'),
		'next_text'    => __('Далее'),
	);

	global $wp_query;
	$wp_query->max_num_pages = $query->max_num_pages;

	$paginate_links = paginate_links( $paginationArgs );

	//$pagination = '<nav class="navigation pagination" role="navigation" aria-label="Записи"><div class="nav-links">'.$paginate_links.'</div></nav>';

    $result['response'] = $ajax ? '<div class="catalog__items construction-services-items">'.implode('', $items).'</div>'.'<nav class="navigation pagination" role="navigation" aria-label="Записи"><div class="nav-links">'.join( "", $paginate_links ).'</div></nav>' : '<div class="catalog__items construction-services-items">'.$html.'</div>'.'<nav class="navigation pagination" role="navigation" aria-label="Записи"><div class="nav-links">'.join( "", $paginate_links ).'</div></nav>';
    $result['status'] = 'success';
    $result['page']   = $page;
    else:
        $result['response'] = '<h2>No posts found</h2>';
        $result['status']   = '404';
    endif;
    wp_reset_postdata();
    return $result;
}

add_action('wp_ajax_filter_posts', 'ajax_filter_get_posts');
add_action('wp_ajax_nopriv_filter_posts', 'ajax_filter_get_posts');

function get_work_filters()
{
	$cat_terms = get_terms(
					array('service_category'),
					array(
						'hide_empty'    => false,
						'orderby'       => 'name',
						'order'         => 'ASC',
						'number'        => 6
					)
				);
 $work_items = get_terms(
	 array('service_category'),
	 array(
		 'hide_empty'    => false,
		 'orderby'       => 'name',
		 'order'         => 'ASC',
		 'number'        => 6
	 )
 );
 $filters_html = false;
 $count = count( $work_items );

 if( $count > 0 ):
     foreach( $work_items as $work_item )
     {
         $work_item_id = $work_item->term_id;
         $work_item_name = $work_item->name;

         $filters_html .= '<a href="' . 
             get_term_link( $work_item ) . 
             '" class="btn work-filter" title="' . 
             $work_item->slug . '">' . $work_item->name . '</a> ';
     }
     echo $filters_html;
 endif;
}

function disable_wp_auto_p( $content ) {
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  return $content;
}
add_filter( 'the_content', 'disable_wp_auto_p', 0 );

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}


require get_template_directory() . '/inc/comments-helper.php';




add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );

function submenu_limit( $items, $args ) {

    if ( empty( $args->submenu ) ) {
        return $items;
    }

    $ids       = wp_filter_object_list( $items, array( 'title' => $args->submenu ), 'and', 'ID' );
    $parent_id = array_pop( $ids );
    $children  = submenu_get_children_ids( $parent_id, $items );

    foreach ( $items as $key => $item ) {

        if ( ! in_array( $item->ID, $children ) ) {
            unset( $items[$key] );
        }
    }

    return $items;
}

function submenu_get_children_ids( $id, $items ) {

    $ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );

    foreach ( $ids as $id ) {
        $ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
    }

    return $ids;
}

//Добавление класса для форм
add_filter( 'wpcf7_form_class_attr', 'custom_custom_form_class_attr' );
function custom_custom_form_class_attr( $class ) {
  $class .= ' form';
  return $class;
}


/*
 * "Хлебные крошки" для WordPress
 * автор: Starmedia
 * версия: 2019.03.03
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home']     = 'Главная'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author']   = 'Статьи автора %s'; // текст для страницы автора
	$text['404']      = 'Ошибка 404'; // текст для страницы 404
	$text['page']     = 'Страница %s'; // текст 'Страница N'
	$text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	$wrap_before    = '<div class="catalog__location" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep            = '<img alt="loc-arrow" src="https://arenda-tehnika.by/wp-content/themes/UM/assets/images/loc-arrow.svg">'; // разделитель между "крошками"
	$before         = '<span class="catalog__location-current">'; // тег перед текущей "крошкой"
	$after          = '</span>'; // тег после текущей "крошки"

	$show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_url       = home_url('/');
	$link           = '<span class="link" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
	$link          .= '<meta itemprop="position" content="%3$s" />';
	$link          .= '</span>';
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

	} else {

		$position = 0;

		echo $wrap_before;

		if ( $show_home_link ) {
			$position += 1;
			echo $home_link;
		}

		if ( is_category() ) {
			echo $sep . 'Аренда спецтехники';
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			foreach ( array_reverse( $parents ) as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$cat = get_query_var('cat');
				echo $sep .sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo   $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_search() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $show_home_link ) echo $sep;
				echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_time('Y') . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_month() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_day() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
			$position += 1;
			echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$position += 1;
				$post_type = get_post_type_object( get_post_type() );
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;
			} else {
				$cat = get_the_category(); $catID = $cat[0]->cat_ID;
				$parents = get_ancestors( $catID, 'category' );
				$parents = array_reverse( $parents );
				$parents[] = $catID;
				foreach ( $parents as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				if ( get_query_var( 'cpage' ) ) {
					$position += 1;
					echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
					echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					if ( $show_current ) echo $sep . $before . get_the_title() . $after;
					elseif ( $show_last_sep ) echo $sep;
				}
			}

		} elseif ( is_post_type_archive() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . $post_type->label . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_attachment() ) {
			$parent = get_post( $parent_id );
			$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
			$parents = get_ancestors( $catID, 'category' );
			$parents = array_reverse( $parents );
			$parents[] = $catID;
			foreach ( $parents as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			$position += 1;
			echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_title() . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_page() && $parent_id ) {
			$parents = get_post_ancestors( get_the_ID() );
			foreach ( array_reverse( $parents ) as $pageID ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
			}
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$tagID = get_query_var( 'tag_id' );
				echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . $text['404'] . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
} // end of dimox_breadcrumbs()

//подключение шаблонного сайдбара
function theme_sidebar( $name = '' ){
	do_action( 'get_sidebar', $name );

	if( $name )
		$name = "-$name";

	locate_template( "sidebar$name.php", true );
}




//отключаем обновление некоторых плагинов
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
function filter_plugin_updates( $value ) {
	unset( $value->response['advanced-custom-fields-pro/acf.php'] );
	unset( $value->response['advanced-custom-fields/acf.php'] );
	unset( $value->response['contact-form-7/wp-contact-form-7.php'] );
	return $value;
}
//отключаем обновление некоторых плагинов





if ($_SERVER['REQUEST_URI'] == "/index.php") {
    header("Location: /", TRUE, 301);
    exit();
}


remove_action( 'template_redirect', 'redirect_canonical' );