<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sss
 * 
 * Template Name: Product page
 */

get_header();
?>


<main>
  <div class="product-page">
    <div class="product-page__main">
      <div class="container">
        <div class="catalog__location"><a class="catalog__location-history" href="/">Главная</a> <img alt="loc-arrow"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <a
            class="catalog__location-history" href="/arenda-spectehniki">Аренда спецтехники</a> <img alt="loc-arrow"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <a
            class="catalog__location-history" href="/arenda-spectehniki">Фронтальный погрузчик</a> <img alt="loc-arrow"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <span
            class="catalog__location-current">Фронтальный погрузчик АМКОДОР 332 С4</span></div>
        <div class="product-page__wrap">
          <div class="product-page__main-image"></div>
          <div class="product-page__main-info">
            <h1 class="product-page__main-title">Экскаватор-погрузчик Venieri VF 10.23C</h1>
            <div class="product-page__options">
              <div class="product-page__option">
                <div class="product-page__key">Глубина копания</div>
                <div class="product-page__value">5 м</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Максимальная высота выгрузки</div>
                <div class="product-page__value">3,7 м</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Максимальная глубина копания</div>
                <div class="product-page__value">6 м</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Мощность двигателя</div>
                <div class="product-page__value">117 л.с.</div>
              </div>
            </div>
            <div class="product-page__bottom">
              <div class="product-page__price">60 бел.руб. без НДС</div>
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
        <div class="product-page__info-wrap">
          <div class="product-page__description">
            <div class="product-page__title">Описание</div>
            <div class="product-page__text">
              <p>Еще одна разработка компании Venieri - экскаватор-погрузчик VF 10.23C. Про него говорят, что это две
                машины в одной. Эта машина, которая спереди кажется полноценным погрузчиком, а сзади выглядит как
                экскаватор, может работать и прекрасно проявлять свои способности там, где не могут другие. Прежде
                всего, это происходит благодаря наличию сочлененной рамы и гидростатической трансмиссии.</p>
            </div>
            <div class="product-page__subtitle">Преимущества экскаватора с сочлененной рамой</div>
            <div class="product-page__text">
              <p>Еще одна разработка компании Venieri - экскаватор-погрузчик VF 10.23C. Про него говорят, что это две
                машины в одной. Эта машина, которая спереди кажется полноценным погрузчиком, а сзади выглядит как
                экскаватор, может работать и прекрасно проявлять свои способности там, где не могут другие. Прежде
                всего, это происходит благодаря наличию сочлененной рамы и гидростатической трансмиссии.</p>
              <p>Уменьшенная габаритная длина машины и низкий центр тяжести обеспечиваются расположением двигателя
                поперечно под кабиной. Такое расположение двигателя позволяет экскаватору достаточно близко подъезжать к
                самосвалу для выгрузки.</p>
              <p>Машина устойчива даже на сложных поворотах за счет того, что ковш погрузчика располагается
                перпендикулярно по отношению к осям передних колес. Экскаватор-погрузчик VF 10.23C наделен способностью
                работать с навесным оборудованием любых типов.</p>
            </div>
            <div class="product-page__subtitle">Дополнительное оборудование</div>
            <ul class="product-page__list">
              <li>Гидромолот</li>
              <li>Вилы 1300 мм</li>
              <li>Земляной бур 300 мм (глубина бурения 3000 мм)</li>
            </ul>
          </div>
          <div class="product-page__characteristics">
            <div class="product-page__title">Характеристики</div>
            <div class="product-page__options">
              <div class="product-page__option">
                <div class="product-page__key">Мощность двигателя</div>
                <div class="product-page__value">117 л.с.</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Эксплуатационная масса</div>
                <div class="product-page__value">9000 кг</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Скорость передвижения</div>
                <div class="product-page__value">40 км/ч</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Объем переднего (фронтального) универсального ковша 4 в 1</div>
                <div class="product-page__value">1,3 м³</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Ширина переднего (фронтального) универсального ковша 4 в 1</div>
                <div class="product-page__value">2350 мм</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Грузоподьемность переднего (фронтального) универсального ковша 4 в 1
                </div>
                <div class="product-page__value">3200 кг</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Грузоподъемность на задней лопате</div>
                <div class="product-page__value">1500 кг</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Глубина копания (без использования телескопа)</div>
                <div class="product-page__value">5000 мм</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Глубина копания (с использованием телескопа)</div>
                <div class="product-page__value">6000 мм</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Объем ковша задней лопаты</div>
                <div class="product-page__value">0,33 м³</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Ширина ковша задней лопаты</div>
                <div class="product-page__value">600 мм</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Максимальная длина</div>
                <div class="product-page__value">6000 мм</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Максимальная ширина</div>
                <div class="product-page__value">2350 мм</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Ширина между колес</div>
                <div class="product-page__value">2100 мм</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Ширина колеи</div>
                <div class="product-page__value">1650 мм</div>
              </div>
              <div class="product-page__option">
                <div class="product-page__key">Максимальная высота</div>
                <div class="product-page__value">3700 мм</div>
              </div>
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
          <div class="product-page__similar-item">
            <div class="product-page__card">
              <div class="product-page__card-image"></div>
              <div class="product-page__card-info">
                <div class="product-page__card-title">Колесный экскаватор Caterpillar M318D</div>
                <div class="product-page__card-options">
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Эксплуатационная масса</div>
                    <div class="product-page__card-value">20 т</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Глубина копания</div>
                    <div class="product-page__card-value">6,3 м</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Объем ковша</div>
                    <div class="product-page__card-value">1,3 м³</div>
                  </div>
                </div>
              </div>
              <div class="card__bottom">
                <div class="product-page__card-price">60 бел.руб. без НДС</div><a href="#"
                  class="product-page__card-button">Заказать</a>
              </div>
            </div>
          </div>
          <div class="product-page__similar-item">
            <div class="product-page__card">
              <div class="product-page__card-image"></div>
              <div class="product-page__card-info">
                <div class="product-page__card-title">Колесный экскаватор Caterpillar M318D</div>
                <div class="product-page__card-options">
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Эксплуатационная масса</div>
                    <div class="product-page__card-value">20 т</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Глубина копания</div>
                    <div class="product-page__card-value">6,3 м</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Объем ковша</div>
                    <div class="product-page__card-value">1,3 м³</div>
                  </div>
                </div>
              </div>
              <div class="card__bottom">
                <div class="product-page__card-price">60 бел.руб. без НДС</div><a href="#"
                  class="product-page__card-button">Заказать</a>
              </div>
            </div>
          </div>
          <div class="product-page__similar-item">
            <div class="product-page__card">
              <div class="product-page__card-image"></div>
              <div class="product-page__card-info">
                <div class="product-page__card-title">Колесный экскаватор Caterpillar M318D</div>
                <div class="product-page__card-options">
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Эксплуатационная масса</div>
                    <div class="product-page__card-value">20 т</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Глубина копания</div>
                    <div class="product-page__card-value">6,3 м</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Объем ковша</div>
                    <div class="product-page__card-value">1,3 м³</div>
                  </div>
                </div>
              </div>
              <div class="card__bottom">
                <div class="product-page__card-price">60 бел.руб. без НДС</div><a href="#"
                  class="product-page__card-button">Заказать</a>
              </div>
            </div>
          </div>
          <div class="product-page__similar-item">
            <div class="product-page__card">
              <div class="product-page__card-image"></div>
              <div class="product-page__card-info">
                <div class="product-page__card-title">Колесный экскаватор Caterpillar M318D</div>
                <div class="product-page__card-options">
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Эксплуатационная масса</div>
                    <div class="product-page__card-value">20 т</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Глубина копания</div>
                    <div class="product-page__card-value">6,3 м</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Объем ковша</div>
                    <div class="product-page__card-value">1,3 м³</div>
                  </div>
                </div>
              </div>
              <div class="card__bottom">
                <div class="product-page__card-price">60 бел.руб. без НДС</div><a href="#"
                  class="product-page__card-button">Заказать</a>
              </div>
            </div>
          </div>
          <div class="product-page__similar-item">
            <div class="product-page__card">
              <div class="product-page__card-image"></div>
              <div class="product-page__card-info">
                <div class="product-page__card-title">Колесный экскаватор Caterpillar M318D</div>
                <div class="product-page__card-options">
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Эксплуатационная масса</div>
                    <div class="product-page__card-value">20 т</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Глубина копания</div>
                    <div class="product-page__card-value">6,3 м</div>
                  </div>
                  <div class="product-page__card-option">
                    <div class="product-page__card-key">Объем ковша</div>
                    <div class="product-page__card-value">1,3 м³</div>
                  </div>
                </div>
              </div>
              <div class="card__bottom">
                <div class="product-page__card-price">60 бел.руб. без НДС</div><a href="#"
                  class="product-page__card-button">Заказать</a>
              </div>
            </div>
          </div>
        </div>
        <div class="similar__bar">
          <div class="similar__scroller"></div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
get_sidebar();
get_footer();