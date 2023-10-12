<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sss
 * 
 * Template Name: Archive
 */

get_header();
?>

<main>
	<div id="rent-banner" class="main-banner rent-banner">
		<div class="container">
			<div class="main-banner__left">
				<h1 class="main-banner__title"><?php if(is_category()) 
						single_cat_title();
					 else 
						echo 'Аренда спецтехники';
					?></h1>
				<div class="main-banner__text"><?php if(is_category()) 
						echo category_description();
					 else 
						echo 'Аренда спецтехники является популярной услугой в условиях современного технического прогресса и индустриализации общества. Техника специального назначения все больше применяется во всех областях жизнедеятельности человека, начиная от частного строительства до разработки крупных месторождений.';
					?></div>
			</div>
			<div class="main-banner__right">
				<div id="banner-slider" class="main-banner__slider owl-carousel owl-theme">
					<div class="main-banner__slide_1">
						<div class="main-banner__slide-text">Аренда экскаваторов</div>
					</div>
					<div class="main-banner__slide_2">
						<div class="main-banner__slide-text">Аренда погрузчиков</div>
					</div>
					<div class="main-banner__slide_3">
						<div class="main-banner__slide-text">Аренда бульдозеров</div>
					</div>
					<div class="main-banner__slide_4">
						<div class="main-banner__slide-text">Аренда тралов и низкорамных площадок</div>
					</div>
					<div class="main-banner__slide_5">
						<div class="main-banner__slide-text">Аренда самосвалов</div>
					</div>
					<div class="main-banner__slide_6">
						<div class="main-banner__slide-text">Аренда автокранов</div>
					</div>
				</div>
				<div class="main-banner__pages"><span id="banner-current"></span>/<span id="banner-all"></span> <svg
						id="banner-arrow" width="39" height="8" viewBox="0 0 39 8" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M38.3536 4.35355C38.5488 4.15829 38.5488 3.84171 38.3536 3.64645L35.1716 0.464466C34.9763 0.269204 34.6597 0.269204 34.4645 0.464466C34.2692 0.659728 34.2692 0.976311 34.4645 1.17157L37.2929 4L34.4645 6.82843C34.2692 7.02369 34.2692 7.34027 34.4645 7.53553C34.6597 7.7308 34.9763 7.7308 35.1716 7.53553L38.3536 4.35355ZM0 4.5H38V3.5H0V4.5Z"
							fill="#2E2C2B" /></svg></div>
			</div>
			<div class="main-banner__social">
				<ul>
					<li><a href="#"><svg class="main-banner__inst" width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM11 13C11 11.9 11.9 11 13 11H27C28.1 11 29 11.9 29 13V27C29 28.101 28.1 29 27 29H13C11.9 29 11 28.101 11 27V13ZM23.9 23.9003C22.8615 24.939 21.4529 25.5227 19.984 25.523C18.515 25.5227 17.1063 24.9391 16.0676 23.9004C15.0289 22.8617 14.4453 21.453 14.445 19.984C14.445 19.646 14.488 19.32 14.549 19H13V26.216C13 26.3069 13.0179 26.3968 13.0528 26.4807C13.0877 26.5647 13.1388 26.6409 13.2032 26.705C13.2675 26.7691 13.344 26.8198 13.428 26.8543C13.5121 26.8888 13.6021 26.9064 13.693 26.906H26.307C26.3979 26.9064 26.4879 26.8888 26.572 26.8543C26.656 26.8198 26.7325 26.7691 26.7968 26.705C26.8612 26.6409 26.9123 26.5647 26.9472 26.4807C26.9821 26.3968 27 26.3069 27 26.216V19H25.419C25.479 19.32 25.522 19.646 25.522 19.984C25.522 21.4529 24.9386 22.8616 23.9 23.9003ZM16.7865 18.6595C16.6125 19.0794 16.523 19.5295 16.523 19.984C16.523 20.9019 16.8876 21.7822 17.5367 22.4313C18.1858 23.0804 19.0661 23.445 19.984 23.445C20.9019 23.445 21.7822 23.0804 22.4313 22.4313C23.0804 21.7822 23.445 20.9019 23.445 19.984C23.445 19.5295 23.3555 19.0794 23.1815 18.6595C23.0076 18.2396 22.7527 17.8581 22.4313 17.5367C22.1099 17.2153 21.7284 16.9604 21.3085 16.7865C20.8886 16.6125 20.4385 16.523 19.984 16.523C19.5295 16.523 19.0794 16.6125 18.6595 16.7865C18.2396 16.9604 17.8581 17.2153 17.5367 17.5367C17.2153 17.8581 16.9604 18.2396 16.7865 18.6595ZM24.692 16H26.307C26.69 16 27 15.688 27 15.307V13.691C27 13.309 26.69 13 26.306 13H24.691C24.31 13 24 13.309 24 13.691V15.308C24.0005 15.4914 24.0736 15.6671 24.2033 15.7967C24.3329 15.9264 24.5086 15.9995 24.692 16Z"
									fill="#FFCA40" /></svg></a></li>
					<li><a href="#"><svg class="main-banner__whatsapp" width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM8.021 8.2909C11.109 5.4579 16.63 5.0359 19.198 5.0049V5.0039C20.052 4.9889 20.583 5.0249 20.583 5.0249C27.739 5.0509 30.942 7.3849 31.739 8.1189H31.755C34.396 10.4109 35.859 15.4779 34.875 23.5199C34.0005 30.6209 29.043 31.8701 27.3861 32.2877C27.2261 32.328 27.0968 32.3606 27.005 32.3899C26.552 32.5359 22.619 33.5199 17.484 33.0929L15.619 35.2019C15.4477 35.3848 15.2882 35.5656 15.1361 35.7379C14.4005 36.5715 13.8398 37.2069 12.968 36.9309C12.114 36.6659 12.161 35.3739 12.161 35.3739V32.1449C4.656 30.0249 4.75 22.2389 4.828 18.0929C4.922 13.9319 5.724 10.5669 8.021 8.2909ZM20.458 7.2919C20.458 7.2919 20.015 7.2609 19.286 7.2659H19.284C17.102 7.2819 12.414 7.5999 9.805 9.9589C7.867 11.8809 7.216 14.7189 7.138 18.1879C7.13565 18.3077 7.13293 18.4314 7.13014 18.5584C7.05213 22.1099 6.91487 28.3587 13.06 30.0579L13.029 35.4169C13.019 35.7089 13.071 35.9219 13.243 35.9639C13.363 35.9899 13.551 35.9379 13.712 35.7609C14.728 34.7509 17.978 30.8289 17.978 30.8289C22.342 31.1099 25.806 30.2559 26.181 30.1359C26.2681 30.1081 26.3933 30.079 26.5487 30.0429C27.965 29.7137 31.9008 28.7989 32.619 22.9329C33.458 16.2189 32.312 11.6509 30.088 9.7449C29.406 9.1309 26.515 7.3079 20.458 7.2919ZM19.6131 10.7629C19.6616 10.7432 19.7136 10.7334 19.766 10.7339V10.7329C22.125 10.7329 24.131 11.5299 25.714 13.0769C26.5262 13.9161 27.1593 14.9116 27.5748 16.0031C27.9903 17.0945 28.1796 18.2591 28.131 19.4259C28.1299 19.5315 28.0872 19.6323 28.0121 19.7065C27.937 19.7807 27.8356 19.8222 27.73 19.8219V19.8379C27.506 19.8379 27.329 19.6559 27.329 19.4369C27.302 16.9579 26.594 15.0619 25.141 13.6509C24.4293 12.9603 23.588 12.4174 22.6654 12.0535C21.7429 11.6897 20.7575 11.512 19.766 11.5309C19.547 11.5309 19.365 11.3539 19.365 11.1299C19.3651 11.0775 19.3756 11.0257 19.3959 10.9774C19.4161 10.929 19.4458 10.8852 19.483 10.8484C19.5203 10.8116 19.5645 10.7825 19.6131 10.7629ZM13.677 11.8119C13.9233 11.6664 14.2119 11.6095 14.495 11.6509L14.493 11.6489C14.7573 11.6991 14.9953 11.8411 15.165 12.0499C15.9411 12.9355 16.6284 13.8951 17.217 14.9149C17.602 15.5979 17.352 16.2899 16.993 16.5819L16.243 17.1859C15.858 17.4779 15.91 18.0509 15.91 18.0509C15.91 18.0509 17.02 22.2639 21.181 23.3269L21.197 23.3169C21.197 23.3169 21.755 23.3689 22.062 22.9939L22.661 22.2389C22.942 21.8639 23.635 21.6399 24.317 22.0099C25.3354 22.6026 26.2948 23.2914 27.182 24.0669C27.625 24.4369 27.729 24.9839 27.422 25.5619V25.5719C27.0949 26.1464 26.676 26.6636 26.182 27.1029C25.7764 27.4711 25.2593 27.6929 24.713 27.7329C24.541 27.7329 24.37 27.7069 24.182 27.6499V27.6399C23.541 27.4519 22.473 26.9989 20.713 26.0409C19.1731 25.1893 17.7482 24.1445 16.473 22.9319L16.431 22.8959L16.395 22.8539L16.338 22.8119L16.302 22.7599C15.0929 21.4893 14.053 20.0679 13.208 18.5309C12.552 17.4369 12.015 16.2749 11.604 15.0669L11.578 15.0509C11.505 14.8169 11.484 14.5719 11.515 14.3269C11.567 13.9159 11.765 13.4889 12.13 13.0669C12.5692 12.5706 13.0843 12.147 13.656 11.8119H13.677ZM20.463 13.6409C19.927 13.6409 19.927 12.8389 20.458 12.8389H20.515C22.25 12.9579 23.609 13.5569 24.583 14.6249C25.552 15.6929 26.046 17.0259 26.01 18.6149C26.0092 18.721 25.9667 18.8225 25.8917 18.8976C25.8166 18.9726 25.7151 19.0151 25.609 19.0159L25.593 18.9949C25.4877 18.9944 25.3867 18.9527 25.3118 18.8787C25.2368 18.8046 25.1938 18.7042 25.192 18.5989C25.2318 17.9766 25.1462 17.3526 24.9404 16.7639C24.7347 16.1753 24.4128 15.6339 23.994 15.1719C23.5349 14.6973 22.9867 14.3177 22.3808 14.055C21.775 13.7923 21.1233 13.6516 20.463 13.6409ZM21.089 15.8129C20.547 15.7969 20.568 14.9789 21.115 14.9949V14.9959H21.131C22.86 15.0889 23.834 16.0949 23.928 17.8809C23.9312 17.9343 23.9238 17.9879 23.9061 18.0384C23.8884 18.0889 23.8609 18.1354 23.825 18.1751C23.7892 18.2149 23.7458 18.2471 23.6974 18.2699C23.649 18.2927 23.5965 18.3056 23.543 18.3079H23.527C23.423 18.3074 23.3233 18.2662 23.2493 18.1931C23.1753 18.12 23.1328 18.0209 23.131 17.9169C23.047 16.5469 22.407 15.8809 21.089 15.8129Z"
									fill="#FFCA40" /></svg></a></li>
					<li><a href="#"><svg class="main-banner__telegram" width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM10.6244 18.7098L27.4576 12.1818C28.7156 11.6739 29.209 12.258 28.9197 13.5837L26.1326 26.8555C25.9202 27.9325 25.3832 28.3117 24.3963 27.7241L20.1471 24.5242L17.666 26.8851C17.3613 27.1503 16.8835 27.1478 16.6226 26.6142L16.9043 23.1586L25.8721 14.993C26.3743 14.5448 25.7906 14.4362 25.2205 14.8436L14.7791 21.3331L10.4607 19.953C9.71794 19.6226 9.94705 19.0138 10.6244 18.7098Z"
									fill="#FFCA40" /></svg></a></li>
				</ul>
			</div>
			<ul class="main-banner__advantages mobile">
				<li>Ориентация на заказчика</li>
				<li>Гарантия</li>
				<li>Разумная ценовая политика</li>
				<li>Обширный парк спецтехники</li>
			</ul>
		</div>
	</div>
	<div class="catalog">
		<div class="container">
				<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs('Аренда спецтехники'); ?>
			<h1 class="catalog__title"><?php single_cat_title();?></h1>
			<div class="catalog__top">
				<form class="catalog__search-group">
					<input name="search-query" type="search" placeholder="Поиск спецтехники" value="<?php echo $_GET['search-query'] ?>"> <button class="search-category" type="submit">Искать</button>
				</form>
				<div class="catalog__sort-wrap">
					<div class="center"><select name="sources" id="sources" class="custom-select sources"
							placeholder="Сортировать по">
							<option id="select-sort-popularity" value="orderby=popularity&order=desc">популярности</option>
							<option id="select-sort-price-asc" value="orderby=price&order=asc">возрастанию цены</option>
							<option value="orderby=price&order=desc" id="select-sort-price-desc">убыванию цены</option>
						</select></div><img alt="arrow"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.svg">
				</div><img class="catalog__filter-button" alt="filter-button"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/filter.svg">
				<div class="catalog__grid">
					<div class="catalog__list-button"><svg width="40" height="29" viewBox="0 0 40 29" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<rect x="0.5" y="0.5" width="39" height="28" rx="2.5" stroke="#CFCFCF" />
							<rect x="4" y="3" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="15" y="3" width="21" height="7" rx="2" fill="#CFCFCF" />
							<rect x="4" y="11" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="15" y="11" width="21" height="7" rx="2" fill="#CFCFCF" />
							<rect x="4" y="19" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="15" y="19" width="21" height="7" rx="2" fill="#CFCFCF" /></svg></div>
					<div class="catalog__cards-button active-grid-item"><svg width="40" height="29" viewBox="0 0 40 29"
							fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="0.5" y="0.5" width="39" height="28" rx="2.5" stroke="#CFCFCF" />
							<rect x="4" y="3" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="15" y="3" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="26" y="3" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="4" y="11" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="15" y="11" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="26" y="11" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="4" y="19" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="15" y="19" width="10" height="7" rx="2" fill="#CFCFCF" />
							<rect x="26" y="19" width="10" height="7" rx="2" fill="#CFCFCF" /></svg></div>
				</div>
			</div>
			<div class="catalog__content">
				<div class="catalog__aside">
					<nav class="catalog__navigation">
						<ul>
							<?php
		$terms = get_terms( 'category', array( 'parent' => 0 )  );
		$category = get_queried_object();
		$currCategoryID = $category -> term_id;
		foreach ( $terms as $term ) : 
			if ($term->slug != 'no-category') {
				$taxonomy = 'category';

				$children = get_terms( 
					$term->taxonomy, array(
						'parent' => $term->term_id,
						'hide_empty' => false,
						'cat' => $currCategoryID
					)
				);
			
		?>	
							<li
								class=" catalog__item">
								<?php if (isset($_GET['orderby']) && isset($_GET['order'])) { ?>
								<a id="catalog-item-<?php echo esc_html( $term->slug ); ?>"
									<?php if (esc_html( $term->slug ) != $_GET['cat'] && esc_html( get_term(get_term_by( 'slug', $_GET['cat'], 'category')->parent, 'category' ) -> slug) != esc_html( $term->slug )) /*/' . esc_html( $term->slug ) .'*/ echo 'href="/category/'. $term->slug .'/"'; ?>>
									<?php } else { ?>
									<a id="catalog-item-<?php echo esc_html( $term->slug ); ?>"
										<?php if (esc_html( $term->slug ) != $_GET['cat']  && esc_html( get_term(get_term_by( 'slug', $_GET['cat'], 'category')->parent, 'category' ) -> slug) != esc_html( $term->slug )) /*/' . esc_html( $term->slug ) .'*/ echo 'href="/category/'. $term->slug .'/"'; ?>>
										<?php } ?>
										<div class="catalog__item-wrap"><span><?php echo esc_html( $term->name ); ?></span></div>
										<?php if (!empty($children)) { ?>
										<div class="catalog__arrow">
											<svg class="arrow" width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path class="arrow" d="M1 1L6 6L1 11" stroke="#202022" /></svg>
										</div>
										<?php } ?>
									</a>
									<?php
				if (!empty($children)) {
			?>
									<ul class="catalog__subitems">
										<?php
											foreach ($children as $subcat) :  
										?>
										<li <?php if (esc_html( $subcat->slug ) == $_GET['cat']) echo 'class="active-catalog-subitem"' ?>>
											<?php if (isset($_GET['orderby']) && isset($_GET['order'])) { ?>
											<a id="catalog-item-<?php echo esc_html( $subcat->slug ); ?>"
												<?php if (esc_html( $subcat->slug ) != $_GET['cat']) /*/' . esc_html( $term->slug ) .'*/ echo 'href="/category/'. $subcat->slug .'/"'; ?>>
												<?php } else { ?>
												<a id="catalog-item-<?php echo esc_html( $subcat->slug ); ?>"
													<?php if (esc_html( $subcat->slug ) != $_GET['cat']) /*/' . esc_html( $term->slug ) .'*/ echo 'href="/category/'. $subcat->slug .'/"'; ?>>
													<?php } ?>
													<?php echo $subcat -> name ?>
												</a>
										</li>

										<?php endforeach; ?>
									</ul>

									<?php }} endforeach; ?>

						</ul>
					</nav>
				</div><?php 
					echo do_shortcode('[um-products]') 
				
				?>
			</div>
		</div>
	</div>  
	<div class="consultation-form catalog-page-consultation">
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
	<?php theme_sidebar( 'left' ); ?>
	<div class="conditions catalog-page-conditions">
		<div class="container">
			<div class="conditions__top">
				<div class="conditions__text">
					<div class="conditions__title"><?php if(is_category()) 
						the_field('opisanie_rubrik', get_queried_object()); 
					 else 
						echo 'Определение';
					?></div>
					<?php if(is_category()) 
							the_field('tekst_opisaniya', get_queried_object());
						else 
							echo '<p>В связи с широкой областью применения, востребованной становиться аренда строительной техники, техники погрузочной или горнодобывающей – любых машин, способных заменить человеческий труд, повысить качество и скорость работ.</p>
						<p>Услуги аренды спецтехники выгодны тем, что не связаны с большими денежными затратами: компании получают
							готовую технику в короткие сроки на определенный срок, по истечении которого они не будут нести затраты на
							хранение машин, их испытание и обслуживание.</p><img class="conditions__image mobile-box" alt="excavator"
							src="<?php echo get_template_directory_uri(); ?>/assets/images/klipartz.webp">
						<p>Спецтехника – транспортное средство узкоспециализированного назначения, разработанная для выполнения ряда
							строго определенных задач. Аренда машин спецтехники применяется как при строительстве, так и в сельском
							хозяйстве: это могут быть две разные модели, но обе они получили название специальной техники.</p>';
						?>
					<div class="conditions__devider"></div>
					<div class="conditions__numbers catalog-page-numbers">
						<div class="conditions__item">
							<div class="conditions__number"><span class="conditions__counter">30</span>+</div>
							<div class="conditions__item-text">Видов погрузчиков доступны для аренды</div>
						</div>
						<div class="conditions__item">
							<div class="conditions__number"><span class="conditions__counter">150</span>+</div>
							<div class="conditions__item-text">Видов погрузчиков доступны для аренды</div>
						</div>
					</div>
					<div class="conditions__text">
						<?php the_field('preimushhestva_mashiny', get_queried_object()); ?>
					</div>
				</div>
				<div class="conditions__right">
				<?php if(is_category()) 
						the_field('tekst_opisaniya_sprava', get_queried_object());
					 else 
						echo '<p>В зависимости от сферы применения спецтехника, взятая в аренду в ООО «УМ-2020» отличается по техническим характеристикам, габаритам и внешнему виду. Любая спецтехника спроектирована для конкретного рода работ, поэтому при выборе важна их классификация.</p>';
					?>
					<?php 

						$image = get_field('foto_rubriki', get_queried_object());

						if( !empty($image) ): ?>

							<img class="conditions__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>
				</div>
			</div>
				<p class="conditions__text-mobile">Ищете место, в котором можно решить практически каждый вопрос из сферы
					строительства и благоустройства с использованием соответствующих технических приспособлений? Попали по адресу!
				</p>
			<div class="conditions__bottom">
				<?php the_field('tekst_opisaniya_vnizu', get_queried_object()); ?>
			</div>
		</div>
	</div>
	<div class="varieties">
		<div class="container">
			<div class="varieties__title"><?php if(is_category()) 
						the_field('zagolovok_raznovidnosti', get_queried_object());
					 else 
						echo 'Разновидности спецтехники';
					?></div>

			<div class="varieties__text"><?php if(is_category()) 
						the_field('opisanie_raznovidnosti', get_queried_object());
					 else 
						echo 'Аренда спецтехники используется для большинства специфических работ и при любых
						условиях: под водой, в космосе, при рытье траншей или разработке карьеров и т.д. и имеет много разновидностей,
						что объясняется широкой областью её применения. Все машины можно разделить на три вида:';
					?></div>
					<?php if(is_category()) 
						echo category_description();//
					 else 
						echo 'Аренда спецтехники используется для большинства специфических работ и при любых
						условиях: под водой, в космосе, при рытье траншей или разработке карьеров и т.д. и имеет много разновидностей,
						что объясняется широкой областью её применения.';
					?>
			<div class="varieties__subtitle">
					<?php if(is_category()) 
						the_field('podzagolovok_raznovidnostej', get_queried_object());
					 else 
						echo 'Более подробная классификация спецтехники зависит от следующих показателей:';
					?></div>
			<div class="varieties__items">
				<div class="varieties__items-left">
				<?php if(is_category()) 
						the_field('spisok_raznovidnostej_levo', get_queried_object());
					 else 
						echo '<div class="varieties__item">
						<div class="varieties__item-top">
							<div class="varieties__item-number">01</div>
							<div class="varieties__item-name">Вид выполняемых задач:</div>
						</div>
						<ul class="varieties__list">
							<li><span>Воздушная.</span> Грузовые самолеты, вертолеты;</li>
							<li><span>Наземная.</span> Большая часть всех машин, передвигающихся по суше;</li>
							<li><span>Подводная.</span> Военные и исследовательские подводные лодки;</li>
							<li><span>Космическая.</span> Луноходы, спутники.</li>
						</ul>
					</div>
					<div class="varieties__item">
						<div class="varieties__item-top">
							<div class="varieties__item-number">02</div>
							<div class="varieties__item-name">Тип машин:</div>
						</div>
						<ul class="varieties__list">
							<li>Автомобильная;</li>
							<li>Железнодорожная;</li>
							<li>Водная;</li>
							<li>Воздушная.</li>
						</ul>
					</div>
					<div class="varieties__item">
						<div class="varieties__item-top">
							<div class="varieties__item-number">03</div>
							<div class="varieties__item-name">Тип двигателя:</div>
						</div>
						<ul class="varieties__list">
							<li>Дизельная;</li>
							<li>Бензиновая;</li>
							<li>Электрическая.</li>
						</ul>
					</div>
					<div class="varieties__item">
						<div class="varieties__item-top">
							<div class="varieties__item-number">04</div>
							<div class="varieties__item-name">Габариты:</div>
						</div>
						<ul class="varieties__list">
							<li><span>Малогабаритная.</span> Используется при некрупных работах или в ограниченном пространстве;</li>
							<li><span>Среднегабаритная.</span> Стандартная техника, применяющаяся в большинстве отраслей;</li>
							<li><span>Крупногабаритная.</span> Машины, способные производить большой объем работ;</li>
							<li><span>Негабаритная.</span> Их размеры не позволяют передвигаться по автодорогам. Используются в
								горнодобывающей промышленности.</li>
						</ul>
					</div>
					<div class="varieties__item">
						<div class="varieties__item-top">
							<div class="varieties__item-number">05</div>
							<div class="varieties__item-name">Способ передвижения:</div>
						</div>
						<ul class="varieties__list">
							<li>Стационарная;</li>
							<li>Колесная;</li>
							<li>Рельсовая;</li>
							<li>Гусеничная;</li>
							<li>Летательная.</li>
						</ul>
					</div>';
					?>
				</div>
			</div>
			<div class="varieties__text"><?php if(is_category()) 
						the_field('spisok_osobennostej', get_queried_object());
					 else 
						echo 'Вид арендованной спецтехники, цена и сроки проката зависят от производимых работ и их
						объема. Поэтому при прокате техники в компании ООО «УМ-2020» в Минске следует отталкиваться от этих показателей.';
					?>
			</div>
		</div>
	</div>
	<div class="feedback">
		<div class="container">
			<div class="feedback__content">
				<div class="feedback__left">
					<div class="feedback__title">Подберем спецтехнику под ваши задачи!</div>
					<div class="feedback__subtitle">Заполните форму и мы с вами свяжемся в ближайшее время</div>
					<!-- <form id="form2">
						<div id="form2-name-wrap"><input class="feedback__input" type="text" placeholder="Имя" id="form2-name"
								required></div>
						<div id="form2-phone-wrap"><input class="feedback__input" type="text" placeholder="Телефон" id="form2-phone"
								required></div><button type="submit">Заказать звонок</button>
						<div class="feedback__checkbox"><input type="checkbox" id="data-checkbox-2" checked="checked"> <label
								for="data-checkbox-2">Даю согласие на обработку персональных данных</label></div>
					</form> -->
					<?php echo do_shortcode('[contact-form-7 id="2258" title="Обратная связь"]'); ?>
				</div>
				<div class="feedback__right"><img alt="feedback-img" class="feedback__img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback-img.webp">
					<ul class="feedback__social">
						<li><a href="#"><img alt="social-img"
									src="<?php echo get_template_directory_uri(); ?>/assets/images/inst-black.svg"></a></li>
						<li><a href="#"><img alt="social-img"
									src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp-black.svg"></a></li>
						<li><a href="tg://resolve?domain=Um2020Minsk"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM10.6244 18.7098L27.4576 12.1818C28.7156 11.6739 29.209 12.258 28.9197 13.5837L26.1326 26.8555C25.9202 27.9325 25.3832 28.3117 24.3963 27.7241L20.1471 24.5242L17.666 26.8851C17.3613 27.1503 16.8835 27.1478 16.6226 26.6142L16.9043 23.1586L25.8721 14.993C26.3743 14.5448 25.7906 14.4362 25.2205 14.8436L14.7791 21.3331L10.4607 19.953C9.71794 19.6226 9.94705 19.0138 10.6244 18.7098Z"
                    fill="#202022" /></svg></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="info">
		<div class="container">
			<div class="info__left">
					<?php if(is_category()) 
						the_field('info-levo', get_queried_object());
					 else 
						echo '<div class="info__title">Характеристики</div>
						<div class="info__text">Аренда строительной техники, техники для транспортировки грузов, уборки территорий и
							другой спецтехники требует тщательного изучения её характеристик. От этого будет зависеть не только правильный
							выбор, но и успех запланированного мероприятия. При прокате машин нужно учитывать следующие характеристики:
						</div>
						<ul class="info__list">
							<li><span>Грузоподъемность.</span> Если предполагается использовать технику для транспортировки грузов или их
								перемещении на стройплощадке;</li>
							<li><span>Габариты.</span> Важный показатель в ограниченных условиях работы;</li>
							<li><span>Вес.</span> Учитывается при транспортировке машины;</li>
							<li><span>Проходимость.</span> Необходима для работ в труднодоступных условиях или на нетвердом грунте;</li>
							<li><span>Новизна.</span> Современная техника оснащена новым оборудованием; это влияет на продуктивность
								работ;</li>
							<li><span>Коэффициент полезного действия.</span> Определяется исходя из объемов работ, которые производит
								техника за определенный промежуток времени;</li>
							<li><span>Наличие дополнительного оборудование.</span> Удобно при выполнении разноплановых задач.</li>
						</ul>
						<div class="info__text">Тем не менее для всех случаев аренды спецтехники в ООО «УМ-2020» действует одно
							стандартное правило: чем масштабнее работы, тем больше и габариты техники. Экономия в данном вопросе может
							привести к потере времени, трате лишних сил и в итоге к дополнительным денежным затратам.</div>';
					?>
			</div>
			<div class="info__right">
					<?php if(is_category()) 
						the_field('info-pravo', get_queried_object());
					 else 
						echo '<div class="info__title">Область применения</div>
						<div class="info__text">Аренда машин спецтехники применяется для облегчения и ускорения выполняемых задач,
							повышения их качества, а, следовательно, и производительность работы в следующих сферах:</div>
						<ul class="info__list">
							<li><span>Дорожная.</span> Строительство дорог, удаление старого дорожного полотна;</li>
							<li><span>Строительная.</span> Возведение и демонтаж объектов, рытье котлована;</li>
							<li><span>Коммунальная.</span> Уборка мусора, мытье дорог;</li>
							<li><span>Транспортная.</span> Перемещение грузов;</li>
							<li><span>Грузовая.</span> Подъем, погрузка материалов;</li>
							<li><span>Сельскохозяйственная.</span> Сбор урожая, мелиорационные мероприятия;</li>
							<li><span>Портовая.</span> Транспортировка грузов, работы на воде;</li>
							<li><span>Сферы специального назначения.</span> К ним относятся медицинская, пожарная, спасательная службы,
								МВД и т.д.</li>
						</ul>
						<div class="info__text">При этом одна единица спецтехники, арендованная в ООО «УМ-2020», может использоваться в
							различных областях в зависимости от её возможностей и наличия дополнительного оборудования.</div>';
					?>
			</div>
		</div>
	</div>
	<div class="advantages rent-advantages">
		<div class="container">
			<div class="advantages__title">Выгода аренды</div>
			<div class="advantages__text">Не каждая компания может позволить собственный автопарк: данное мероприятия связано
				с большими денежными и временными затратами, что невыгодно в условиях строгих графиков работ. Поэтому аренда и
				перевозка спецтехники является выгодным решение в данной ситуации.</div>
			<div class="advantages__subtitle">Прокат техники имеет следующие преимущества:</div>
			<div class="advantages__items"><a class="advantages__item" href="/">
					<div class="advantages__item-title">Экономия</div>
					<div class="advantages__item-text">Отсутствие затрат на приобретение, ремонт, обслуживание, хранение и
						испытание техники;</div><img class="advantages__img_2" alt="advantages-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages2.webp">
				</a><a class="advantages__item" href="/">
					<div class="advantages__item-title">Скорость</div>
					<div class="advantages__item-text">Быстрое оформление договора;</div><img class="advantages__img_4"
						alt="advantages-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages4.webp">
				</a><a class="advantages__item" href="/">
					<div class="advantages__item-title">Консультирование</div>
					<div class="advantages__item-text">Помощь в выборе машины;</div><img class="advantages__img_1"
						alt="advantages-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages1.webp">
				</a><a class="advantages__item" href="/">
					<div class="advantages__item-title">Гарантия, что техника не выйдет из строя</div>
					<div class="advantages__item-text">Использование исправной, готовой к работе технике без дополнительной
						подготовки.</div><img class="advantages__img_5" alt="advantages-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages5.webp">
				</a>
				<div class="advantages__text-item">
				<?php if(is_category()) 
						the_field('opisanie_preimushhestv', get_queried_object());
					 else 
						echo '<p>Аренда строительной техники экономит время фирмы-заказчика и позволяет производить более качественные
						работы, а также расширять масштабы строительства путем проката дополнительных машин. Сотрудники компании
						подберут спецтехнику исходя их заданных характеристик работ – этот шаг облегчит процесс выбора и аренды.
						Отдельно можно воспользоваться и услугами оператора спецтехники или аренды дополнительного оборудования.</p>
					<p>При аренде спецтехники юридическим лицом или для частного пользования не следует брать её впритык: запас
						прочности важен не только для сохранности машины, но и для безопасности персонала. Помимо этого выгоднее
						прокат техники на долгий период – это позволит снизить стоимость одного рабочего часа машины – поэтому при
						выборе срока проката заранее следует продумывать масштаб мероприятия.</p>
					<p>Для осуществления аренды спецтехники собственного автопарка компании ООО «УМ-2020» в Минске можно позвонить
						по номеру телефона для заключения договора или оставить заявку на официальном сайте.</p>';
					?>
					<a href="#ex1" rel="modal:open" class="advantages__button">Заказать звонок</a>
				</div>
			</div>
		</div>
	</div>
	<div class="posts"><?php include('template-parts/posts-slider.php'); ?></div>
	<div class="reviews"><?php include('template-parts/reviews-slider.php'); ?></div>
</main>

<?php
get_sidebar();
get_footer();