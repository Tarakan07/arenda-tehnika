<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sss
 * 
 * Template Name: Service and repair
 */

get_header();
?>

<main>
  <div id="rent-banner" class="main-banner rent-banner service-and-repair-banner">
    <div class="container">
      <div class="main-banner__left">
        <h1 class="main-banner__title">Сервис и ремонт спецтехники</h1>
        <div class="main-banner__text">Капитальный ремонт спецтехники в Минске необходим в случае обнаружения серьезных
          поломок для обеспечения бесперебойной работы строительной, дорожной или другой компании. К сожалению, машины
          изнашиваются и ломаются в процессе эксплуатации. Для ремонта требуется профессиональный подход и
          диагностическое оборудование, имеющееся в ООО «УМ-2020». Также мы предлагаем комплексное обслуживание
          специализированных машин, замену технических жидкостей и расходных материалов.</div>
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
  <div class="conditions service-page-conditions">
    <div class="container">
      <div class="catalog__location"><a class="catalog__location-history" href="/">Главная</a> <img alt="loc-arrow"
          src="<?php echo get_template_directory_uri(); ?>/assets/images/loc-arrow.svg"> <span
          class="catalog__location-current">Сервис и ремонт спецтехники</span></div>
      <div class="conditions__top">
        <div class="conditions__text">
          <div class="conditions__title">Какая техника подлежит ремонту и обслуживанию</div>
          <p>Чтобы поддерживать рабочее техническое состояние транспорта важно регулярное проведение обслуживания и
            установки запасных частей, вышедших из строя.</p>
          <p>Наши механики и мотористы ремонтируют и обслуживают:</p>
          <ul class="info__list">
            <li>самосвалы и манипуляторы;</li>
            <li>автокраны и бензовозы;</li>
            <li>эвакуаторы и цементовозы;</li>
            <li>лесовозы и тралы;</li>
            <li>автофургоны и мусоровозы;</li>
            <li>экскаваторы и погрузчики;</li>
            <li>сельскохозяйственное оборудование.</li>
          </ul><img class="conditions__image mobile-box" alt="excavator"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/service-excavator.webp">
          <p>У наших сотрудников опыт и доступ к необходимым инструментам для того, чтобы ремонт и обслуживание
            спецтехники прошли быстро, результативно и недорого. Благодаря современному диагностическому оборудованию и
            стендам мы быстро выявим причину поломки и примем необходимые меры для её устранения. У нас есть необходимые
            запасные части, а в случае их отсутствия мы закажем комплектующие у официального дилера.</p>
          <div class="conditions__devider"></div>
          <div class="conditions__numbers">
            <div class="conditions__item">
              <div class="conditions__number"><span class="conditions__counter">30</span>+</div>
              <div class="conditions__item-text">Видов погрузчиков доступны для аренды</div>
            </div>
            <div class="conditions__item">
              <div class="conditions__number"><span class="conditions__counter">150</span>+</div>
              <div class="conditions__item-text">Видов погрузчиков доступны для аренды</div>
            </div>
            <div class="conditions__item">
              <div class="conditions__number"><span class="conditions__counter">500</span>+</div>
              <div class="conditions__item-text">Положительных отзывов от наших клиентов</div>
            </div>
          </div>
        </div>
        <div class="conditions__right"><img class="conditions__image" alt="excavator"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/service-excavator.webp"></div>
        <p class="conditions__text-mobile">Ищете место, в котором можно решить практически каждый вопрос из сферы
          строительства и благоустройства с использованием соответствующих технических приспособлений? Попали по адресу!
        </p>
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
  <div class="info service-page-info">
    <div class="container">
      <div class="info__left">
        <div class="info__title">Основные направления работ</div>
        <div class="info__text">Восстановление работоспособности дорожной, строительной и другой спецтехники требует
          комплексного подхода. В зависимости от поломки наши мотористы и механики отремонтируют:</div>
        <ul class="info__list">
          <li>двигательную установку;</li>
          <li>электрику;</li>
          <li>гидравлическую систему;</li>
          <li>трансмиссию;</li>
          <li>топливную аппаратуру.</li>
        </ul>
        <div class="info__text">Нами также выполняется ремонт навесного и прицепного оборудования, восстановление
          кузовов, ходовой части, электронных устройств, управляющих бортовых систем.</div>
        <a href="#ex1" rel="modal:open" class="info__call-button">Заказать звонок</a>
      </div>
      <div class="info__right">
        <div class="info__title">Правила осуществления ремонта</div>
        <div class="info__text">
          <p>Со временем даже надежному транспорту требуется ремонт. Продлить срок службы помогает своевременное
            обслуживание спецтехники и замена сломанных запасных частей. В ООО «УМ-2020» собран штат мотористов,
            механиков и мастеров по кузовным работам, способный починить гидравлику, электрику, двигатель и другие
            агрегаты.</p>
          <p>Мы занимаемся гарантийным ремонтом приобретённых у нас машин. Сотрудничество с нами подразумевает следующие
            мероприятия:</p>
        </div>
        <ul class="info__list">
          <li>выезд мастера по адресу заказчика или доставку техники в наш сервис-центр;</li>
          <li>проведение комплексных диагностических мероприятий для выявления причины поломки;</li>
          <li>доставку отсутствующих запчастей необходимых для ремонта транспорта.</li>
          <li>замену или восстановление сломанных узлов и агрегатов.</li>
        </ul>
        <div class="info__text">Мы используем персональный подход к каждому клиенту. Ремонт строительной спецтехники
          осуществляется с учетом модели и конструктивных особенностей строительных, дорожных, землеройных и других
          машин.</div>
      </div>
      <div class="info__full">
        <div class="info__title">Полный комплекс услуг</div>
        <div class="info__text">Мотористы, механики, кузовщики и другие профессионалы ООО «УМ-2020» оказывают полный
          комплекс услуг. По желанию клиентов они незамедлительно приступят к:</div>
        <div class="info__list-wrap">
          <ul class="info__list">
            <li>предпродажной подготовке спецтехники;</li>
            <li>гарантийному и послегарантийному ремонту;</li>
            <li>оказанию консультационной помощи;</li>
            <li>техническому обслуживанию;</li>
            <li>диагностике работоспособности важных узлов и агрегатов;</li>
            <li>замене или ремонту элементов ходовой части;</li>
            <li>установке дополнительного оборудования;</li>
          </ul>
          <ul class="info__list">
            <li>ремонту электрической проводки;</li>
            <li>починке коробки переключения передач;</li>
            <li>монтажу подогрева силовой установки;</li>
            <li>установке дополнительной защиты от угона;</li>
            <li>замене разбитых или треснувших стекол;</li>
            <li>замене или установке ходовых элементов гусеничных тракторов.</li>
          </ul>
        </div>
        <div class="info__text">Обращаясь к нам, клиенты могут рассчитывать на гарантированный результат работы
          сервисной службы. Ремонт спецтехники возможен по адресу клиента или в нашем сервисном центре. Всё зависит от
          сложности поломки и скорости работ.</div>
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
            <li><a href="#"><img alt="social-img"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/telegram-black.svg"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="info service-page-info">
    <div class="container">
      <div class="info__full">
        <div class="info__title">Профессиональный сервис</div>
        <div class="info__text info-long">ООО «УМ-2020» занимается, регламентным техническим обслуживанием в
          соответствии с требованиями и рекомендациями производителей специализированной техники. У нас необходимые
          инструменты, навыки и оборудование для проведения ремонта по гарантии и после её окончания.</div>
        <div class="info__subtitle">Сотрудничая с нами, клиенты могут рассчитывать на:</div>
        <div class="info__list-wrap">
          <ul class="info__list">
            <li>Капитальный ремонт спецтехники в сроки, установленные договором.</li>
            <li>Выезд сервисной службы на место проведения ремонтных работ.</li>
            <li>Контроль и проверку проведённого ремонта на диагностическом оборудовании.</li>
          </ul>
          <ul class="info__list">
            <li>Регулировку и настройку узлов и агрегатов.</li>
            <li>Плановую замену запасных частей и расходных материалов.</li>
            <li>Замену рабочих жидкостей в двигателе, трансмиссии и системе охлаждения.</li>
          </ul>
        </div>
        <div class="info__text info-long">Под сервисным обслуживанием специализированных строительных машин
          подразумевается периодическое прохождение комплексной диагностики с использованием специального оборудования.
          Ресурс работы машины определяется производителями и измеряется в моточасах. Планово-предупредительные работы
          по замене изношенных комплектующих, фильтров и технических жидкостей помогает увеличить срок службы
          транспорта.</div>
      </div>
      <div class="info__full">
        <div class="info__title">Почему клиенты доверяют нам</div>
        <div class="info__wrap">
          <div class="info__left">
            <div class="info__text">ООО «УМ-2020» предлагается организация ремонта спецтехники в Минске и других
              областях Республики Беларусь. У нас собственный склад запасных частей, европейское диагностическое
              оборудование и профессиональные электрики, мотористы и механики.</div>
            <div class="info__subtitle">Наша техническая база — это:</div>
            <ul class="info__list">
              <li>автомобили техпомощи, оснащенные всем необходимым для выездных работ;</li>
              <li>профессиональные сотрудники, прошедшие подготовку в соответствии с рекомендациями производителей
                спецтехники;</li>
              <li>компьютерное оборудование с программным обеспечением для диагностики неисправностей;</li>
              <li>собственный склад комплектующих, расходных материалов и технических жидкостей, рекомендованных
                производителями;</li>
              <li>проверенные поставщики запасных частей.</li>
            </ul>
            <div class="info__text">Благодаря квалификации, оперативной работе и опыту нашего штата профессионалов
              большинство ремонтов любой сложности не занимают больше 3 рабочих дней при наличии запчастей на складе.
            </div>
          </div>
          <div class="info__right">
            <div class="info__subtitle">У нас собственные производственные и ремонтные мощности, состоящие из:</div>
            <ul class="info__list">
              <li>участка, занимающегося переборкой силовых агрегатов и топливных систем;</li>
              <li>отдела по ремонту гидравлических цилиндров;</li>
              <li>участка по восстановлению работоспособности ходовой части;</li>
              <li>отдела по ремонту электрических элементов.</li>
            </ul>
            <div class="info__text">Грамотно укомплектованная техническая база помогает проводить сложные работы в
              кратчайшие сроки. Чтобы капитальный ремонт спецтехники или восстановление прошли результативно достаточно
              уточнить условия сотрудничества с нашими менеджерами по телефону или оставить заявку на сайте.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="posts service-page-posts"><?php include('template-parts/posts-slider.php'); ?></div>
  <div class="reviews"><?php include('template-parts/reviews-slider.php'); ?></div>
</main>

<?php
get_sidebar();
get_footer();