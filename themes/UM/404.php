<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sss
 */

get_header();
?>

<main>
	<div class="container">
		<section class="page-404">
			<div class="page-404-text">
				<h1 class="page-404-title">Ой!</h1>
				<h2 class="page-404-subtitle">Добро пожаловать на «страницу 404» нашего сайта.</h2>
				<p class="page-404-cause">К сожалению, введенный Вами адрес недоступен. Этому может быть несколько объяснений:
				</p>
				<ul class="page-404-cause-list">
					<li class="page-404-cause-item">Страница удалена (из-за утраты актуальности информации)</li>
					<li class="page-404-cause-item">Страница перенесена в другое место</li>
					<li class="page-404-cause-item">Возможно, при вводе адреса была пропущена какая-то буква (на самом деле, у
						нас самих так часто получается)</li>
				</ul>
				<p class="page-404-sections">Тем не менее, предлагаем Вам посетить другие разделы нашего сайта:</p>
				<ul class="page-404-sections-list">
					<li class="page-404-sections-item"><a href="/">Главная</a></li>
					<li class="page-404-sections-item"><a href="/o-nas/">О нас</a></li>
					<li class="page-404-sections-item"><a href="/kontakty/">Контакты</a></li>
					<li class="page-404-sections-item"><a href="/arenda-spectehniki/">Аренда</a></li>
					<li class="page-404-sections-item"><a href="/prodazha-spectehniki/">Продажа</a></li>
					<li class="page-404-sections-item"><a href="/stroitelnye-uslugi/">Услуги</a></li>
					<li class="page-404-sections-item"><a href="/servis-i-remont-spectehniki/">Сервис</a></li>
					<li class="page-404-sections-item"><a href="/">Карта сайта</a></li>
				</ul>
			</div>
			<div class="page-404-img">
				<img alt="excavator" src="<?php echo get_template_directory_uri(); ?>/assets/images/selling-excavator.webp">
			</div>
		</section>
	</div>
</main>

<?php
get_footer();