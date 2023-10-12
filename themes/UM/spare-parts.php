<?php
/**
* Template Name: Запчасти
*/

get_header();
?>


<main>
	<div class="catalog">
		<div class="container">
			<div class="breadcrumbs">
				<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
			</div>
			<h1 class="catalog__title"><?php the_title(); ?></h1>
			<div class="catalog__top">
				<form class="catalog__search-group"><input name="search-query" type="text" placeholder="Поиск спецтехники"
						value="<?php echo $_GET['search-query'] ?>"> <button type="submit">Искать</button></form>
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
		foreach ( $terms as $term ) : 
			if ($term->slug != 'no-category') {
				$taxonomy = 'category';

				$children = get_terms( 
					$term->taxonomy, array(
						'parent' => $term->term_id,
						'hide_empty' => false
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
				</div><?php echo do_shortcode('[um-products]') ?>
			</div>
		</div>
	</div>
	<div class="consultation-form catalog-page-consultation">
		<div class="container">
			<?php echo do_shortcode('[contact-form-7 id="2289" title="Получить консультацию"]'); ?>
		</div>
	</div>
	<?php theme_sidebar( 'left' ); ?>
	<div class="conditions catalog-page-conditions">
		<div class="container">
			<div class="conditions__top">
				<div class="conditions__text">
					<div class="conditions__title">Определение</div>
					<p>Когда надо проложить новую теплотрассу (в том числе и вместо старой), построить дом, выполнить другие
						работы из сферы строительства, то потребуется специальная техника вроде экскаваторов, бульдозеров, кранов,
						погрузчиков, самосвалов. Эта специальная техника тоже может выйти из строя в самый неподходящий момент,
						когда на носу – сдача проекта. Если с ним затянуть, то будут высокие штрафы. Но дело даже не в них.
						Подпортится репутация компании, снизится у неё количество клиентов. Как итог – недобор финансовых средств с
						возможным последующим закрытием организации.</p>
					<p>Чтобы не допустить такого сценария, требуется заранее купить запчасти для спецтехники. Не секрет, что лучше
						их приобретать в организациях, которые давно работают на этом рынке и имеют хорошую репутацию. У таких
						структур риск нарваться на некачественный товар – минимальный. Они дорожат своими именем и не станут
						рисковать ради сиюминутной выгоды.</p>
					<p class="mobile-box">В зависимости от сферы применения спецтехника, взятая в аренду в ООО «УМ-2020»
						отличается по техническим характеристикам, габаритам и внешнему виду. Любая спецтехника спроектирована для
						конкретного рода работ, поэтому при выборе важна их классификация.</p>
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
				</div>
				<div class="conditions__right">
					<p>К таким компаниям относится УМ-2020. Одно из направлений деятельности управления механизации – продажа
						запчастей для строительной техники. У нас все запасные части прошли многоступенчатую проверку, прежде чем
						попасть на прилавок. Мы предлагаем купить запчасти для экскаватора, бульдозера и другой специальной техники.
						С нами эти машины не простоят у вас долго без дела после выхода из строя. Мы поможем оперативно в подборе
						необходимой запасной части.</p>
					<img class="conditions__image" alt="excavator"
						src="<?php echo get_template_directory_uri(); ?>/assets/images/spare-parts-img.png">
				</div>
			</div>
		</div>
	</div>
	<div class="varieties">
		<div class="container">
			<div class="varieties__title spare__title">Почему купить запчасти для спецтехники у нас выгодно?</div>
			<div class="varieties__text">На этот вопрос можно дать сразу несколько ответов:</div>
			<ul class="varieties__list">
				<li>наше предложение – это оригинальные запасные части по приемлемой стоимости. Мы знаем цену нашей продукции и
					никогда её не «задираем» вверх с целью нажиться на покупателе. Наоборот, так можно быстро лишиться последнего
					потребителя;</li>
				<li>у нас продажа запчастей для строительной техники является одним из приоритетных направлений в деятельности
					компании. Можно купить запчасти для бульдозера и остальной строительной специальной техники прямо со склада.
					Случается, что какая-то позиция может отсутствовать на складе. В такой ситуации мы обязуемся под гарантию
					компании поставить её в согласованные с Вами сроки;</li>
				<li>если клиент – постоянный, то он может воспользоваться дополнительными выгодными преференциями, когда
					пожелает купить запчасти для экскаватора или другой строймашины.</li>
			</ul>
			<div class="varieties__text spare__text">Мы предлагаем купить запчасти для спецтехники от проверенных
				производителей, имена
				которых на слуху у большинства строителей, водителей. То есть высокое качество каждого товара – гарантировано. И
				приобрести его может каждый белорус, так как мы работаем по всей территории республики. Готовы доставить
				запасные части на определённых условиях в любую точку Беларуси!
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
	<div class="varieties">
		<div class="container">
			<div class="varieties__title spare__title">Запчасти для экскаваторов</div>
			<div class="varieties__text">Обычно экскаваторы не преодолевают больших расстояний. Однако ходовая система нередко
				даёт сбой в работе. Износиться могут:</div>
			<ul class="varieties__list">
				<li>гусеничные цепи;</li>
				<li>башмак;</li>
				<li>каток поддерживающего типа;</li>
				<li>отвечающий за натяжение цепей механизм;</li>
				<li>звёздочки;</li>
				<li>элементы гусеничной ленты.</li>
			</ul>
			<div class="varieties__text spare__text">Все эти запасные части (как и многие другие) есть в необходимом
				количестве на нашем складе. Если вдруг какой-то позиции нет, то мы позаботимся о том, чтобы она там оказалась
				как можно быстрее.
			</div>
		</div>
	</div>

	<div class="spare-info">
		<div class="container">
			<h3 class="title">О причинах, побуждающих купить запчасти для спецтехники</h3>
			<div class="spare-info__content">
				<div class="content__left">
					<p class="left__top">Если верить статистической информации, то в восьмидесяти процентах эпизодов с отказами
						в работе специальной
						техники в республике основная причина – это пришедшие в негодность из-за высокой степени изношенности
						элементы. Когда они разрушаются в системе самой машины, то её начинает заклинивать. А это сулит большие
						неприятности в виде заклинивания. Если такое произошло, то надо срочно менять деталь на запасную.</p>
					<p class="subtitle">Вот неблагоприятные факторы, которые содействуют учащению износа отдельных деталей:</p>
					<ul>
						<li>нарушаются условия эксплуатации техники. Речь о превышении грузоподъёмности, несоблюдении рабочих
							режимов и так далее;</li>
						<li>применение ГСМ качества, которое даже средним не является;</li>
						<li>не проводится должным образом техобслуживание транспорта;</li>
						<li>низкая квалификация тех работников, которые должны обслуживать спецмашины;</li>
						<li>строительная площадка имеет рельеф, не подходящий для работы экскаваторов.</li>
					</ul>
					<p class="spare-info__bottom">Но чаще всего необходимость купить запчасти для спецтехники в «УМ 2020»
						возникает
						тогда, когда срабатывает совокупность факторов: долгое время используется моторное масло, которое вообще не
						предназначено для этой техники и срочно требует замены, либо повышенные мощности экскаваторов, бульдозеров
						включаются тогда, когда в них нет особой необходимости.</p>
				</div>
				<div class="content__right">
					<p class="right__top">Чтобы эти неприятности не преследовали технику, стоит обратиться к профессионалам за
						техническим обслуживанием строительной техники. Они помогут своевременно заменить пришедшие в негодное
						состояние компоненты. Необходимость в подобных вещах можно определить по следующим признакам:</p>
					<ul>
						<li>топлива расходуется больше, чем надо (это касается и других горюче-смазочных материалов);</li>
						<li>во время работы техники возникают нехарактерные для неё звуки — что-то скрежещет, шумит, лязгает;</li>
						<li>рабочие системы, в том числе двигатель, часто перегреваются.</li>
					</ul>
					<p class="spare-info__bottom">Если один из вышеназванных факторов появляется, то не стоит медлить — надо сразу
						обращаться к опытным специалистам, которые могли бы провести техобслуживание. А также стоит купить запчасти
						для спецтехники согласно их рекомендациям. Только так можно сохранить машины,
						вернуть им былую производительность. Если спецтранспорт работает неправильно, то это может привести не
						только к скорейшему выходу его из строя, но и к проблемам со здоровьем у людей, её эксплуатирующих или
						находящихся на одной площадке. Соответственно, возникает риск появления ситуаций травмоопасного характера.
					</p>
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