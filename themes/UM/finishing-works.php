<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sss
 * 
 * Template Name: Finishing works
 */

get_header();
?>

<main>
	<div id="rent-banner" class="main-banner rent-banner services-page-banner construction-services-banner">
		<div class="container">
			<div class="main-banner__left">
				<h1 class="main-banner__title">Отделочные работы</h1>
				<div class="main-banner__text">Отделочные работы являются важной частью комплексного ремонта жилого или
					нежилого помещения. Это финишный этап в создании интерьера офиса, квартиры, частного дома, торгового
					или промышленного объекта. Он напрямую влияет на визуальную составляющую строения и защищает от
					воздействия внешних факторов.</div>
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
						id="banner-arrow" width="39" height="8" viewBox="0 0 39 8" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M38.3536 4.35355C38.5488 4.15829 38.5488 3.84171 38.3536 3.64645L35.1716 0.464466C34.9763 0.269204 34.6597 0.269204 34.4645 0.464466C34.2692 0.659728 34.2692 0.976311 34.4645 1.17157L37.2929 4L34.4645 6.82843C34.2692 7.02369 34.2692 7.34027 34.4645 7.53553C34.6597 7.7308 34.9763 7.7308 35.1716 7.53553L38.3536 4.35355ZM0 4.5H38V3.5H0V4.5Z"
							fill="#2E2C2B" /></svg></div>
			</div>
			<div class="main-banner__social">
				<ul>
					<li><a href="#"><svg class="main-banner__inst" width="40" height="40" viewBox="0 0 40 40"
								fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM11 13C11 11.9 11.9 11 13 11H27C28.1 11 29 11.9 29 13V27C29 28.101 28.1 29 27 29H13C11.9 29 11 28.101 11 27V13ZM23.9 23.9003C22.8615 24.939 21.4529 25.5227 19.984 25.523C18.515 25.5227 17.1063 24.9391 16.0676 23.9004C15.0289 22.8617 14.4453 21.453 14.445 19.984C14.445 19.646 14.488 19.32 14.549 19H13V26.216C13 26.3069 13.0179 26.3968 13.0528 26.4807C13.0877 26.5647 13.1388 26.6409 13.2032 26.705C13.2675 26.7691 13.344 26.8198 13.428 26.8543C13.5121 26.8888 13.6021 26.9064 13.693 26.906H26.307C26.3979 26.9064 26.4879 26.8888 26.572 26.8543C26.656 26.8198 26.7325 26.7691 26.7968 26.705C26.8612 26.6409 26.9123 26.5647 26.9472 26.4807C26.9821 26.3968 27 26.3069 27 26.216V19H25.419C25.479 19.32 25.522 19.646 25.522 19.984C25.522 21.4529 24.9386 22.8616 23.9 23.9003ZM16.7865 18.6595C16.6125 19.0794 16.523 19.5295 16.523 19.984C16.523 20.9019 16.8876 21.7822 17.5367 22.4313C18.1858 23.0804 19.0661 23.445 19.984 23.445C20.9019 23.445 21.7822 23.0804 22.4313 22.4313C23.0804 21.7822 23.445 20.9019 23.445 19.984C23.445 19.5295 23.3555 19.0794 23.1815 18.6595C23.0076 18.2396 22.7527 17.8581 22.4313 17.5367C22.1099 17.2153 21.7284 16.9604 21.3085 16.7865C20.8886 16.6125 20.4385 16.523 19.984 16.523C19.5295 16.523 19.0794 16.6125 18.6595 16.7865C18.2396 16.9604 17.8581 17.2153 17.5367 17.5367C17.2153 17.8581 16.9604 18.2396 16.7865 18.6595ZM24.692 16H26.307C26.69 16 27 15.688 27 15.307V13.691C27 13.309 26.69 13 26.306 13H24.691C24.31 13 24 13.309 24 13.691V15.308C24.0005 15.4914 24.0736 15.6671 24.2033 15.7967C24.3329 15.9264 24.5086 15.9995 24.692 16Z"
									fill="#FFCA40" /></svg></a></li>
					<li><a href="#"><svg class="main-banner__whatsapp" width="40" height="40" viewBox="0 0 40 40"
								fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM8.021 8.2909C11.109 5.4579 16.63 5.0359 19.198 5.0049V5.0039C20.052 4.9889 20.583 5.0249 20.583 5.0249C27.739 5.0509 30.942 7.3849 31.739 8.1189H31.755C34.396 10.4109 35.859 15.4779 34.875 23.5199C34.0005 30.6209 29.043 31.8701 27.3861 32.2877C27.2261 32.328 27.0968 32.3606 27.005 32.3899C26.552 32.5359 22.619 33.5199 17.484 33.0929L15.619 35.2019C15.4477 35.3848 15.2882 35.5656 15.1361 35.7379C14.4005 36.5715 13.8398 37.2069 12.968 36.9309C12.114 36.6659 12.161 35.3739 12.161 35.3739V32.1449C4.656 30.0249 4.75 22.2389 4.828 18.0929C4.922 13.9319 5.724 10.5669 8.021 8.2909ZM20.458 7.2919C20.458 7.2919 20.015 7.2609 19.286 7.2659H19.284C17.102 7.2819 12.414 7.5999 9.805 9.9589C7.867 11.8809 7.216 14.7189 7.138 18.1879C7.13565 18.3077 7.13293 18.4314 7.13014 18.5584C7.05213 22.1099 6.91487 28.3587 13.06 30.0579L13.029 35.4169C13.019 35.7089 13.071 35.9219 13.243 35.9639C13.363 35.9899 13.551 35.9379 13.712 35.7609C14.728 34.7509 17.978 30.8289 17.978 30.8289C22.342 31.1099 25.806 30.2559 26.181 30.1359C26.2681 30.1081 26.3933 30.079 26.5487 30.0429C27.965 29.7137 31.9008 28.7989 32.619 22.9329C33.458 16.2189 32.312 11.6509 30.088 9.7449C29.406 9.1309 26.515 7.3079 20.458 7.2919ZM19.6131 10.7629C19.6616 10.7432 19.7136 10.7334 19.766 10.7339V10.7329C22.125 10.7329 24.131 11.5299 25.714 13.0769C26.5262 13.9161 27.1593 14.9116 27.5748 16.0031C27.9903 17.0945 28.1796 18.2591 28.131 19.4259C28.1299 19.5315 28.0872 19.6323 28.0121 19.7065C27.937 19.7807 27.8356 19.8222 27.73 19.8219V19.8379C27.506 19.8379 27.329 19.6559 27.329 19.4369C27.302 16.9579 26.594 15.0619 25.141 13.6509C24.4293 12.9603 23.588 12.4174 22.6654 12.0535C21.7429 11.6897 20.7575 11.512 19.766 11.5309C19.547 11.5309 19.365 11.3539 19.365 11.1299C19.3651 11.0775 19.3756 11.0257 19.3959 10.9774C19.4161 10.929 19.4458 10.8852 19.483 10.8484C19.5203 10.8116 19.5645 10.7825 19.6131 10.7629ZM13.677 11.8119C13.9233 11.6664 14.2119 11.6095 14.495 11.6509L14.493 11.6489C14.7573 11.6991 14.9953 11.8411 15.165 12.0499C15.9411 12.9355 16.6284 13.8951 17.217 14.9149C17.602 15.5979 17.352 16.2899 16.993 16.5819L16.243 17.1859C15.858 17.4779 15.91 18.0509 15.91 18.0509C15.91 18.0509 17.02 22.2639 21.181 23.3269L21.197 23.3169C21.197 23.3169 21.755 23.3689 22.062 22.9939L22.661 22.2389C22.942 21.8639 23.635 21.6399 24.317 22.0099C25.3354 22.6026 26.2948 23.2914 27.182 24.0669C27.625 24.4369 27.729 24.9839 27.422 25.5619V25.5719C27.0949 26.1464 26.676 26.6636 26.182 27.1029C25.7764 27.4711 25.2593 27.6929 24.713 27.7329C24.541 27.7329 24.37 27.7069 24.182 27.6499V27.6399C23.541 27.4519 22.473 26.9989 20.713 26.0409C19.1731 25.1893 17.7482 24.1445 16.473 22.9319L16.431 22.8959L16.395 22.8539L16.338 22.8119L16.302 22.7599C15.0929 21.4893 14.053 20.0679 13.208 18.5309C12.552 17.4369 12.015 16.2749 11.604 15.0669L11.578 15.0509C11.505 14.8169 11.484 14.5719 11.515 14.3269C11.567 13.9159 11.765 13.4889 12.13 13.0669C12.5692 12.5706 13.0843 12.147 13.656 11.8119H13.677ZM20.463 13.6409C19.927 13.6409 19.927 12.8389 20.458 12.8389H20.515C22.25 12.9579 23.609 13.5569 24.583 14.6249C25.552 15.6929 26.046 17.0259 26.01 18.6149C26.0092 18.721 25.9667 18.8225 25.8917 18.8976C25.8166 18.9726 25.7151 19.0151 25.609 19.0159L25.593 18.9949C25.4877 18.9944 25.3867 18.9527 25.3118 18.8787C25.2368 18.8046 25.1938 18.7042 25.192 18.5989C25.2318 17.9766 25.1462 17.3526 24.9404 16.7639C24.7347 16.1753 24.4128 15.6339 23.994 15.1719C23.5349 14.6973 22.9867 14.3177 22.3808 14.055C21.775 13.7923 21.1233 13.6516 20.463 13.6409ZM21.089 15.8129C20.547 15.7969 20.568 14.9789 21.115 14.9949V14.9959H21.131C22.86 15.0889 23.834 16.0949 23.928 17.8809C23.9312 17.9343 23.9238 17.9879 23.9061 18.0384C23.8884 18.0889 23.8609 18.1354 23.825 18.1751C23.7892 18.2149 23.7458 18.2471 23.6974 18.2699C23.649 18.2927 23.5965 18.3056 23.543 18.3079H23.527C23.423 18.3074 23.3233 18.2662 23.2493 18.1931C23.1753 18.12 23.1328 18.0209 23.131 17.9169C23.047 16.5469 22.407 15.8809 21.089 15.8129Z"
									fill="#FFCA40" /></svg></a></li>
					<li><a href="#"><svg class="main-banner__telegram" width="40" height="40" viewBox="0 0 40 40"
								fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM10.6244 18.7098L27.4576 12.1818C28.7156 11.6739 29.209 12.258 28.9197 13.5837L26.1326 26.8555C25.9202 27.9325 25.3832 28.3117 24.3963 27.7241L20.1471 24.5242L17.666 26.8851C17.3613 27.1503 16.8835 27.1478 16.6226 26.6142L16.9043 23.1586L25.8721 14.993C26.3743 14.5448 25.7906 14.4362 25.2205 14.8436L14.7791 21.3331L10.4607 19.953C9.71794 19.6226 9.94705 19.0138 10.6244 18.7098Z"
									fill="#FFCA40" /></svg></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="catalog">
		<div class="container">
			<div class="catalog__location"><a class="catalog__location-history" href="/">Главная</a> <img
					alt="loc-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"><a
					class="catalog__location-history" href="/stroitelnye-uslugi/">Строительные услуги</a> <img
					alt="loc-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"><span
					class="catalog__location-current">Отделочные работы</span></div>
			<div class="catalog__title">Каталог строительных услуг</div>
			<div class="catalog__top service-top"><?php do_shortcode('[um-service-filter]'); ?><div
					class="catalog__sort-wrap">
					<div class="center"><select name="sources" id="sources" class="custom-select sources"
							placeholder="Сортировать по">
							<option id="select-sort-popularity" value="orderby=popularity&order=desc">популярности
							</option>
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
			<div id="catalog-block" class="catalog__items-wrap construction-services-content work-results">
				<?php $res = my_get_posts();
	echo $res['response'];
