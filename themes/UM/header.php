<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title(); ?></title>
	<?php wp_head() ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PSPXMHF');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSPXMHF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header>
		<div class="header__top">
			<div class="container">
				<ul>
					<li><a href="mailto:info@um2020.by">info@um2020.by</a></li>
					<li><a href="tel:+375291765010">+375 (29) 176-50-10</a></li>
					<li class="header__search-wrap">
						<!-- <input class="header__search" placeholder="Поиск"> -->
						<?php get_search_form(); ?>
						<!-- <a href="" class="header__search-button">
							<img alt="loop" src="<?php echo get_template_directory_uri(); ?>/assets/images/loop.svg">
						</a> -->
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="header__main"><a class="header__logo-wrap" href="/"><img class="header__logo"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo"></a>
				<nav class="header__menu">
					<?php wp_nav_menu([
						'theme_location' => 'um-header',
						'container' => false, 
						'walker' => new CSS_Menu_Walker()
					]) ?>
				</nav>
				<a href="#ex1" rel="modal:open" class="header__call-button">Заказать звонок</a>
				<div class="header__burger" id="burger-button"></div>
			</div>
		</div>
	</header>
	<div id="modal-menu-arenda" class="modal-menu">
		<div class="container">
			<div class="modal-menu__close"><img alt="cross"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-grey.svg"></div>
			<div class="modal-menu__title">Аренда спецтехники</div>
			<div class="modal-menu__list">
				<?php
						$categories = get_categories( [
							'taxonomy'     => 'category',
							'type'         => 'post',
							'child_of'     => 0,
							'parent'       => 0,
							'suppress_filters' => true,
							'orderby'      => 'date',
							'order'        => 'ASC',
							'hide_empty'   => 0,
							'hierarchical' => 1,
							'exclude'      => '',
							'include'      => '',
							'number'       => 0,
							'pad_counts'   => false,
						] );
		
					$counter = 0;
					

					if( $categories ){
						foreach( $categories as $cat ){
							if ($counter == 0) {
								echo '<ul class="modal-menu__col">';
							}
							$children = get_categories( [
								'taxonomy'     => 'category',
								'parent'       => $cat->term_id,
								'hide_empty'   => 0,
								'orderby'     => 'date',
								'order'       => 'ASC',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => 'page',
								'suppress_filters' => true, 
							] );
							$counter++;
							$counter++;
							if ($cat->name !== 'Без рубрики') {
								echo '<li><a class="modal-menu__item new" href="/category/'. $cat->slug .'/">'.$cat->name.'</a></li>';
							}
							if ($children) {
								echo '<ul>';
								foreach( $children as $child ){
									$counter++;
									
									echo '<li><a class="modal-menu__subitem" href="/category/'. $child -> slug .'/">'. $child->name .'</a></li>';
								}
								echo '</ul>';
							}
							/*echo $counter;*/
							if ($counter > 14) {
								//echo $counter;
								$counter = 0;
								echo '</ul>';
							}
						}
					}
				?>
			</div>
			<?php wp_nav_menu([
				'theme_location' => 'um-header',
				'container' => false, 
				'walker' => new CSS_Menu_Walker_mobile(),
				'menu_class' => 'mobile-menu__list'
			]) ?>
			<div class="mobile-menu__sublist mobile-box">
				<div class="modal-menu__sublist-title"><svg  class="header-arrow" width="9" height="14" viewBox="0 0 9 14" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path class="header-arrow" d="M8 1L2 7L8 13" stroke="#EAA515" stroke-width="1.5" /></svg> <span class="header-span">Аренда спецтехники</span></div>
				<div class="modal-menu__sublist-items">
				<ul class="modal-menu__sublist-left">
						<li><a href="/category/excavators/"
								class="menu-toggle-button"><span>Экскаваторы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/wheel-excavator/">Колесный
										экскаватор</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/crawler-excavator/">Гусеничный экскаватор</a>
								</li>
								<li><a class="modal-menu__subitem"
										href="/category/excavator-loader/">Экскаватор-погрузчик</a>
								</li>
								<li><a class="modal-menu__subitem"
										href="/arenda-jekskavatora-planirovshhika/excavator-planner">Экскаватор-планировщик</a>
								</li>
								<li><a class="modal-menu__subitem" href="/arenda-cepnogo-jekskavatora/">Цепной экскаватор</a></li>
							</ul>
						</li>
						<li><a href="/category/loaders/" class="menu-toggle-button"><span>Погрузчики</span>
								<svg width="10" height="5" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/front-loader/">Фронтальный погрузчик</a></li>
								<li><a class="modal-menu__subitem" href="/category/telescopic-loader/">Телескопический
										погрузчик</a></li>
							</ul>
						</li>
						<li><a href="/category/dump-trucks/"
								class="menu-toggle-button"><span>Самосвалы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/arenda-samosvala-3-tonny/?dump-trucks">Самосвал
										3 тонны</a><a class="modal-menu__subitem"
										href="/category/arenda-samosvala-5-tonn/?dump-trucks">Самосвал 5 тонн</a><a
										class="modal-menu__subitem" href="/category/arenda-samosvala-10-tonn/?dump-trucks">Самосвал 10
										тонн</a><a class="modal-menu__subitem" href="/category/arenda-samosvala-30-tonn/">Самосвал 30 тонн</a></li>
							</ul>
						</li>
						<li><a href="/category/bulldozers/" class="modal-menu__subitem">Бульдозеры</a></li>
						<li><a href="/category/arenda-avtogrejdera/" class="modal-menu__subitem">Автогрейдер</a></li>
						<li><a href="#" class="modal-menu__subitem">Гидроманипуляторы</a></li>
						<li><a href="/category/single-drum-rollers/" class="modal-menu__subitem">Грунтовой каток</a></li>
						<li><a href="/category/truck-cranes/"
								class="menu-toggle-button"><span>Автокраны</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokranov-10-tonn/">Автокран 10 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-32-tonny/">Автокран 32 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-40-tonn/">Автокран 40 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-50-tonn/">Автокран 50 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-55-tonn/">Автокран 55 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-60-tonn/">Автокран 60 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-70-tonn/">Автокран 70 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-90-tonn/">Автокран 90 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-100-tonn/">Автокран 100 т</a></li>
							</ul>
						</li>
					</ul>
					<ul class="modal-menu__sublist-right">
						<li><a href="/category/arenda-gidromolota/hydraulic-hammers"
								class="menu-toggle-button"><span>Гидромолоты</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/arenda-gidromolota-na-baze-jekskavatora/?excavator-based-hydraulic-hammer">Гидромолот
										на базе экскаватора</a></li>
								<li><a class="modal-menu__subitem"
										href="/arenda-gidromolota-na-baze-jekskavatora/?loader-based-hydraulic-hammer">Гидромолот
										на базе погрузчика</a></li>
								<li><a class="modal-menu__subitem" href="/">Ручной гидромолот</a></li>
							</ul>
						</li>
						<li><a href="/category/trawls-and-low-loaders/">Тралы и
								низкорамные площадки</a></li>
						<li><a href="/arenda-burovoj-tehniki/?drilling-technics"
								class="menu-toggle-button"><span>Буровая техника</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/">Ямобур</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-benzobura/">Бензобур</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-ruchnogo-bura/">Ручной бур</a></li>
							</ul>
						</li>
						<li><a href="/category/arenda-avtobetononasosa/"
								class="menu-toggle-button"><span>Автобетононасосы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-21-m/?concrete-pump-21-m">Автобетононасос 21 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-37-m/?concrete-pump-37-m">Автобетононасос 37 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-42-m/?concrete-pump-42-m">Автобетононасос 42 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-52-m/?concrete-pump-52-m">Автобетононасос 52 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-60-m/?concrete-pump-60-m">Автобетононасос 60 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-2-v-1/?сoncrete-pump-2-in-1">Автобетононасос 2 в 1</a>
								</li>
							</ul>
						</li>
						<li><a href="/category/mini-technics" class="menu-toggle-button"><span>Мини-техника</span> <svg width="10" height="5"
									viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/mini-loader/">Мини-погрузчик</a></li>
								<li><a class="modal-menu__subitem" href="/category/mini-excavator/">Мини-экскаватор</a></li>
							</ul>
						</li>
						<li><a href="/category/arenda-avtovyshki/aerial-platforms"
								class="menu-toggle-button"><span>Автовышки</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle"></ul>
						</li>
						<li><a href="/services" class="menu-toggle-button"><span>Услуги спецтехники</span> <svg width="10"
									height="5" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/zemljanye-raboty/">Земляные работы</a></li>
								<li><a class="modal-menu__subitem" href="/remont-zdanij-i-sooruzhenij/">Ремонт зданий и сооружений</a>
								</li>
								<li><a class="modal-menu__subitem" href="/krovelnye-raboty/">Кровельные работы</a></li>
								<li><a class="modal-menu__subitem" href="/otdelochnye-raboty/">Отделочные работы</a></li>
								<li><a class="modal-menu__subitem" href="/stroitelnye-uslugi/">Строительные услуги</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-po-zalivke-fundamenta/">Услуги по заливке
										фундамента</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-po-vozvedeniju-osnovanij/">Услуги по возведению
										оснований</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-montazhnyh-rabot/">Услуги монтажных работ</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<a href="#ex1" rel="modal:open" class="header__call-button_mob">Заказать звонок</a>
			<div class="main-banner__social mobile-box">
				<ul>
					<li><a href="#"><svg class="main-banner__inst" width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM11 13C11 11.9 11.9 11 13 11H27C28.1 11 29 11.9 29 13V27C29 28.101 28.1 29 27 29H13C11.9 29 11 28.101 11 27V13ZM23.9 23.9003C22.8615 24.939 21.4529 25.5227 19.984 25.523C18.515 25.5227 17.1063 24.9391 16.0676 23.9004C15.0289 22.8617 14.4453 21.453 14.445 19.984C14.445 19.646 14.488 19.32 14.549 19H13V26.216C13 26.3069 13.0179 26.3968 13.0528 26.4807C13.0877 26.5647 13.1388 26.6409 13.2032 26.705C13.2675 26.7691 13.344 26.8198 13.428 26.8543C13.5121 26.8888 13.6021 26.9064 13.693 26.906H26.307C26.3979 26.9064 26.4879 26.8888 26.572 26.8543C26.656 26.8198 26.7325 26.7691 26.7968 26.705C26.8612 26.6409 26.9123 26.5647 26.9472 26.4807C26.9821 26.3968 27 26.3069 27 26.216V19H25.419C25.479 19.32 25.522 19.646 25.522 19.984C25.522 21.4529 24.9386 22.8616 23.9 23.9003ZM16.7865 18.6595C16.6125 19.0794 16.523 19.5295 16.523 19.984C16.523 20.9019 16.8876 21.7822 17.5367 22.4313C18.1858 23.0804 19.0661 23.445 19.984 23.445C20.9019 23.445 21.7822 23.0804 22.4313 22.4313C23.0804 21.7822 23.445 20.9019 23.445 19.984C23.445 19.5295 23.3555 19.0794 23.1815 18.6595C23.0076 18.2396 22.7527 17.8581 22.4313 17.5367C22.1099 17.2153 21.7284 16.9604 21.3085 16.7865C20.8886 16.6125 20.4385 16.523 19.984 16.523C19.5295 16.523 19.0794 16.6125 18.6595 16.7865C18.2396 16.9604 17.8581 17.2153 17.5367 17.5367C17.2153 17.8581 16.9604 18.2396 16.7865 18.6595ZM24.692 16H26.307C26.69 16 27 15.688 27 15.307V13.691C27 13.309 26.69 13 26.306 13H24.691C24.31 13 24 13.309 24 13.691V15.308C24.0005 15.4914 24.0736 15.6671 24.2033 15.7967C24.3329 15.9264 24.5086 15.9995 24.692 16Z"
									fill="#FFCA40" /></svg></a></li>
					<li><a href="viber://chat?number=%2B375(29)1765010"><svg class="main-banner__whatsapp" width="40" height="40"
								viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM8.021 8.2909C11.109 5.4579 16.63 5.0359 19.198 5.0049V5.0039C20.052 4.9889 20.583 5.0249 20.583 5.0249C27.739 5.0509 30.942 7.3849 31.739 8.1189H31.755C34.396 10.4109 35.859 15.4779 34.875 23.5199C34.0005 30.6209 29.043 31.8701 27.3861 32.2877C27.2261 32.328 27.0968 32.3606 27.005 32.3899C26.552 32.5359 22.619 33.5199 17.484 33.0929L15.619 35.2019C15.4477 35.3848 15.2882 35.5656 15.1361 35.7379C14.4005 36.5715 13.8398 37.2069 12.968 36.9309C12.114 36.6659 12.161 35.3739 12.161 35.3739V32.1449C4.656 30.0249 4.75 22.2389 4.828 18.0929C4.922 13.9319 5.724 10.5669 8.021 8.2909ZM20.458 7.2919C20.458 7.2919 20.015 7.2609 19.286 7.2659H19.284C17.102 7.2819 12.414 7.5999 9.805 9.9589C7.867 11.8809 7.216 14.7189 7.138 18.1879C7.13565 18.3077 7.13293 18.4314 7.13014 18.5584C7.05213 22.1099 6.91487 28.3587 13.06 30.0579L13.029 35.4169C13.019 35.7089 13.071 35.9219 13.243 35.9639C13.363 35.9899 13.551 35.9379 13.712 35.7609C14.728 34.7509 17.978 30.8289 17.978 30.8289C22.342 31.1099 25.806 30.2559 26.181 30.1359C26.2681 30.1081 26.3933 30.079 26.5487 30.0429C27.965 29.7137 31.9008 28.7989 32.619 22.9329C33.458 16.2189 32.312 11.6509 30.088 9.7449C29.406 9.1309 26.515 7.3079 20.458 7.2919ZM19.6131 10.7629C19.6616 10.7432 19.7136 10.7334 19.766 10.7339V10.7329C22.125 10.7329 24.131 11.5299 25.714 13.0769C26.5262 13.9161 27.1593 14.9116 27.5748 16.0031C27.9903 17.0945 28.1796 18.2591 28.131 19.4259C28.1299 19.5315 28.0872 19.6323 28.0121 19.7065C27.937 19.7807 27.8356 19.8222 27.73 19.8219V19.8379C27.506 19.8379 27.329 19.6559 27.329 19.4369C27.302 16.9579 26.594 15.0619 25.141 13.6509C24.4293 12.9603 23.588 12.4174 22.6654 12.0535C21.7429 11.6897 20.7575 11.512 19.766 11.5309C19.547 11.5309 19.365 11.3539 19.365 11.1299C19.3651 11.0775 19.3756 11.0257 19.3959 10.9774C19.4161 10.929 19.4458 10.8852 19.483 10.8484C19.5203 10.8116 19.5645 10.7825 19.6131 10.7629ZM13.677 11.8119C13.9233 11.6664 14.2119 11.6095 14.495 11.6509L14.493 11.6489C14.7573 11.6991 14.9953 11.8411 15.165 12.0499C15.9411 12.9355 16.6284 13.8951 17.217 14.9149C17.602 15.5979 17.352 16.2899 16.993 16.5819L16.243 17.1859C15.858 17.4779 15.91 18.0509 15.91 18.0509C15.91 18.0509 17.02 22.2639 21.181 23.3269L21.197 23.3169C21.197 23.3169 21.755 23.3689 22.062 22.9939L22.661 22.2389C22.942 21.8639 23.635 21.6399 24.317 22.0099C25.3354 22.6026 26.2948 23.2914 27.182 24.0669C27.625 24.4369 27.729 24.9839 27.422 25.5619V25.5719C27.0949 26.1464 26.676 26.6636 26.182 27.1029C25.7764 27.4711 25.2593 27.6929 24.713 27.7329C24.541 27.7329 24.37 27.7069 24.182 27.6499V27.6399C23.541 27.4519 22.473 26.9989 20.713 26.0409C19.1731 25.1893 17.7482 24.1445 16.473 22.9319L16.431 22.8959L16.395 22.8539L16.338 22.8119L16.302 22.7599C15.0929 21.4893 14.053 20.0679 13.208 18.5309C12.552 17.4369 12.015 16.2749 11.604 15.0669L11.578 15.0509C11.505 14.8169 11.484 14.5719 11.515 14.3269C11.567 13.9159 11.765 13.4889 12.13 13.0669C12.5692 12.5706 13.0843 12.147 13.656 11.8119H13.677ZM20.463 13.6409C19.927 13.6409 19.927 12.8389 20.458 12.8389H20.515C22.25 12.9579 23.609 13.5569 24.583 14.6249C25.552 15.6929 26.046 17.0259 26.01 18.6149C26.0092 18.721 25.9667 18.8225 25.8917 18.8976C25.8166 18.9726 25.7151 19.0151 25.609 19.0159L25.593 18.9949C25.4877 18.9944 25.3867 18.9527 25.3118 18.8787C25.2368 18.8046 25.1938 18.7042 25.192 18.5989C25.2318 17.9766 25.1462 17.3526 24.9404 16.7639C24.7347 16.1753 24.4128 15.6339 23.994 15.1719C23.5349 14.6973 22.9867 14.3177 22.3808 14.055C21.775 13.7923 21.1233 13.6516 20.463 13.6409ZM21.089 15.8129C20.547 15.7969 20.568 14.9789 21.115 14.9949V14.9959H21.131C22.86 15.0889 23.834 16.0949 23.928 17.8809C23.9312 17.9343 23.9238 17.9879 23.9061 18.0384C23.8884 18.0889 23.8609 18.1354 23.825 18.1751C23.7892 18.2149 23.7458 18.2471 23.6974 18.2699C23.649 18.2927 23.5965 18.3056 23.543 18.3079H23.527C23.423 18.3074 23.3233 18.2662 23.2493 18.1931C23.1753 18.12 23.1328 18.0209 23.131 17.9169C23.047 16.5469 22.407 15.8809 21.089 15.8129Z"
									fill="#FFCA40" /></svg></a></li>
					<li><a href="tg://resolve?domain=Um2020Minsk"><svg class="main-banner__telegram" width="40" height="40"
								viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM10.6244 18.7098L27.4576 12.1818C28.7156 11.6739 29.209 12.258 28.9197 13.5837L26.1326 26.8555C25.9202 27.9325 25.3832 28.3117 24.3963 27.7241L20.1471 24.5242L17.666 26.8851C17.3613 27.1503 16.8835 27.1478 16.6226 26.6142L16.9043 23.1586L25.8721 14.993C26.3743 14.5448 25.7906 14.4362 25.2205 14.8436L14.7791 21.3331L10.4607 19.953C9.71794 19.6226 9.94705 19.0138 10.6244 18.7098Z"
									fill="#FFCA40" /></svg></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="modal-menu-services" class="modal-menu">
		<div class="container">
			<div class="modal-menu__close"><img alt="cross"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-grey.svg"></div>
			<div class="modal-menu__title">Услуги</div>
			<div class="modal-menu__list">
				<?php
					/*
					$categories = get_categories( [
						'taxonomy'     => 'service_category',
						'type'         => 'post',
						'child_of'     => 0,
						'parent'       => 0,
						'suppress_filters' => true,
						'orderby'      => 'date',
						'order'        => 'ASC',
						'hide_empty'   => 0,
						'hierarchical' => 1,
						'exclude'      => '',
						'include'      => '',
						'number'       => 0,
						'pad_counts'   => false,
					] );
					
					$counter = 0;

					if( $categories ){
						foreach( $categories as $cat ){
							if ($counter == 0) {
								echo '<ul class="modal-menu__col">';
							}
							$children = get_posts( [
								'orderby'     => 'date',
								'order'       => 'ASC',
								'post_type'   => 'service',
								'tax_query' => array(
									array(
										'taxonomy' => 'service_category',
										'field'    => 'slug',
										'terms' => $cat->slug
									)
								),
							] );
							$counter++;
							$counter++;
							if ($cat->sname !== 'Без рубрики') {
								echo '<li><a class="modal-menu__item" href="/'. $cat->slug .'/">'.$cat->name.'</a></li>';
							}
							if ($children) {
								echo '<ul>';
								foreach( $children as $child ){
									$counter++;
									print_r($child);
									echo '<li><a class="modal-menu__subitem" href="'. $child -> guid .'">'. $child->post_title .'</a></li>';
								}
								echo '</ul>';
							}
							if ($counter > 14) {
								//echo $counter;
								$counter = 0;
								echo '</ul>';
							}
						}
					} */
					
					$categories = get_categories( [
						'taxonomy'     => 'service_category',
						'type'         => 'post',
						'child_of'     => 0,
						'parent'       => 0,
						'suppress_filters' => true,
						'orderby'      => 'date',
						'order'        => 'ASC',
						'hide_empty'   => 0,
						'hierarchical' => 1,
						'exclude'      => '',
						'include'      => '',
						'number'       => 0,
						'pad_counts'   => false,
					] );
					
					$counter = 0;

					if( $categories ){
						foreach( $categories as $cat ){
							if ($counter == 0) {
								echo '<ul class="modal-menu__col">';
							}
							
							if ($cat->name !== 'Без рубрики') {
								echo '<li><a class="modal-menu__item" href="/'. $cat->slug .'/">'.$cat->name.'</a></li>';
							}
							
							$counter++;
							$counter++;
					
					$args = array(
						'post_type' => 'service',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'service_category',
								'field'    => 'slug',
								'terms' => $cat->slug
							)
						),
					);
					$query = new WP_Query($args);
							
							if ($query) {
								echo '<ul>';
					if ($query->have_posts()) {
						while ($query->have_posts()) { $query->the_post(); 
							$counter++;
							?>
				<li><a class="modal-menu__subitem serv" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
							}
					}
								
								
								
					echo '</ul>';
							}
							if ($counter > 30) {
								$counter = 0;
								echo '</ul>';
							}
						}
					}
							
					wp_reset_postdata();
				?>
			</div>
			<?php wp_nav_menu([
				'theme_location' => 'um-header',
				'container' => false, 
				'walker' => new CSS_Menu_Walker_mobile(),
				'menu_class' => 'mobile-menu__list'
			]) ?>
			<div class="mobile-menu__sublist mobile-box">
				<div class="modal-menu__sublist-title"><svg class="header-arrow" width="9" height="14" viewBox="0 0 9 14" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path class="header-arrow" d="M8 1L2 7L8 13" stroke="#EAA515" stroke-width="1.5" /></svg> <span class="header-span">Аренда спецтехники</span></div>
				<div class="modal-menu__sublist-items">
				<ul class="modal-menu__sublist-left">
						<li><a href="/category/excavators/"
								class="menu-toggle-button"><span>Экскаваторы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/wheel-excavator/">Колесный
										экскаватор</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/crawler-excavator/">Гусеничный экскаватор</a>
								</li>
								<li><a class="modal-menu__subitem"
										href="/category/excavator-loader/">Экскаватор-погрузчик</a>
								</li>
								<li><a class="modal-menu__subitem"
										href="/arenda-jekskavatora-planirovshhika/excavator-planner">Экскаватор-планировщик</a>
								</li>
								<li><a class="modal-menu__subitem" href="/arenda-cepnogo-jekskavatora/">Цепной экскаватор</a></li>
							</ul>
						</li>
						<li><a href="/category/loaders/" class="menu-toggle-button"><span>Погрузчики</span>
								<svg width="10" height="5" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/front-loader/">Фронтальный погрузчик</a></li>
								<li><a class="modal-menu__subitem" href="/category/telescopic-loader/">Телескопический
										погрузчик</a></li>
							</ul>
						</li>
						<li><a href="/category/dump-trucks/"
								class="menu-toggle-button"><span>Самосвалы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/arenda-samosvala-3-tonny/?dump-trucks">Самосвал
										3 тонны</a><a class="modal-menu__subitem"
										href="/category/arenda-samosvala-5-tonn/?dump-trucks">Самосвал 5 тонн</a><a
										class="modal-menu__subitem" href="/category/arenda-samosvala-10-tonn/?dump-trucks">Самосвал 10
										тонн</a><a class="modal-menu__subitem" href="/category/arenda-samosvala-30-tonn/">Самосвал 30 тонн</a></li>
							</ul>
						</li>
						<li><a href="/category/bulldozers/" class="modal-menu__subitem">Бульдозеры</a></li>
						<li><a href="/category/arenda-avtogrejdera/" class="modal-menu__subitem">Автогрейдер</a></li>
						<li><a href="#" class="modal-menu__subitem">Гидроманипуляторы</a></li>
						<li><a href="/category/single-drum-rollers/" class="modal-menu__subitem">Грунтовой каток</a></li>
						<li><a href="/category/truck-cranes/"
								class="menu-toggle-button"><span>Автокраны</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokranov-10-tonn/">Автокран 10 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-32-tonny/">Автокран 32 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-40-tonn/">Автокран 40 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-50-tonn/">Автокран 50 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-55-tonn/">Автокран 55 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-60-tonn/">Автокран 60 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-70-tonn/">Автокран 70 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-90-tonn/">Автокран 90 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-100-tonn/">Автокран 100 т</a></li>
							</ul>
						</li>
					</ul>
					<ul class="modal-menu__sublist-right">
						<li><a href="/category/arenda-gidromolota/hydraulic-hammers"
								class="menu-toggle-button"><span>Гидромолоты</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/arenda-gidromolota-na-baze-jekskavatora/?excavator-based-hydraulic-hammer">Гидромолот
										на базе экскаватора</a></li>
								<li><a class="modal-menu__subitem"
										href="/arenda-gidromolota-na-baze-jekskavatora/?loader-based-hydraulic-hammer">Гидромолот
										на базе погрузчика</a></li>
								<li><a class="modal-menu__subitem" href="/">Ручной гидромолот</a></li>
							</ul>
						</li>
						<li><a href="/category/trawls-and-low-loaders/">Тралы и
								низкорамные площадки</a></li>
						<li><a href="/arenda-burovoj-tehniki/?drilling-technics"
								class="menu-toggle-button"><span>Буровая техника</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/">Ямобур</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-benzobura/">Бензобур</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-ruchnogo-bura/">Ручной бур</a></li>
							</ul>
						</li>
						<li><a href="/category/arenda-avtobetononasosa/"
								class="menu-toggle-button"><span>Автобетононасосы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-21-m/?concrete-pump-21-m">Автобетононасос 21 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-37-m/?concrete-pump-37-m">Автобетононасос 37 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-42-m/?concrete-pump-42-m">Автобетононасос 42 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-52-m/?concrete-pump-52-m">Автобетононасос 52 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-60-m/?concrete-pump-60-m">Автобетононасос 60 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-2-v-1/?сoncrete-pump-2-in-1">Автобетононасос 2 в 1</a>
								</li>
							</ul>
						</li>
						<li><a href="/category/mini-technics" class="menu-toggle-button"><span>Мини-техника</span> <svg width="10" height="5"
									viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/mini-loader/">Мини-погрузчик</a></li>
								<li><a class="modal-menu__subitem" href="/category/mini-excavator/">Мини-экскаватор</a></li>
							</ul>
						</li>
						<li><a href="/category/arenda-avtovyshki/aerial-platforms"
								class="menu-toggle-button"><span>Автовышки</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle"></ul>
						</li>
						<li><a href="/services" class="menu-toggle-button"><span>Услуги спецтехники</span> <svg width="10"
									height="5" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/zemljanye-raboty/">Земляные работы</a></li>
								<li><a class="modal-menu__subitem" href="/remont-zdanij-i-sooruzhenij/">Ремонт зданий и сооружений</a>
								</li>
								<li><a class="modal-menu__subitem" href="/krovelnye-raboty/">Кровельные работы</a></li>
								<li><a class="modal-menu__subitem" href="/otdelochnye-raboty/">Отделочные работы</a></li>
								<li><a class="modal-menu__subitem" href="/stroitelnye-uslugi/">Строительные услуги</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-po-zalivke-fundamenta/">Услуги по заливке
										фундамента</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-po-vozvedeniju-osnovanij/">Услуги по возведению
										оснований</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-montazhnyh-rabot/">Услуги монтажных работ</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<a href="#ex1" rel="modal:open" class="header__call-button_mob">Заказать звонок</a>
			<div class="main-banner__social mobile-box">
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
		</div>
	</div>

	<div id="modal-menu-about" class="modal-menu">
		<div class="container">
			<div class="modal-menu__close"><img alt="cross"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-grey.svg"></div>
			<div class="modal-menu__title">О нас</div>
			<div class="modal-menu__list">
				<li><a class="modal-menu__item" href="/o-nas/infocenter/">Инфоцентр</a></li>
				<li><a class="modal-menu__subitem" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
			</div>
			<?php wp_nav_menu([
				'theme_location' => 'um-header',
				'container' => false, 
				'walker' => new CSS_Menu_Walker_mobile(),
				'menu_class' => 'mobile-menu__list'
			]) ?>
			<div class="mobile-menu__sublist mobile-box">
				<div class="modal-menu__sublist-title"><svg class="header-arrow" width="9" height="14" viewBox="0 0 9 14" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path class="header-arrow" d="M8 1L2 7L8 13" stroke="#EAA515" stroke-width="1.5" /></svg> <span class="header-span">Аренда спецтехники</span></div>
				<div class="modal-menu__sublist-items">
				<ul class="modal-menu__sublist-left">
						<li><a href="/category/excavators/"
								class="menu-toggle-button"><span>Экскаваторы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/wheel-excavator/">Колесный
										экскаватор</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/crawler-excavator/">Гусеничный экскаватор</a>
								</li>
								<li><a class="modal-menu__subitem"
										href="/category/excavator-loader/">Экскаватор-погрузчик</a>
								</li>
								<li><a class="modal-menu__subitem"
										href="/arenda-jekskavatora-planirovshhika/excavator-planner">Экскаватор-планировщик</a>
								</li>
								<li><a class="modal-menu__subitem" href="/arenda-cepnogo-jekskavatora/">Цепной экскаватор</a></li>
							</ul>
						</li>
						<li><a href="/category/loaders/" class="menu-toggle-button"><span>Погрузчики</span>
								<svg width="10" height="5" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/front-loader/">Фронтальный погрузчик</a></li>
								<li><a class="modal-menu__subitem" href="/category/telescopic-loader/">Телескопический
										погрузчик</a></li>
							</ul>
						</li>
						<li><a href="/category/dump-trucks/"
								class="menu-toggle-button"><span>Самосвалы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/arenda-samosvala-3-tonny/?dump-trucks">Самосвал
										3 тонны</a><a class="modal-menu__subitem"
										href="/category/arenda-samosvala-5-tonn/?dump-trucks">Самосвал 5 тонн</a><a
										class="modal-menu__subitem" href="/category/arenda-samosvala-10-tonn/?dump-trucks">Самосвал 10
										тонн</a><a class="modal-menu__subitem" href="/category/arenda-samosvala-30-tonn/">Самосвал 30 тонн</a></li>
							</ul>
						</li>
						<li><a href="/category/bulldozers/" class="modal-menu__subitem">Бульдозеры</a></li>
						<li><a href="/category/arenda-avtogrejdera/" class="modal-menu__subitem">Автогрейдер</a></li>
						<li><a href="#" class="modal-menu__subitem">Гидроманипуляторы</a></li>
						<li><a href="/category/single-drum-rollers/" class="modal-menu__subitem">Грунтовой каток</a></li>
						<li><a href="/category/truck-cranes/"
								class="menu-toggle-button"><span>Автокраны</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokranov-10-tonn/">Автокран 10 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-32-tonny/">Автокран 32 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-40-tonn/">Автокран 40 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-50-tonn/">Автокран 50 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-55-tonn/">Автокран 55 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-60-tonn/">Автокран 60 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-70-tonn/">Автокран 70 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-90-tonn/">Автокран 90 т</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-avtokrana-100-tonn/">Автокран 100 т</a></li>
							</ul>
						</li>
					</ul>
					<ul class="modal-menu__sublist-right">
						<li><a href="/category/arenda-gidromolota/hydraulic-hammers"
								class="menu-toggle-button"><span>Гидромолоты</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/arenda-gidromolota-na-baze-jekskavatora/?excavator-based-hydraulic-hammer">Гидромолот
										на базе экскаватора</a></li>
								<li><a class="modal-menu__subitem"
										href="/arenda-gidromolota-na-baze-jekskavatora/?loader-based-hydraulic-hammer">Гидромолот
										на базе погрузчика</a></li>
								<li><a class="modal-menu__subitem" href="/">Ручной гидромолот</a></li>
							</ul>
						</li>
						<li><a href="/category/trawls-and-low-loaders/">Тралы и
								низкорамные площадки</a></li>
						<li><a href="/arenda-burovoj-tehniki/?drilling-technics"
								class="menu-toggle-button"><span>Буровая техника</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/">Ямобур</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-benzobura/">Бензобур</a></li>
								<li><a class="modal-menu__subitem" href="/category/arenda-ruchnogo-bura/">Ручной бур</a></li>
							</ul>
						</li>
						<li><a href="/category/arenda-avtobetononasosa/"
								class="menu-toggle-button"><span>Автобетононасосы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-21-m/?concrete-pump-21-m">Автобетононасос 21 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-37-m/?concrete-pump-37-m">Автобетононасос 37 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-42-m/?concrete-pump-42-m">Автобетононасос 42 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-52-m/?concrete-pump-52-m">Автобетононасос 52 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-60-m/?concrete-pump-60-m">Автобетононасос 60 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/arenda-avtobetononasosa-2-v-1/?сoncrete-pump-2-in-1">Автобетононасос 2 в 1</a>
								</li>
							</ul>
						</li>
						<li><a href="/category/mini-technics" class="menu-toggle-button"><span>Мини-техника</span> <svg width="10" height="5"
									viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/mini-loader/">Мини-погрузчик</a></li>
								<li><a class="modal-menu__subitem" href="/category/mini-excavator/">Мини-экскаватор</a></li>
							</ul>
						</li>
						<li><a href="/category/arenda-avtovyshki/aerial-platforms"
								class="menu-toggle-button"><span>Автовышки</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle"></ul>
						</li>
						<li><a href="/services" class="menu-toggle-button"><span>Услуги спецтехники</span> <svg width="10"
									height="5" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/zemljanye-raboty/">Земляные работы</a></li>
								<li><a class="modal-menu__subitem" href="/remont-zdanij-i-sooruzhenij/">Ремонт зданий и сооружений</a>
								</li>
								<li><a class="modal-menu__subitem" href="/krovelnye-raboty/">Кровельные работы</a></li>
								<li><a class="modal-menu__subitem" href="/otdelochnye-raboty/">Отделочные работы</a></li>
								<li><a class="modal-menu__subitem" href="/stroitelnye-uslugi/">Строительные услуги</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-po-zalivke-fundamenta/">Услуги по заливке
										фундамента</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-po-vozvedeniju-osnovanij/">Услуги по возведению
										оснований</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-montazhnyh-rabot/">Услуги монтажных работ</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<a href="#ex1" rel="modal:open" class="header__call-button_mob">Заказать звонок</a>
			<div class="main-banner__social mobile-box">
				<ul>
					<li><a href="#"><svg class="main-banner__inst" width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM11 13C11 11.9 11.9 11 13 11H27C28.1 11 29 11.9 29 13V27C29 28.101 28.1 29 27 29H13C11.9 29 11 28.101 11 27V13ZM23.9 23.9003C22.8615 24.939 21.4529 25.5227 19.984 25.523C18.515 25.5227 17.1063 24.9391 16.0676 23.9004C15.0289 22.8617 14.4453 21.453 14.445 19.984C14.445 19.646 14.488 19.32 14.549 19H13V26.216C13 26.3069 13.0179 26.3968 13.0528 26.4807C13.0877 26.5647 13.1388 26.6409 13.2032 26.705C13.2675 26.7691 13.344 26.8198 13.428 26.8543C13.5121 26.8888 13.6021 26.9064 13.693 26.906H26.307C26.3979 26.9064 26.4879 26.8888 26.572 26.8543C26.656 26.8198 26.7325 26.7691 26.7968 26.705C26.8612 26.6409 26.9123 26.5647 26.9472 26.4807C26.9821 26.3968 27 26.3069 27 26.216V19H25.419C25.479 19.32 25.522 19.646 25.522 19.984C25.522 21.4529 24.9386 22.8616 23.9 23.9003ZM16.7865 18.6595C16.6125 19.0794 16.523 19.5295 16.523 19.984C16.523 20.9019 16.8876 21.7822 17.5367 22.4313C18.1858 23.0804 19.0661 23.445 19.984 23.445C20.9019 23.445 21.7822 23.0804 22.4313 22.4313C23.0804 21.7822 23.445 20.9019 23.445 19.984C23.445 19.5295 23.3555 19.0794 23.1815 18.6595C23.0076 18.2396 22.7527 17.8581 22.4313 17.5367C22.1099 17.2153 21.7284 16.9604 21.3085 16.7865C20.8886 16.6125 20.4385 16.523 19.984 16.523C19.5295 16.523 19.0794 16.6125 18.6595 16.7865C18.2396 16.9604 17.8581 17.2153 17.5367 17.5367C17.2153 17.8581 16.9604 18.2396 16.7865 18.6595ZM24.692 16H26.307C26.69 16 27 15.688 27 15.307V13.691C27 13.309 26.69 13 26.306 13H24.691C24.31 13 24 13.309 24 13.691V15.308C24.0005 15.4914 24.0736 15.6671 24.2033 15.7967C24.3329 15.9264 24.5086 15.9995 24.692 16Z"
									fill="#FFCA40" /></svg></a></li>
					<li><a href="viber://chat?number=%2B375291765010"><svg class="main-banner__whatsapp" width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM8.021 8.2909C11.109 5.4579 16.63 5.0359 19.198 5.0049V5.0039C20.052 4.9889 20.583 5.0249 20.583 5.0249C27.739 5.0509 30.942 7.3849 31.739 8.1189H31.755C34.396 10.4109 35.859 15.4779 34.875 23.5199C34.0005 30.6209 29.043 31.8701 27.3861 32.2877C27.2261 32.328 27.0968 32.3606 27.005 32.3899C26.552 32.5359 22.619 33.5199 17.484 33.0929L15.619 35.2019C15.4477 35.3848 15.2882 35.5656 15.1361 35.7379C14.4005 36.5715 13.8398 37.2069 12.968 36.9309C12.114 36.6659 12.161 35.3739 12.161 35.3739V32.1449C4.656 30.0249 4.75 22.2389 4.828 18.0929C4.922 13.9319 5.724 10.5669 8.021 8.2909ZM20.458 7.2919C20.458 7.2919 20.015 7.2609 19.286 7.2659H19.284C17.102 7.2819 12.414 7.5999 9.805 9.9589C7.867 11.8809 7.216 14.7189 7.138 18.1879C7.13565 18.3077 7.13293 18.4314 7.13014 18.5584C7.05213 22.1099 6.91487 28.3587 13.06 30.0579L13.029 35.4169C13.019 35.7089 13.071 35.9219 13.243 35.9639C13.363 35.9899 13.551 35.9379 13.712 35.7609C14.728 34.7509 17.978 30.8289 17.978 30.8289C22.342 31.1099 25.806 30.2559 26.181 30.1359C26.2681 30.1081 26.3933 30.079 26.5487 30.0429C27.965 29.7137 31.9008 28.7989 32.619 22.9329C33.458 16.2189 32.312 11.6509 30.088 9.7449C29.406 9.1309 26.515 7.3079 20.458 7.2919ZM19.6131 10.7629C19.6616 10.7432 19.7136 10.7334 19.766 10.7339V10.7329C22.125 10.7329 24.131 11.5299 25.714 13.0769C26.5262 13.9161 27.1593 14.9116 27.5748 16.0031C27.9903 17.0945 28.1796 18.2591 28.131 19.4259C28.1299 19.5315 28.0872 19.6323 28.0121 19.7065C27.937 19.7807 27.8356 19.8222 27.73 19.8219V19.8379C27.506 19.8379 27.329 19.6559 27.329 19.4369C27.302 16.9579 26.594 15.0619 25.141 13.6509C24.4293 12.9603 23.588 12.4174 22.6654 12.0535C21.7429 11.6897 20.7575 11.512 19.766 11.5309C19.547 11.5309 19.365 11.3539 19.365 11.1299C19.3651 11.0775 19.3756 11.0257 19.3959 10.9774C19.4161 10.929 19.4458 10.8852 19.483 10.8484C19.5203 10.8116 19.5645 10.7825 19.6131 10.7629ZM13.677 11.8119C13.9233 11.6664 14.2119 11.6095 14.495 11.6509L14.493 11.6489C14.7573 11.6991 14.9953 11.8411 15.165 12.0499C15.9411 12.9355 16.6284 13.8951 17.217 14.9149C17.602 15.5979 17.352 16.2899 16.993 16.5819L16.243 17.1859C15.858 17.4779 15.91 18.0509 15.91 18.0509C15.91 18.0509 17.02 22.2639 21.181 23.3269L21.197 23.3169C21.197 23.3169 21.755 23.3689 22.062 22.9939L22.661 22.2389C22.942 21.8639 23.635 21.6399 24.317 22.0099C25.3354 22.6026 26.2948 23.2914 27.182 24.0669C27.625 24.4369 27.729 24.9839 27.422 25.5619V25.5719C27.0949 26.1464 26.676 26.6636 26.182 27.1029C25.7764 27.4711 25.2593 27.6929 24.713 27.7329C24.541 27.7329 24.37 27.7069 24.182 27.6499V27.6399C23.541 27.4519 22.473 26.9989 20.713 26.0409C19.1731 25.1893 17.7482 24.1445 16.473 22.9319L16.431 22.8959L16.395 22.8539L16.338 22.8119L16.302 22.7599C15.0929 21.4893 14.053 20.0679 13.208 18.5309C12.552 17.4369 12.015 16.2749 11.604 15.0669L11.578 15.0509C11.505 14.8169 11.484 14.5719 11.515 14.3269C11.567 13.9159 11.765 13.4889 12.13 13.0669C12.5692 12.5706 13.0843 12.147 13.656 11.8119H13.677ZM20.463 13.6409C19.927 13.6409 19.927 12.8389 20.458 12.8389H20.515C22.25 12.9579 23.609 13.5569 24.583 14.6249C25.552 15.6929 26.046 17.0259 26.01 18.6149C26.0092 18.721 25.9667 18.8225 25.8917 18.8976C25.8166 18.9726 25.7151 19.0151 25.609 19.0159L25.593 18.9949C25.4877 18.9944 25.3867 18.9527 25.3118 18.8787C25.2368 18.8046 25.1938 18.7042 25.192 18.5989C25.2318 17.9766 25.1462 17.3526 24.9404 16.7639C24.7347 16.1753 24.4128 15.6339 23.994 15.1719C23.5349 14.6973 22.9867 14.3177 22.3808 14.055C21.775 13.7923 21.1233 13.6516 20.463 13.6409ZM21.089 15.8129C20.547 15.7969 20.568 14.9789 21.115 14.9949V14.9959H21.131C22.86 15.0889 23.834 16.0949 23.928 17.8809C23.9312 17.9343 23.9238 17.9879 23.9061 18.0384C23.8884 18.0889 23.8609 18.1354 23.825 18.1751C23.7892 18.2149 23.7458 18.2471 23.6974 18.2699C23.649 18.2927 23.5965 18.3056 23.543 18.3079H23.527C23.423 18.3074 23.3233 18.2662 23.2493 18.1931C23.1753 18.12 23.1328 18.0209 23.131 17.9169C23.047 16.5469 22.407 15.8809 21.089 15.8129Z"
									fill="#FFCA40" /></svg></a></li>
					<li><a href="tg://resolve?domain=Um2020Minsk"><svg class="main-banner__telegram" width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM10.6244 18.7098L27.4576 12.1818C28.7156 11.6739 29.209 12.258 28.9197 13.5837L26.1326 26.8555C25.9202 27.9325 25.3832 28.3117 24.3963 27.7241L20.1471 24.5242L17.666 26.8851C17.3613 27.1503 16.8835 27.1478 16.6226 26.6142L16.9043 23.1586L25.8721 14.993C26.3743 14.5448 25.7906 14.4362 25.2205 14.8436L14.7791 21.3331L10.4607 19.953C9.71794 19.6226 9.94705 19.0138 10.6244 18.7098Z"
									fill="#FFCA40" /></svg></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-filter">
		<div class="container">
			<div class="modal-filter__close"><img alt="cross"
					src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-grey.svg"></div>
			<div class="modal-filter__title">Фильтровать</div>
			<div class="mobile-filter__sublist mobile-box">
				<div class="modal-menu__sublist-items">
					<ul class="modal-menu__sublist-left">
						<li><a href="/category/excavators/"
								class="menu-toggle-button"><span>Экскаваторы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/wheel-excavator/">Колесный экскаватор</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/crawler-excavator/">Гусеничный экскаватор</a>
								</li>
								<li><a class="modal-menu__subitem"
										href="/category/excavator-loader/">Экскаватор-погрузчик</a>
								</li>
								<li><a class="modal-menu__subitem"
										href="/category/excavator-planner/">Экскаватор-планировщик</a>
								</li>
								<li><a class="modal-menu__subitem" href="/arenda-cepnogo-jekskavatora/">Цепной экскаватор</a></li>
							</ul>
						</li>
						<li><a href="/category/loaders/" class="menu-toggle-button"><span>Погрузчики</span>
								<svg width="10" height="5" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/front-loader/">Фронтальный погрузчик</a></li>
								<li><a class="modal-menu__subitem" href="/category/telescopic-loader/">Телескопический
										погрузчик</a></li>
							</ul>
						</li>
						<li><a href="/category/dump-trucks/"
								class="menu-toggle-button"><span>Самосвалы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/category/dump-truck-20-tons/">Самосвал
										20 тонн</a></li>
							</ul>
						</li>
						<li><a href="/category/bulldozers/">Бульдозеры</a></li>
						<li><a href="/category/arenda-avtogrejdera/">Автогрейдер</a></li>
						<li><a href="#">Гидроманипуляторы</a></li>
						<li><a href="/single-drum-rollers/ ">Грунтовой каток</a></li>
						<li><a href="/category/truck-cranes/"
								class="menu-toggle-button"><span>Автокраны</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/arenda-avtokranov-10-tonn/">Автокран 10 т</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-avtokrana-32-tonny/">Автокран 32 т</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-avtokrana-40-tonn/">Автокран 40 т</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-avtokrana-50-tonn/">Автокран 50 т</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-avtokrana-55-tonn/">Автокран 55 т</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-avtokrana-60-tonn/">Автокран 60 т</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-avtokrana-70-tonn/">Автокран 70 т</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-avtokrana-90-tonn/">Автокран 90 т</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-avtokrana-100-tonn/">Автокран 100 т</a></li>
							</ul>
						</li>
					</ul>
					<ul class="modal-menu__sublist-right">
						<li><a href="/category/hydraulic-hammers/"
								class="menu-toggle-button"><span>Гидромолоты</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/excavator-based-hydraulic-hammer/">Гидромолот
										на базе экскаватора</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/loader-based-hydraulic-hammer/">Гидромолот
										на базе погрузчика</a></li>
								<li><a class="modal-menu__subitem" href="/">Ручной гидромолот</a></li>
							</ul>
						</li>
						<li><a href="/category/trawls-and-low-loaders/">Тралы и
								низкорамные площадки</a></li>
						<li><a href="/category/drilling-technics/"
								class="menu-toggle-button"><span>Буровая техника</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/">Ямобур</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-benzobura/">Бензобур</a></li>
								<li><a class="modal-menu__subitem" href="/arenda-ruchnogo-bura/">Ручной бур</a></li>
							</ul>
						</li>
						<li><a href="/category/arenda-avtobetononasosa/"
								class="menu-toggle-button"><span>Автобетононасосы</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem"
										href="/category/concrete-pump-21-m/">Автобетононасос 21 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/concrete-pump-37-m/">Автобетононасос 37 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/concrete-pump-42-m/">Автобетононасос 42 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/concrete-pump-52-m/">Автобетононасос 52 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/concrete-pump-60-m/">Автобетононасос 60 м</a></li>
								<li><a class="modal-menu__subitem"
										href="/category/soncrete-pump-2-in-1/">Автобетононасос 2 в 1</a>
								</li>
							</ul>
						</li>
						<li><a href="#" class="menu-toggle-button"><span>Мини-техника</span> <svg width="10" height="5"
									viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/mini-loader/">Мини-погрузчик</a></li>
								<li><a class="modal-menu__subitem" href="/mini-excavator/">Мини-экскаватор</a></li>
							</ul>
						</li>
						<li><a href="/category/aerial-platforms/"
								class="menu-toggle-button"><span>Автовышки</span> <svg width="10" height="5" viewBox="0 0 12 7"
									fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle"></ul>
						</li>
						<li><a href="/services" class="menu-toggle-button"><span>Услуги спецтехники</span> <svg width="10"
									height="5" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 1L6 6L1 1" stroke="#202022" /></svg></a>
							<ul class="modal-menu__sublist-toggle">
								<li><a class="modal-menu__subitem" href="/zemljanye-raboty/">Земляные работы</a></li>
								<li><a class="modal-menu__subitem" href="/remont-zdanij-i-sooruzhenij/">Ремонт зданий и сооружений</a>
								</li>
								<li><a class="modal-menu__subitem" href="/krovelnye-raboty/">Кровельные работы</a></li>
								<li><a class="modal-menu__subitem" href="/otdelochnye-raboty/">Отделочные работы</a></li>
								<li><a class="modal-menu__subitem" href="/stroitelnye-uslugi/">Строительные услуги</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-po-zalivke-fundamenta/">Услуги по заливке
										фундамента</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-po-vozvedeniju-osnovanij/">Услуги по возведению
										оснований</a></li>
								<li><a class="modal-menu__subitem" href="/uslugi-montazhnyh-rabot/">Услуги монтажных работ</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="call-button">
		<img alt="phone-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg"><span>Получить консультацию</span>
	</div>
	<div class="modal-form new">
		<div class="modal-form__close">
			<img alt="cross" src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-white.svg">
		</div>
		<div class="modal-form__title">Получить консультацию</div>
		<?php echo do_shortcode('[contact-form-7 id="2291" title="Получить консультацию в футере"]') ?>
	</div>