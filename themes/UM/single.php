<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sss
 * 
 */

get_header();
?>

<?php if ( get_post_type() == 'product' ) { ?>
<main>
	<div class="product-page">
		<div class="product-page__main">
			<div class="container">
				<div class="catalog__location"><a class="catalog__location-history" href="/">Главная</a> <img alt="loc-arrow"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <a
						class="catalog__location-history"
						href="/arenda-spectehniki"><?php if (get_post_type() == 'product') { ?>Аренда спецтехники<?php } ?></a> <img
						alt="loc-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <a
						class="catalog__location-history"
						href="/arenda-spectehniki"><?php echo (get_the_category()[0]->name); ?></a> <img alt="loc-arrow"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <span
						class="catalog__location-current"><?php the_title(); ?></span></div>
				<div class="product-page__wrap">
					<div class="product-page__main-title-mobile"><?php the_title(); ?></div>
					<div class="product-page__main-image"
						style="display:block;background: url('<?php echo get_field('characteristics__image')['url'] ?>') no-repeat center grey; background-size: cover;">
					</div>
					<div class="product-page__main-info">
						<h1 class="product-page__main-title"><?php the_title(); ?></h1>
						<div class="product-page__options">
							<?php
					$post_meta = get_post_meta(get_the_ID());
					foreach($post_meta as $key=>$value)
					{
						if (get_field_object($key)['value'] && $key !== 'price' && strpos($key, 'characteristics') === false) {
						?>
							<div class="product-page__option">
								<div class="product-page__key">
									<?php echo get_field_object($key)['label'] ?>
								</div>
								<div class="product-page__value">
									<?php echo get_field_object($key)['value'] ?>
								</div>
							</div>
							<?php
						}
					}
				?>
						</div>
						<div class="product-page__bottom">
							<div class="product-page__price"><?php echo get_field('price') ?> бел.руб. без НДС</div>
							<a href="#ex1" rel="modal:open" class="product-page__button">Арендовать</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="consultation-form">
			<div class="container">
				<!-- <form id="form1" novalidate>
					<div class="consultation-form__title">Получить консультацию</div>
					<div class="consultation-form__group">
						<div id="form1-name-wrap"><input id="form1-name" type="text" placeholder="Имя" required></div>
						<div id="form1-phone-wrap"><input id="form1-phone" type="phone" placeholder="Телефон" required></div><button
							type="submit">Заказать звонок</button>
					</div><input type="checkbox" id="data-checkbox" checked="checked"> <label for="data-checkbox"
						class="data-checkbox-label">Даю согласие на обработку персональных данных</label> <button class="mobile-box"
						type="submit">Заказать звонок</button>
				</form> -->
				<?php echo do_shortcode('[contact-form-7 id="2289" title="Получить консультацию"]'); ?>
			</div>
		</div>
		<div class="product-page__info">
			<div class="container">
				<div class="product-page__nav-wrap">
					<div class="container">
						<div class="product-page__nav">
							<div class="product-page__nav-scroll">
								<div class="product-page__nav-fill"></div>
							</div>
							<ul class="product-page__nav-list">
								<li id="st_description">Описание</li>
								<li id="st_characteristics">Характеристики</li>
								<li id="st_conditions">Условия аренды</li>
								<li id="st_reviews">Отзывы</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="product-page__nav-wrap-pad">
					<div class="product-page__nav">
						<ul class="product-page__nav-list">
							<li id="st_description_1">Описание</li>
							<li id="st_characteristics_1">Характеристики</li>
							<li id="st_conditions_1">Условия аренды</li>
							<li id="st_reviews_1">Отзывы</li>
						</ul>
					</div>
				</div>
				<div class="product-page__nav-wrap-mobile">
					<div class="product-page__nav">
						<ul class="product-page__nav-list-items owl-carousel owl-theme">
							<li class="st_description_2">Описание</li>
							<li class="st_characteristics_2">Характеристики</li>
							<li class="st_conditions_2">Условия аренды</li>
							<li class="st_reviews_2">Отзывы</li>
						</ul>
					</div>
				</div>
				<div class="product-page__info-wrap">
					<div class="product-page__description">
						<div class="product-page__title">Описание</div>
						<div class="product-page__text"><?php the_content(); ?></div>
					</div>
					<div class="product-page__characteristics">
						<div class="product-page__title">Характеристики</div>
						<div class="product-page__options">

							<?php

	if( have_rows('characteristics') ):

		while ( have_rows('characteristics') ) : the_row();
	
			?>

							<div class="product-page__option">
								<div class="product-page__key"><?php the_sub_field('characteristic_name'); ?></div>
								<div class="product-page__value"><?php the_sub_field('characteristic_value'); ?></div>
							</div>

							<?php

		endwhile;

	endif;

	?>

						</div>
					</div>
					<div class="product-page__conditions">
						<div class="product-page__title">Условия аренды</div>
						<ul class="product-page__list">
							<li>Минимальный срок аренды спецтехники - 4 часа</li>
							<li>Доставка стройтехники осуществляется за счет арендатора</li>
							<li>В стоимость аренды входит работа техники с водителем</li>
							<li>Стоимость часа зависит от общего количество часов, запланированного на аренду техники</li>
							<li>Мы работаем как с юридическими, так и с физ.лицами</li>
							<li>Арендовать спецтехнику по желанию клиента можно в любые погодные условия</li>
							<li>Оплата аренды спецтехники осуществляется по безналичному расчету (с НДС)</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="product-page__reviews">
			<div class="container">
				<div class="product-page__reviews-wrap">
					<div class="reviews__top">
						<div class="reviews__title">Отзывы</div><a class="posts__link" href="/reviews/">Посмотреть все<img
								alt="link-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-2.svg"></a>
					</div>
					<div class="reviews__list"><?php echo do_shortcode('[um-reviews post_num=4]'); ?></div><a
						class="reviews__button" style="display:block" href="/reviews/">Показать больше</a>
				</div>
			</div>
		</div>
		<div class="product-page__similar">
			<div class="container">
				<div class="product-page__title">Похожие предложения</div>
				<div id="similar-slider" class="product-page__similar-items owl-carousel owl-theme">
					<?php
	print_r();
										   
	$args = array(
		'numberposts' => 9,
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'slug',
				'terms' => get_the_category()[0]->slug
			)
		),
		'post_type' => 'product'
	);

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="product-page__similar-item">
						<div class="product-page__card"><a href="<?php echo get_permalink(); ?>" class="product-page__card-image"
								style="display:block;background: url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat center grey; background-size: cover;"></a>
							<div class="product-page__card-info">
								<div class="product-page__card-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div class="product-page__card-options">
									<?php
					$post_meta = get_post_meta(get_the_ID());
					foreach($post_meta as $key=>$value)
					{
						if (get_field_object($key)['value'] && $key !== 'price' && strpos($key, 'characteristics') === false) {
						?>
									<div class="product-page__card-option">
										<div class="product-page__card-key">
											<?php echo get_field_object($key)['label'] ?>
										</div>
										<div class="product-page__card-value">
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
								<div class="product-page__card-price"><?php the_field('price'); ?> бел.руб. без НДС</div><a
									href="<?php echo get_permalink(); ?>" class="product-page__card-button">Заказать</a>
							</div>
						</div>
					</div>
					<?php endforeach; 
    wp_reset_postdata();?>
				</div>
				<div class="similar__bar">
					<div class="similar__scroller"></div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php } ?>

<?php if ( get_post_type() == 'post' ) { ?>
<main>
	<div class="info-center info-center-article-page">
		<div class="container">
			<div class="catalog__location"><a class="catalog__location-history" href="/">Главная</a> <img alt="loc-arrow"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <a
					class="catalog__location-history" href="/novosti/">Новости</a> <img alt="loc-arrow"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <span
					class="catalog__location-current"><?php the_title(); ?></span></div>
			<div class="article">
				<div class="article__title"><?php the_title(); ?></div>
				<div class="article__top">
					<div class="article__author"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.svg"
							alt="alt"> <span><?php the_author(); ?></span></div>
					<div class="article__date"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.svg"
							alt="alt"> <span><?php the_time('d.m.Y'); ?></span></div>
					<div class="article__time"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/time.svg"
							alt="alt"> <span>Время прочтения: 3 минуты</span></div>
					<div class="article__views"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/views.svg"
							alt="alt"> <span>58</span></div>
					<div class="article__share"><span>Поделиться</span>
						<div class="article__share-items"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26ZM15.614 16.4916C14.9343 16.7391 14.1998 16.7885 13.5033 16.6335C12.8069 16.4786 12.1798 16.1263 11.7014 15.6213C11.2229 15.1162 10.9147 14.481 10.8156 13.796C10.7164 13.111 10.8309 12.4071 11.1445 11.7731L11.3953 11.2672L12.719 11.8483L12.4689 12.354C12.2184 12.8604 12.1837 13.4363 12.3725 13.9549C12.5613 14.4735 12.958 14.8924 13.4754 15.1193C13.995 15.3329 14.5858 15.3426 15.1251 15.1463C15.6645 14.95 16.1108 14.5628 16.3716 14.0652L18.6846 9.38854C18.9343 8.88211 18.9686 8.30666 18.7799 7.78838C18.5913 7.2701 18.1951 6.85131 17.6784 6.62385C17.1588 6.41025 16.568 6.40059 16.0286 6.59689C15.4893 6.79318 15.0429 7.18035 14.7822 7.67797L13.4585 7.09682C13.879 6.24669 14.6273 5.58271 15.5388 5.25096C16.4502 4.91921 17.4502 4.94686 18.3188 5.32783C19.1873 5.70879 19.8533 6.41187 20.1701 7.28238C20.487 8.1529 20.4288 9.11955 20.0083 9.96969L17.6954 14.6448C17.4882 15.0665 17.1976 15.4468 16.8405 15.7638C16.4833 16.0807 16.0667 16.328 15.6147 16.4913L15.614 16.4916ZM10.5411 19.8402C9.86141 20.0877 9.12688 20.1371 8.43044 19.9822C7.73399 19.8272 7.1069 19.475 6.62848 18.9699C6.15005 18.4648 5.84179 17.8296 5.74268 17.1446C5.64356 16.4597 5.75805 15.7557 6.07165 15.1217L8.38565 10.4454C8.80612 9.59532 9.5544 8.93134 10.4659 8.59959C11.3774 8.26784 12.3774 8.29549 13.2459 8.67645C14.1145 9.05742 14.7804 9.76049 15.0973 10.631C15.4141 11.5015 15.3559 12.4682 14.9354 13.3183L14.6846 13.8243L13.3607 13.2447L13.6131 12.7344C13.8621 12.228 13.8957 11.6528 13.7067 11.135C13.5176 10.6172 13.1213 10.199 12.6045 9.97207C12.0849 9.75846 11.4941 9.7488 10.9548 9.9451C10.4155 10.1414 9.96911 10.5286 9.70838 11.0262L7.39578 15.702C7.27155 15.9528 7.19906 16.2233 7.18243 16.4981C7.1658 16.7729 7.20537 17.0466 7.29886 17.3034C7.39236 17.5603 7.53796 17.7954 7.72734 17.9952C7.91671 18.195 8.14614 18.3557 8.40252 18.468C8.92212 18.6816 9.51293 18.6912 10.0522 18.4949C10.5916 18.2986 11.038 17.9115 11.2987 17.4138L12.6221 17.9943C12.4148 18.416 12.1242 18.7962 11.767 19.1131C11.4098 19.4299 10.9931 19.6771 10.5411 19.8402Z"
									fill="#FFCA40" /></svg> <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26ZM11.0422 13.4923V21H13.9824V13.4923H16.8687L17 10.7892H13.9824V8.81544C13.9824 8.07014 14.143 7.6211 15.1454 7.6211C16.0716 7.6211 16.9203 7.62914 16.9203 7.62914L16.9859 5.10488C16.9859 5.10488 16.1537 5 15.0282 5C12.2486 5 11.0422 6.66611 11.0422 8.4804V10.7892H9V13.4923H11.0422Z"
									fill="#FFCA40" /></svg> <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26ZM17.5399 19.1549L19.9544 7.27452C20.1687 6.22734 19.5937 5.81742 18.9365 6.07455L4.74234 11.78C3.7744 12.175 3.78868 12.7414 4.57804 12.9986L8.20693 14.1836L16.6363 8.6459C17.0327 8.37014 17.3935 8.52293 17.097 8.79869L10.2785 15.2271L10.0142 19.1363C10.3928 19.1363 10.5571 18.9648 10.7536 18.7599L12.5287 16.9786L16.2076 19.8071C16.8827 20.2021 17.3577 19.9934 17.5399 19.1549Z"
									fill="#FFCA40" /></svg> <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26ZM20.0508 8C20.6126 8 20.7293 8.2875 20.6126 8.67813C20.379 9.75 18.1099 12.9125 18.1068 12.9156C17.9111 13.2281 17.8322 13.3844 18.1068 13.7344C18.1274 13.7632 18.2321 13.8692 18.3905 14.0294C19.0566 14.7036 20.671 16.3376 20.9566 17.2188C21.1112 17.7375 20.8429 18 20.3128 18H18.4539C17.9575 18 17.707 17.7241 17.1646 17.127C16.9347 16.8738 16.6523 16.5628 16.2764 16.1906C15.1718 15.1375 14.6984 15 14.4239 15C13.9202 15 13.9214 15.1419 13.9333 16.4622C13.9354 16.697 13.9379 16.9691 13.9379 17.2844C13.9379 17.7375 13.7927 18 12.6092 18C10.64 18 8.47504 16.8156 6.93813 14.6313C4.63118 11.4313 4 9.00937 4 8.52188C4 8.24687 4.1073 8 4.63749 8H6.4963C6.97284 8 7.15273 8.20625 7.33577 8.71562C8.24466 11.3406 9.77842 13.6344 10.4096 13.6344C10.6463 13.6344 10.7536 13.525 10.7536 12.9312V10.2188C10.7107 9.44583 10.4385 9.11141 10.237 8.86381C10.1126 8.71099 10.0151 8.59124 10.0151 8.42188C10.0151 8.21875 10.1918 8 10.4885 8H13.4108C13.8022 8 13.9347 8.20938 13.9347 8.67813V12.325C13.9347 12.7156 14.1146 12.8531 14.2314 12.8531C14.4681 12.8531 14.6669 12.7156 15.0992 12.2875C16.4373 10.8062 17.3841 8.52188 17.3841 8.52188C17.5009 8.24687 17.7186 8 18.192 8H20.0508Z"
									fill="#FFCA40" /></svg></div>
					</div>
				</div>
				<div class="article__main"><?php if (get_the_post_thumbnail_url()) {?><img
						src="<?php echo get_the_post_thumbnail_url(); ?>" class="article__image" alt="alt"><?php } ?><div
						class="article__text"><?php the_field('post_description'); ?></div>
				</div>

				<div><?php echo do_shortcode('[lwptoc]'); ?></div>

				<div class="article__content"><?php the_content(); ?></div>


				<div class="article__gallery">
					<div class="posts__top">
						<div class="posts__title">Галерея</div>
					</div>
					<div id="article-gallery" class="posts__items owl-carousel owl-theme">
					</div>
				</div>
				<div class="article__social">
					<div class="article__social-title">Понравилась статья? Подписывайтесь на наши новости</div>
					<div class="article__social-items">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M24.5083 19.6917C23.9638 19.3402 23.3745 19.0634 22.7563 18.8687C22.0122 18.627 21.2564 18.4232 20.4917 18.2583C20.0176 18.1492 19.546 18.0297 19.0771 17.9C18.7913 17.8195 18.5148 17.7092 18.2521 17.5708C18.0173 17.4566 17.8093 17.294 17.6417 17.0938C17.5044 16.9188 17.4322 16.7015 17.4375 16.4792C17.4375 16.0875 17.6458 15.7583 18.0729 15.4708C18.5146 15.1729 19.1125 15.0229 19.8458 15.0229C20.6375 15.0229 21.2125 15.1562 21.5562 15.425C21.9104 15.7021 22.2188 16.0958 22.4729 16.5958C22.6938 16.9875 22.8917 17.2583 23.0854 17.4292C23.2917 17.6167 23.5875 17.7146 23.9667 17.7146C24.3854 17.7146 24.7375 17.5646 25.0188 17.2625C25.2868 16.9918 25.4379 16.6268 25.4396 16.2458C25.4396 15.8542 25.3292 15.4479 25.1187 15.0458C24.8691 14.5983 24.531 14.2064 24.125 13.8937C23.62 13.5032 23.0472 13.2094 22.4354 13.0271C21.6604 12.7964 20.8543 12.6868 20.0458 12.7021C18.9 12.7021 17.8896 12.8646 17.0396 13.1896C16.1792 13.5187 15.5104 13.9979 15.0521 14.6125C14.5913 15.2267 14.3467 15.976 14.3562 16.7438C14.3562 17.5771 14.5792 18.2854 15.0187 18.8521C15.45 19.4104 16.0438 19.8563 16.7771 20.1792C17.4979 20.4917 18.3979 20.7688 19.4625 21.0042C20.2417 21.1708 20.875 21.3333 21.3396 21.4833C21.7854 21.625 22.1542 21.8333 22.4333 22.1021C22.5659 22.2319 22.6695 22.3883 22.7373 22.561C22.8052 22.7337 22.8358 22.9188 22.8271 23.1042C22.8271 23.6292 22.5792 24.0562 22.0708 24.4188C21.5479 24.7854 20.8542 24.9688 20.0083 24.9688C19.3917 24.9688 18.8937 24.8792 18.5208 24.6958C18.1839 24.5423 17.8894 24.3092 17.6625 24.0167C17.4261 23.6821 17.229 23.3213 17.075 22.9417C16.9453 22.5986 16.7395 22.2894 16.4729 22.0375C16.2239 21.8213 15.9026 21.7067 15.5729 21.7167C15.3765 21.7105 15.1807 21.7432 14.997 21.8129C14.8132 21.8826 14.645 21.988 14.5021 22.1229C14.3657 22.2506 14.2573 22.4053 14.1838 22.5771C14.1103 22.7488 14.0733 22.934 14.075 23.1208C14.075 23.7354 14.2958 24.3792 14.7312 25.0208C15.1625 25.6646 15.7292 26.1812 16.4187 26.5625C17.3813 27.0875 18.6146 27.3521 20.0854 27.3521C21.3104 27.3521 22.3854 27.1562 23.2854 26.775C24.1917 26.3875 24.8917 25.8396 25.3646 25.1521C25.8395 24.4603 26.0897 23.639 26.0812 22.8C26.0812 22.075 25.9417 21.45 25.6646 20.9438C25.3857 20.4393 24.9891 20.0097 24.5083 19.6917ZM20 0C8.95417 0 0 8.95417 0 20C0 31.0458 8.95417 40 20 40C31.0458 40 40 31.0458 40 20C40 8.95417 31.0458 0 20 0ZM24.7937 31.1979C23.7792 31.1979 22.8229 30.9375 21.9854 30.4729C21.3677 30.593 20.7397 30.653 20.1104 30.6521C14.4583 30.6521 9.87292 25.9312 9.87292 20.1167C9.87292 19.3875 9.94583 18.6792 10.0812 17.9958C9.54362 17.0566 9.26201 15.9926 9.26458 14.9104C9.26458 11.5375 11.9229 8.79792 15.2042 8.79792C16.3646 8.79792 17.4458 9.14375 18.3625 9.7375C18.9292 9.63542 19.5167 9.58333 20.1104 9.58333C25.7667 9.58333 30.35 14.3 30.35 20.1187C30.35 20.8917 30.2687 21.6479 30.1146 22.3771C30.5083 23.1958 30.7312 24.1146 30.7312 25.0917C30.7292 28.4625 28.0729 31.1979 24.7937 31.1979Z"
								fill="#FFCA40" /></svg> <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM13.2804 11.36H26.7204C27.7764 11.36 28.6404 12.224 28.6404 13.28V26.72C28.6404 27.7769 27.7764 28.64 26.7204 28.64H13.2804C12.2244 28.64 11.3604 27.7769 11.3604 26.72V13.28C11.3604 12.224 12.2244 11.36 13.2804 11.36ZM23.7444 23.7443C22.7474 24.7415 21.3951 25.3018 19.985 25.3021C18.5748 25.3018 17.2224 24.7415 16.2253 23.7443C15.2281 22.7472 14.6678 21.3948 14.6676 19.9846C14.6676 19.6601 14.7088 19.3472 14.7674 19.04H13.2804V25.9673C13.2804 26.0546 13.2976 26.1409 13.331 26.2215C13.3645 26.3021 13.4136 26.3752 13.4754 26.4368C13.5372 26.4983 13.6106 26.547 13.6913 26.5802C13.772 26.6133 13.8584 26.6301 13.9456 26.6297H26.0551C26.1423 26.6301 26.2287 26.6133 26.3094 26.5802C26.3901 26.547 26.4635 26.4983 26.5253 26.4368C26.5871 26.3752 26.6362 26.3021 26.6697 26.2215C26.7031 26.1409 26.7204 26.0546 26.7204 25.9673V19.04H25.2026C25.2602 19.3472 25.3015 19.6601 25.3015 19.9846C25.3015 21.3947 24.7414 22.7471 23.7444 23.7443ZM16.9153 18.7131C16.7484 19.1162 16.6624 19.5483 16.6624 19.9846C16.6624 20.8658 17.0125 21.7109 17.6356 22.334C18.2587 22.9571 19.1038 23.3072 19.985 23.3072C20.8662 23.3072 21.7113 22.9571 22.3344 22.334C22.9575 21.7109 23.3076 20.8658 23.3076 19.9846C23.3076 19.5483 23.2216 19.1162 23.0546 18.7131C22.8877 18.31 22.6429 17.9437 22.3344 17.6352C22.0259 17.3267 21.6596 17.082 21.2565 16.915C20.8534 16.748 20.4213 16.6621 19.985 16.6621C19.5487 16.6621 19.1166 16.748 18.7135 16.915C18.3104 17.082 17.9441 17.3267 17.6356 17.6352C17.3271 17.9437 17.0823 18.31 16.9153 18.7131ZM24.5047 16.16H26.0551C26.4227 16.16 26.7204 15.8605 26.7204 15.4947V13.9433C26.7204 13.5766 26.4228 13.28 26.0541 13.28H24.5037C24.138 13.28 23.8404 13.5766 23.8404 13.9433V15.4957C23.8409 15.6717 23.911 15.8404 24.0355 15.9649C24.16 16.0893 24.3286 16.1595 24.5047 16.16Z"
								fill="#FFCA40" /></svg> <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM30.2044 24.4634C29.7724 23.6878 28.0261 22.0117 28.0261 22.0117C26.419 20.5424 26.419 20.4448 27.9364 18.5095C28.1535 18.2325 28.4008 17.9155 28.6827 17.5492C30.3567 15.3495 30.4626 14.6222 30.374 14.384C30.3211 14.237 30.05 14.1783 29.6504 14.1783H25.9838C25.8951 14.1763 25.8073 14.1965 25.7289 14.237C25.6188 14.3 25.528 14.4564 25.4978 14.512C25.4622 14.6117 24.9438 15.9372 24.2742 17.0612C22.7481 19.6063 22.1854 19.6063 21.9975 19.6063C21.9147 19.6063 21.8335 19.5838 21.7632 19.5412C21.2248 19.1983 21.2476 18.3669 21.2681 17.6246L21.2685 17.6091C21.2685 17.5403 21.27 17.4722 21.2713 17.4061C21.2726 17.3441 21.2739 17.284 21.2739 17.2271C21.2739 16.6761 21.2923 16.208 21.3096 15.7924C21.369 14.3378 21.356 13.9106 20.6778 13.7532C20.3408 13.6703 20.101 13.6126 19.1744 13.6H18.7003C17.846 13.6 16.9852 13.6336 16.5089 13.8644C16.3178 13.9537 16.1687 14.1048 16.0985 14.2034C16.361 14.2517 16.7952 14.384 17.05 14.724C17.4064 15.1984 17.4075 16.1797 17.4075 16.2762C17.4399 16.7737 17.5695 19.1875 16.874 19.559C16.7872 19.6075 16.6889 19.6328 16.5889 19.6325C16.0564 19.6325 15.3901 18.88 14.3057 17.0308C13.7069 16.0143 13.3171 15.0976 13.1626 14.7344C13.1444 14.6915 13.1294 14.6563 13.1177 14.6295C13.0227 14.4091 12.8866 14.1636 12.4687 14.1636H9.35178C9.00618 14.1636 8.6865 14.3609 8.83878 14.7229C8.83957 14.7246 8.84302 14.7323 8.84906 14.7458C9.02515 15.1403 11.4002 20.4607 14.0347 23.1578C16.2584 25.4363 18.7662 25.6 19.2478 25.6H20.6616C20.9218 25.6 21.2934 25.3397 21.2934 24.8821C21.2934 23.4202 21.7966 22.8713 22.193 22.7495C22.2555 22.7286 22.3212 22.7179 22.3874 22.718C22.9093 22.718 23.4248 23.2994 24.0203 23.9712L24.0268 23.9785C24.4275 24.4329 24.8412 24.8979 25.257 25.1802C25.8013 25.5454 26.2484 25.6 26.4633 25.6H29.55C29.7174 25.5884 30.2109 25.4509 30.3567 25.177C30.4431 25.0112 30.3999 24.7866 30.2239 24.5001C30.2194 24.4869 30.2128 24.4746 30.2044 24.4634Z"
								fill="#FFCA40" /></svg> <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM18.0422 20.917V28.8H20.9824V20.917H23.8687L24 18.0787H20.9824V16.0062C20.9824 15.2237 21.143 14.7522 22.1454 14.7522C23.0716 14.7522 23.9203 14.7606 23.9203 14.7606L23.9859 12.1101C23.9859 12.1101 23.1537 12 22.0282 12C19.2486 12 18.0422 13.7494 18.0422 15.6544V18.0787H16V20.917H18.0422Z"
								fill="#FFCA40" /></svg> <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<circle cx="20" cy="20" r="20" fill="#FFCA40" />
							<mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="13" y="9" width="14" height="22">
								<rect x="13.6001" y="9.60001" width="13" height="20.8" fill="url(#pattern0)" />
							</mask>
							<g mask="url(#mask0)">
								<rect x="13.6001" y="9.60001" width="13" height="20.8" fill="white" />
							</g>
							<defs>
								<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
									<use xlink:href="#image0" transform="translate(-0.466667 -0.0833333) scale(0.00377604 0.00236003)" />
								</pattern>
								<image id="image0" width="512" height="512"
									xlink:href="data:image/png;base64,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" />
							</defs>
						</svg> <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M40 20C40 31.0457 31.0457 40 20 40C8.9543 40 0 31.0457 0 20C0 8.9543 8.9543 0 20 0C31.0457 0 40 8.9543 40 20ZM16.3554 12.9778C16.3554 13.9218 15.7242 14.7342 14.5767 14.7342C13.4967 14.7342 12.7998 13.968 12.7998 13.024C12.7998 12.0551 13.4754 11.2 14.5776 11.2C15.6798 11.2 16.334 12.0089 16.3554 12.9778ZM12.7998 27.2V15.6445H16.3554V27.2H12.7998ZM18.0425 16.0827C18.0878 17.0738 18.1331 18.2214 18.1331 19.5947V27.2H21.6887V20.8542C21.6887 20.5387 21.7109 20.224 21.8016 19.9982C22.0496 19.368 22.5225 18.6036 23.4665 18.6036C24.7047 18.6036 25.2443 19.6845 25.2443 21.1014V27.2H28.7998V20.5849C28.7998 17.3431 27.1109 15.8365 24.8603 15.8365C23.0149 15.8365 21.9127 16.8934 21.4629 17.6143H21.3954L21.2371 16.0827H18.0425Z"
								fill="#FFCA40" /></svg></div>
				</div>
				<div class="article__comments">
					<?php comments_template(); ?>
</main>
<div class="fade">
	<div class="modal-social-auth">
		<img class="modal-social-auth__close-button" alt="alt"
			src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-auth.svg">
		<div class="modal-social-auth__title">Авторизация</div>
		<div class="modal-social-auth__links">
			<div class="modal-social-auth__link">
				<img class="facebook-auth" alt="alt"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/faceboook-auth.svg">
				<span>Войти через Facebook</span>
			</div>
			<div class="modal-social-auth__link">
				<img class="vk-auth" alt="alt" src="<?php echo get_template_directory_uri(); ?>/assets/images/vk-auth.svg">
				<span>Войти через Vkontakte</span>
			</div>
		</div>
		<div class="modal-social-auth__text">
			Продолжая, Вы соглашаетесь с нашими <a href="#">Условиями использования</a> и подтвержаете, что прочли наше <a
				href="#">Положение о конфиденциальности и использовании файлов cookie.</a>
		</div>
	</div>
</div>
<?php } ?>
<?php if ( get_post_type() == 'service' ) { ?>
<main>
	<div class="product-page">
		<div class="product-page__main">
			<div class="container">
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
				<div class="product-page__wrap">
					<div class="product-page__main-title-mobile"><?php the_title(); ?></div>
					
					<div class="product-page__main-image" style="background: url('<?php the_post_thumbnail_url( 'full' );?>') no-repeat center grey; background-size: cover;"></div>
					<div class="product-page__main-info">
						<h1 class="product-page__main-title"><?php the_title(); ?></h1>
						<div class="product-page__options">
							<?php
					$post_meta = get_post_meta(get_the_ID());
					foreach($post_meta as $key=>$value)
					{
						if (get_field_object($key)['value'] && $key !== 'price' && strpos($key, 'characteristics') === false) {
						?>
							<div class="product-page__option">
								<div class="product-page__key">
									<?php echo get_field_object($key)['label'] ?>
								</div>
								<div class="product-page__value">
									<?php echo get_field_object($key)['value'] ?>
								</div>
							</div>
							<?php
						}
					}
				?>
						</div>
						<div class="product-page__bottom">
							<div class="product-page__price"><?php echo get_field('price') ?> бел.руб. без НДС</div>
							<a href="#ex1" rel="modal:open" class="product-page__button">Арендовать</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="consultation-form">
			<div class="container">
				<?php echo do_shortcode('[contact-form-7 id="2289" title="Получить консультацию"]'); ?>
			</div>
		</div>
		<div class="product-page__info">
			<div class="container">
				<div class="product-page__nav-wrap">
					<div class="container">
						<div class="product-page__nav">
							<div class="product-page__nav-scroll">
								<div class="product-page__nav-fill"></div>
							</div>
							<ul class="product-page__nav-list">
								<li id="st_description">Описание</li>
								<li id="st_characteristics">Характеристики</li>
								<li id="st_conditions">Условия аренды</li>
								<li id="st_reviews">Отзывы</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="product-page__nav-wrap-pad">
					<div class="product-page__nav">
						<ul class="product-page__nav-list">
							<li id="st_description_1">Описание</li>
							<li id="st_characteristics_1">Характеристики</li>
							<li id="st_conditions_1">Условия аренды</li>
							<li id="st_reviews_1">Отзывы</li>
						</ul>
					</div>
				</div>
				<div class="product-page__nav-wrap-mobile">
					<div class="product-page__nav">
						<ul class="product-page__nav-list-items owl-carousel owl-theme">
							<li class="st_description_2">Описание</li>
							<li class="st_characteristics_2">Характеристики</li>
							<li class="st_conditions_2">Условия аренды</li>
							<li class="st_reviews_2">Отзывы</li>
						</ul>
					</div>
				</div>
				<div class="product-page__info-wrap">
					<div class="product-page__description">
						<div class="product-page__title">Описание</div>
						<div class="product-page__text"><?php the_content(); ?></div>
					</div>
					<div class="product-page__characteristics">
						<div class="product-page__title">Характеристики</div>
						<div class="product-page__options">

							<?php

	if( have_rows('characteristics') ):

		while ( have_rows('characteristics') ) : the_row();
	
			?>

							<div class="product-page__option">
								<div class="product-page__key"><?php the_sub_field('characteristic_name'); ?></div>
								<div class="product-page__value"><?php the_sub_field('characteristic_value'); ?></div>
							</div>

							<?php

		endwhile;

	endif;

	?>

						</div>
					</div>
					<div class="product-page__conditions">
						<div class="product-page__title">Условия аренды</div>
						<ul class="product-page__list">
							<li>Минимальный срок аренды спецтехники - 4 часа</li>
							<li>Доставка стройтехники осуществляется за счет арендатора</li>
							<li>В стоимость аренды входит работа техники с водителем</li>
							<li>Стоимость часа зависит от общего количество часов, запланированного на аренду техники</li>
							<li>Мы работаем как с юридическими, так и с физ.лицами</li>
							<li>Арендовать спецтехнику по желанию клиента можно в любые погодные условия</li>
							<li>Оплата аренды спецтехники осуществляется по безналичному расчету (с НДС)</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="product-page__reviews">
			<div class="container">
				<div class="product-page__reviews-wrap">
					<div class="reviews__top">
						<div class="reviews__title">Отзывы</div><a class="posts__link" href="/reviews/">Посмотреть все<img
								alt="link-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-2.svg"></a>
					</div>
					<div class="reviews__list"><?php echo do_shortcode('[um-reviews post_num=4]'); ?></div><a
						class="reviews__button" style="display:block" href="/reviews/">Показать больше</a>
				</div>
			</div>
		</div>
		<div class="product-page__similar">
			<div class="container">
				<div class="product-page__title">Похожие предложения</div>
				<div id="similar-slider" class="product-page__similar-items owl-carousel owl-theme">
					<?php
						print_r();
						$args = array(
							'numberposts' => 9,
							'tax_query' => array(
								array(
									'taxonomy' => 'category',
									'field'    => 'slug',
									'terms' => get_the_category()[0]->slug
								)
							),
							'post_type' => 'product'
						);

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<div class="product-page__similar-item">
						<div class="product-page__card"><a href="<?php echo get_permalink(); ?>" class="product-page__card-image"
								style="display:block;background: url('<?php echo get_the_post_thumbnail_url() ?>') no-repeat center grey; background-size: cover;"></a>
							<div class="product-page__card-info">
								<div class="product-page__card-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div class="product-page__card-options">
									<?php
					$post_meta = get_post_meta(get_the_ID());
					foreach($post_meta as $key=>$value)
					{
						if (get_field_object($key)['value'] && $key !== 'price' && strpos($key, 'characteristics') === false) {
						?>
									<div class="product-page__card-option">
										<div class="product-page__card-key">
											<?php echo get_field_object($key)['label'] ?>
										</div>
										<div class="product-page__card-value">
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
								<div class="product-page__card-price"><?php the_field('price'); ?> бел.руб. без НДС</div><a
									href="<?php echo get_permalink(); ?>" class="product-page__card-button">Заказать</a>
							</div>
						</div>
					</div>
					<?php endforeach; 
    wp_reset_postdata();?>
				</div>
				<div class="similar__bar">
					<div class="similar__scroller"></div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php } ?>

<?php
get_footer();