?>
			</div>
		</div>
	</div>
	</div>
	<div class="consultation-form services-page-consultation-form">
		<div class="container">
			<form id="form1" novalidate>
				<div class="consultation-form__title">Получить консультацию</div>
				<div class="consultation-form__group">
					<div id="form1-name-wrap"><input id="form1-name" type="text" placeholder="Имя" required></div>
					<div id="form1-phone-wrap"><input id="form1-phone" type="phone" placeholder="Телефон" required>
					</div><button type="submit">Заказать звонок</button>
				</div><input type="checkbox" id="data-checkbox" checked="checked"> <label for="data-checkbox"
					class="data-checkbox-label">Даю согласие на обработку персональных данных</label> <button
					class="mobile-box" type="submit">Заказать звонок</button>
			</form>
		</div>
	</div>
	<div class="services-page-items construction-services-banners-items">
		<div class="container">
			<div class="services-page__item">
				<div class="services-page__info">
					<div class="info__title">Штукатурные работы</div>
					<div class="info__text">
						<p>Оштукатуривание разных поверхностей – сложный процесс, требующий опытного подхода. На
							качество ремонта влияет выбранный материал и профессионализм штукатура. Поэтому работы лучше
							доверить экспертам ООО «УМ-2020».</p>
						<p><a href="/shtukaturnye-raboty">Штукатурные работы</a> бывают двух видов:</p>
					</div>
					<ul class="info__list">
						<li>Внутренними. Они производятся внутри помещений с целью выравнивания потолка, стен и других
							поверхностей.</li>
						<li>Фасадными. Отделка лицевой части здания необходима для защиты стен от внешних природных
							факторов.</li>
					</ul><img class="service-page__image-mobile" alt="service-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-10.webp">
					<div class="info__text">Нами выполняются отделочные работы в Минске вручную и с использованием
						специального оборудования, значительно сокращающего время, необходимое на проведение ремонта.
					</div>
					<div class="info__call-button">Подробнее</div>
				</div>
				<div class="services-page__image">
					<div class="helper"></div><img alt="service-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-10.webp">
				</div>
			</div>
			<div class="services-page__item">
				<div class="services-page__image">
					<div class="helper"></div><img alt="service-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-11.webp">
				</div>
				<div class="services-page__info">
					<div class="info__title">Стекольные работы</div>
					<div class="info__text">Под стекольными работами подразумевают заполнения в строении проёмов,
						предусмотренных для естественного освещения. Мы предоставляем клиентам следующие услуги:</div>
					<ul class="info__list">
						<li>остекление балконов многоэтажек и оконных проемов частных домов;</li>
						<li>остекление перегородок и витражей нежилых объектов.</li>
					</ul>
					<div class="info__text">Сам процесс остекления подразумевает заготовку материала и осуществление
						непосредственной установки стекольных конструкций. В зависимости от особенностей стекольных
						мероприятий нами используются следующие виды строительных стекол:</div>
					<ul class="info__list">
						<li>Рифленые. Применяются для установки в перегородки и двери с целью создания персонального
							дизайна и ограничения прохождения света.</li>
						<li>Профильные. Устанавливаются в прозрачные оградительные конструкции без переплета.</li>
						<li>Стандартные. Применяются для остекления балконов, окон и дверей.</li>
						<li>Армированные. Монтируются в конструкции подверженные высоким вибрационным нагрузкам.
							Используются в фонарях, оранжереях и теплицах, на которые действует снеговая и ветровая
							нагрузка.</li>
						<li>Стеклоблоки. Устанавливаются в световых проемах. Способны выдержать высокую механическую
							нагрузку.</li>
					</ul><img class="service-page__image-mobile" alt="service-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-11.webp">
					<div class="info__text">Стоимость остекления рассчитывается персонально по каждому проекту в
						соответствии с поставленными задачами и объемом работ.</div>
					<div class="info__call-button">Подробнее</div>
				</div>
			</div>
			<div class="services-page__item">
				<div class="services-page__info">
					<div class="info__title">Обойные работы</div>
					<div class="info__text">
						<p>Услуги отделочных работ представляют объёмный завершающий этап, частью которого является
							поклейка обоев. Это декоративный элемент, влияющий на общий дизайн внутри. Желательно
							использовать обои в соответствии с санитарно-гигиеническими требованиями помещений, где они
							наклеиваются. Особо пристально нужно подойти к выбору материала для отделки жилых объектов,
							где постоянно находятся люди.</p>
						<p>Не на последнем месте эстетическая составляющая, которая включает фактуру, цвет, рисунок и
							другие особенности обоев в соответствии с предпочтениями заказчика. Качество обойных работ
							зависит от подготовительного этапа. Важно выровнять все поверхности и обработать грунтовкой
							для улучшения сцепления с клеем.</p><img class="service-page__image-mobile"
							alt="service-img"
							src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-12.webp">
						<p>Гарантировать качество обойных работ могут только специалисты, которые работают в ООО
							«УМ-2020». Это достигается благодаря многолетнему опыту, качественным материалам и
							профессиональным подходом к делу.</p>
					</div>
					<div class="info__call-button">Подробнее</div>
				</div>
				<div class="services-page__image">
					<div class="helper"></div><img alt="service-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-12.webp">
				</div>
			</div>
			<div class="services-page__item">
				<div class="services-page__image">
					<div class="helper"></div><img alt="service-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-13.webp">
				</div>
				<div class="services-page__info">
					<div class="info__title">Облицовочные работы</div>
					<div class="info__text">
						<p>Облицовка — это часть отделочных мероприятий. Её используют для отделки настенных,
							потолочных, напольных и фасадных поверхностей. Проведение таких работ требует наличия
							специалистов, прошедших соответствующую подготовку.</p>
						<p>ООО «УМ-2020» предлагает комплексные облицовочные работы в Минске, предоставляя клиентам:</p>
					</div>
					<ul class="info__list">
						<li>Наружные и внутренние отделочные работы любыми материалами: облицовочная плитка, натуральный
							и искусственный камень.</li>
						<li>Облицовку ступеней, укладку плитки на пол и стены.</li>
						<li>Отделку потолка декоративными материалами.</li>
						<li>Облицовку камина изразцами и керамической плиткой.</li>
						<li>Облицовку фасадных частей зданий.</li>
					</ul><img class="service-page__image-mobile" alt="service-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-13.webp">
					<div class="info__text">Нашей компанией выполняются отделочные работы в Минске во время
						строительства нового дома или при косметическом, а также капитальном ремонте жилого,
						общественного или другого помещения.</div>
					<div class="info__call-button">Подробнее</div>
				</div>
			</div>
			<div class="services-page__item">
				<div class="services-page__info">
					<div class="info__title">Малярные работы</div>
					<div class="info__text">
						<p><a href="/maljarnye-raboty">Комплекс малярных работ</a> выполняется на конечном этапе ремонта
							или строительства. Это востребованное направление отделки разноплановых помещений.</p>
						<p>Профессионалы ООО «УМ-2020» выполнят следующие работы:</p>
					</div>
					<ul class="info__list">
						<li>Подготовку. Удаляется старое декоративное покрытие на потолках, стенах или других
							поверхностях подлежащих обработке.</li>
						<li>Грунтовку. Для этого наносится грунтовочный состав на поверхность перед покраской или
							оклейкой обоями. Специальная смесь из воды и клея маскирует проблемные участки и улучшает
							сцепление стены или другой поверхности с лакокрасочным покрытием или обоями.</li>
						<li>Шпаклёвку. На поверхность пола и стены наносится специальный стартовый или финишный слой в
							зависимости от степени неровности поверхности. Заделываются трещины, штробы и другие
							технические каналы после прокладки электрических проводов и других коммуникаций.</li>
						<li>Покраску или оклейку обоев. Наносится лакокрасочное покрытие или клеятся обои в соответствии
							с предпочтениями заказчика. Это финишный этап создания интерьера в жилых и нежилых
							помещениях.</li>
					</ul><img class="service-page__image-mobile" alt="service-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-14.webp">
					<div class="info__text">Рассчитывать на запланированный результат можно, если каждый этап проходит в
						соответствии с установленными нормативами и требованиями. Поэтому лучше, чтобы работой
						занимались профессионалы ООО «УМ-2020».</div>
					<div class="info__call-button">Подробнее</div>
				</div>
				<div class="services-page__image">
					<div class="helper"></div><img alt="service-img"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/service-banner-img-14.webp">
				</div>
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
						<li><a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM11 13C11 11.9 11.9 11 13 11H27C28.1 11 29 11.9 29 13V27C29 28.101 28.1 29 27 29H13C11.9 29 11 28.101 11 27V13ZM23.9 23.9003C22.8615 24.939 21.4529 25.5227 19.984 25.523C18.515 25.5227 17.1063 24.9391 16.0676 23.9004C15.0289 22.8617 14.4453 21.453 14.445 19.984C14.445 19.646 14.488 19.32 14.549 19H13V26.216C13 26.3069 13.0179 26.3968 13.0528 26.4807C13.0877 26.5647 13.1388 26.6409 13.2032 26.705C13.2675 26.7691 13.344 26.8198 13.428 26.8543C13.5121 26.8888 13.6021 26.9064 13.693 26.906H26.307C26.3979 26.9064 26.4879 26.8888 26.572 26.8543C26.656 26.8198 26.7325 26.7691 26.7968 26.705C26.8612 26.6409 26.9123 26.5647 26.9472 26.4807C26.9821 26.3968 27 26.3069 27 26.216V19H25.419C25.479 19.32 25.522 19.646 25.522 19.984C25.522 21.4529 24.9386 22.8616 23.9 23.9003ZM16.7865 18.6595C16.6125 19.0794 16.523 19.5295 16.523 19.984C16.523 20.9019 16.8876 21.7822 17.5367 22.4313C18.1858 23.0804 19.0661 23.445 19.984 23.445C20.9019 23.445 21.7822 23.0804 22.4313 22.4313C23.0804 21.7822 23.445 20.9019 23.445 19.984C23.445 19.5295 23.3555 19.0794 23.1815 18.6595C23.0076 18.2396 22.7527 17.8581 22.4313 17.5367C22.1099 17.2153 21.7284 16.9604 21.3085 16.7865C20.8886 16.6125 20.4385 16.523 19.984 16.523C19.5295 16.523 19.0794 16.6125 18.6595 16.7865C18.2396 16.9604 17.8581 17.2153 17.5367 17.5367C17.2153 17.8581 16.9604 18.2396 16.7865 18.6595ZM24.692 16H26.307C26.69 16 27 15.688 27 15.307V13.691C27 13.309 26.69 13 26.306 13H24.691C24.31 13 24 13.309 24 13.691V15.308C24.0005 15.4914 24.0736 15.6671 24.2033 15.7967C24.3329 15.9264 24.5086 15.9995 24.692 16Z"
										fill="#202022" /></svg></a></li>
						<li><a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M40 20C40 31.0457 31.0457 40 20 40C8.9543 40 0 31.0457 0 20C0 8.9543 8.9543 0 20 0C31.0457 0 40 8.9543 40 20ZM26.5697 18.5539C26.5913 16.0157 24.3716 13.689 21.622 13.3669C21.5625 13.3597 21.5033 13.3509 21.4444 13.3406C21.3062 13.3148 21.166 13.3002 21.0253 13.2967C20.4612 13.2967 20.3107 13.6829 20.271 13.912C20.2323 14.1358 20.2692 14.3245 20.3801 14.471C20.5666 14.7177 20.8956 14.7615 21.1596 14.7966L21.1756 14.7988L21.1757 14.7988C21.2464 14.8085 21.3135 14.8178 21.3705 14.83C23.8417 15.368 24.6735 16.2132 25.08 18.5996C25.0891 18.6525 25.0936 18.7173 25.0984 18.7864L25.0984 18.7864L25.0998 18.8058L25.0999 18.8077C25.118 19.0936 25.1553 19.6844 25.8091 19.6844C25.8632 19.6844 25.9226 19.68 25.9839 19.6712C26.593 19.5808 26.5742 19.0387 26.5652 18.778L26.5652 18.7777L26.5651 18.7738V18.7738C26.5624 18.7016 26.5599 18.6338 26.567 18.5882C26.5684 18.5765 26.569 18.5648 26.5688 18.553L26.5697 18.5539ZM21.0653 12.4543C21.0076 12.4464 20.9391 12.4411 20.8652 12.4359C20.5624 12.4148 19.9324 12.37 19.9694 11.7355C19.9856 11.4608 20.1118 11 20.7769 11C20.8506 11 20.9227 11.0049 20.9859 11.0092L20.9932 11.0097L21.0077 11.0106C21.057 11.0138 21.1024 11.0167 21.141 11.0167C21.1575 11.0169 21.1741 11.0161 21.1905 11.014C21.2067 11.0114 21.223 11.0114 21.241 11.0114C25.4191 11.1483 29.0403 14.8424 28.988 18.9148C28.988 18.9663 28.9903 19.0239 28.9928 19.0855L28.9934 19.0991C29.0069 19.3694 29.0213 19.7055 28.7996 19.9311C28.6716 20.061 28.4941 20.1268 28.2697 20.1268H28.2481C27.5347 20.1137 27.5235 19.4667 27.5181 19.1549L27.5181 19.1544C27.5172 19.0675 27.5154 18.985 27.5064 18.9174C26.99 14.9346 25.1235 13.0625 21.0653 12.4543ZM27.0521 23.8683C27.1375 23.9349 27.2237 24.0004 27.3108 24.0649C27.9633 24.5502 28.7762 25.155 28.331 26.3784C27.8236 27.7748 26.1698 29 24.7927 29H24.7693C24.7447 28.9998 24.7201 28.9966 24.6963 28.9903C24.6531 28.9789 24.5936 28.9658 24.5251 28.9508C24.3223 28.907 24.0456 28.8464 23.7816 28.7358C20.8544 27.508 18.3273 25.8746 16.2716 23.8797C14.1708 21.8418 12.5054 19.372 11.3202 16.5398C10.9111 15.5603 10.8931 14.6186 11.2716 13.8164C11.6636 12.987 12.4459 12.3586 13.5373 12.0014C13.9442 11.8594 14.3893 11.8607 14.7954 12.0049C15.7453 12.3446 17.9993 15.3383 18.0551 16.3327C18.1029 17.2095 17.4117 17.6667 17.0395 17.9125C16.3852 18.346 16.2644 18.8779 16.6366 19.6924C17.4063 21.3766 18.7527 22.6527 20.6363 23.4848C20.8347 23.5796 21.0516 23.6326 21.2725 23.6401C21.5907 23.6401 21.8493 23.4874 22.062 23.1732C22.5433 22.4649 23.1255 22.1051 23.7942 22.1051C24.2899 22.1051 24.8144 22.299 25.3984 22.6984L25.6823 22.8915L25.7214 22.9181C26.1644 23.2196 26.6214 23.5307 27.0521 23.8683ZM20.5759 16.1756C20.748 15.6894 21.2392 15.6771 21.4744 15.6718C22.0999 15.6569 22.7866 15.9746 23.3562 16.5381C23.9249 17.0998 24.2583 17.8054 24.2511 18.4268C24.2709 19.0227 24.0483 19.3518 23.5887 19.4045C23.56 19.408 23.5311 19.4097 23.5022 19.4098C23.121 19.4098 22.8227 19.1087 22.7785 18.6787C22.6839 17.7545 22.2089 17.2577 21.2852 17.1138C21.031 17.0734 20.7507 16.9997 20.6047 16.7627C20.5047 16.6004 20.4948 16.4038 20.5759 16.1756Z"
										fill="#202022" /></svg></a></li>
						<li><a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40ZM10.6244 18.7098L27.4576 12.1818C28.7156 11.6739 29.209 12.258 28.9197 13.5837L26.1326 26.8555C25.9202 27.9325 25.3832 28.3117 24.3963 27.7241L20.1471 24.5242L17.666 26.8851C17.3613 27.1503 16.8835 27.1478 16.6226 26.6142L16.9043 23.1586L25.8721 14.993C26.3743 14.5448 25.7906 14.4362 25.2205 14.8436L14.7791 21.3331L10.4607 19.953C9.71794 19.6226 9.94705 19.0138 10.6244 18.7098Z"
										fill="#202022" /></svg></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="info construction-services-info">
		<div class="container">
			<div class="info__full">
				<div class="info__title">Почему клиенты доверяют нам</div>
				<div class="info__text">
					<p><a href="/stroitelnye-uslugi">Услуги строительных</a> и отделочных работ требуют использования
						качественных материалов, согласованных с заказчиком. Чтобы декорирование прошло успешно
						составляется дизайнерский проект. Благодаря этому уменьшается время на планирование и основные
						работы.</p>
					<p>Нашими мастерами быстро решаются поставленные задачи, возникающие при отделочных работах в жилых
						и нежилых помещениях под ключ. Благодаря профессиональным навыкам и опыту сотрудников ООО
						«УМ-2020» все мероприятия проходят быстро в соответствии с условиями договора.</p>
					<p>Сотрудничество с нами подразумевает следующие преимущества для клиентов:</p>
				</div>
				<ul class="info__list">
					<li>Подготовку проекта после выезда прораба на объект для замеров. Эксперт посоветует разные
						варианты проведения отделочных работ. Клиент сможет выбрать подходящий.</li>
					<li>Заключение официального договора. В нём указывается фиксированная цена работ, а также условия
						важные для сторон сотрудничества.</li>
					<li>Бесплатную доставку материалов и оборудования. Всё необходимое наши сотрудники привезут с собой.
					</li>
				</ul>
				<div class="info__text">Благодаря опыту работы на рынке Республики Беларусь мы гарантируем отделку жилых
					и нежилых помещений на выгодных условиях. Чтобы заказать отделочные работы, достаточно связаться с
					менеджерами по телефону или оставить заявку.</div>
				<div class="info__call-button">Заказать звонок</div>
			</div>
		</div>
	</div>
	<div class="posts"><?php include('template-parts/posts-slider.php'); ?></div>
	<div class="reviews"><?php include('template-parts/reviews-slider.php'); ?></div>
</main>

<?php
get_sidebar();
get_footer();