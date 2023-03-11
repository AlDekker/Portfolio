<?php $page_title = 'Тестовая страница'; ?>
<!-- 
  # В navbar скрыты профиль и кнопка logout
  # Добавлена кнопка авторизации steamauth 
  # Скрыта кнопка "обновить инвентарь"
  # Отключены табы
  # Добавлен вариант товара с вызовом модалки
-->

<?php include_once('template/head.php'); ?>

<!-- start navbar -->
<header class="header">
  <div class="header__container container container--wide">
    <a href="/" class="header__logo logo">
      <img class="logo__img" src="img/logo.png" srcset="img/logo@2x.png 2x" width="158" height="40" alt="Логотип TF2LAVKA.ru">
    </a>
    <div class="header-menu">
      <div class="header-menu__box">
        <div class="header-menu__header">
          <span>Меню</span>
          <button class="header-menu__close" type="button" aria-label="Закрыть меню">
            <img src="img/icons/arrow-right.svg" width="16" height="16" alt="">
          </button>
        </div>
        <nav class="header__nav nav">
          <ul class="nav__list">
            <li class="nav__item"><a class="nav__link" href="https://tf2lavka.ru/">Главная</a></li>
            <li class="nav__item"><a class="nav__link" href="https://tf2lavka.ru/">Рынок</a></li>
            <li class="nav__item"><a class="nav__link" href="https://tf2lavka.ru/">Инструкции</a></li>
            <li class="nav__item"><a class="nav__link" href="https://tf2lavka.ru/#reviews">Отзывы</a></li>
            <li class="nav__item"><a class="nav__link" href="https://tf2lavka.ru/#contacts">Контакты</a></li>
            <li class="nav__item header-dropdown"><a class="nav__link header-dropdown__arrow" href="https://tf2lavka.ru/">Пополнить STE Бота</a>
              <div class="header-dropdown__box">
                <div class="header-dropdown__content">
                  <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Рынок</a></li>
                    <li><a href="#">Инструкции</a></li>
                    <li><a href="#">Отзывы</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="header-menu__footer">
          <button class="logout-button" type="button">
            <svg class="logout-button__icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59a.996.996 0 0 0 0-1.41L12.2 7.7a.996.996 0 1 0-1.41 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0 1.41ZM19 3H5a2 2 0 0 0-2 2v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1v3c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2Z" />
            </svg>
            <span class="logout-button__label">Сменить пользователя</span>
          </button>
        </div>
      </div>
    </div>
    <div class="header__account">
      <div class="header__lang lang header-dropdown">
        <button class="lang__value lang__current header-dropdown__arrow" type="button">
          <img src="img/icons/langs/lang-ru.png" width="18" height="18" alt="">RU
        </button>
        <div class="header-dropdown__box">
          <div class="header-dropdown__content header-dropdown__content--lang">
            <a class="lang__value" href="#" hreflang="ru">
              <img src="img/icons/langs/lang-ru.png" alt="">
              RU
            </a>
            <a class="lang__value" href="#" hreflang="en">
              <img src="img/icons/langs/lang-ru.png" alt="">
              EN
            </a>
          </div>
        </div>
      </div>
      <!-- <div class="header__user">
        <div class="header__user-info">
          <div class="header__user-name">vasya123</div>
          <a class="header__user-link" href="#">Профиль</a>
        </div>
        <a href="#" class="header__user-avatar avatar">
          <img src="img/user-avatar.jpg" width="32" height="32" alt="Фото vasya123">
        </a>
      </div> -->
      <div class="header__cart header-dropdown">
        <button class="cart-button" type="button">
          <span class="cart-button__content">
            <span class="cart-button__count">11</span>
            <svg class="cart-button__icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6 16c-1.1 0-1.99.9-1.99 2S4.9 20 6 20s2-.9 2-2-.9-2-2-2Zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2Zm-8.9-5h7.45c.75 0 1.41-.41 1.75-1.03l3.38-6.13c.27-.48.09-1.09-.39-1.36a.997.997 0 0 0-1.35.39L14.55 9H7.53L3.54.57a.993.993 0 0 0-.9-.57H1C.45 0 0 .45 0 1s.45 1 1 1h1l3.6 7.59-1.35 2.44C3.52 13.37 4.48 15 6 15h11c.55 0 1-.45 1-1s-.45-1-1-1H6l1.1-2Z" />
            </svg>
          </span>
        </button>
        <div class="header-dropdown__box">
          <div class="header-dropdown__content">
            <span class="header-dropdown__title">У вас уже есть открытый заказ</span>
            <a class="button" href="#">Продолжить</a>
          </div>
        </div>
      </div>

      <!-- start steamauth -->
      <div class="header__steamauth">
      <?php
        if(!isset($_SESSION['steamid'])) {
            loginbutton();
        }  else {
            include ('template/steamauth/userInfo.php');
            echo '<div class="header-logout">
            <button class="header-logout logout-button" type="button" aria-label="Сменить пользователя">
              <svg class="logout-button__icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59a.996.996 0 0 0 0-1.41L12.2 7.7a.996.996 0 1 0-1.41 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0 1.41ZM19 3H5a2 2 0 0 0-2 2v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1v3c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2Z" />
              </svg>
            </button>
          </div>';
          // logoutbutton();
        }    
      ?> 
      </div>
      <!-- end steamauth -->

      <button class="header__hamburger hamburger" aria-label="Открыть мобильное меню" type="button">
        <svg class="hamburger__icon" width="18" height="12" viewBox="0 0 18 12" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M1 12h16c.55 0 1-.45 1-1s-.45-1-1-1H1c-.55 0-1 .45-1 1s.45 1 1 1Zm0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H1c-.55 0-1 .45-1 1s.45 1 1 1ZM0 1c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H1C.45 0 0 .45 0 1Z" />
        </svg>
      </button>
    </div>
  </div>
</header>
<!-- end navbar -->

<main class="main">

  <?php include_once('template/top.php') ?>

  <!-- start products -->
  <section class="section products">
    <div class="products__settings products__settings--bordered">
      <div class="container">
        <form class="products-options" action="#">
          <fieldset class="products-options__block products-options__action">
            <div class="visually-hidden">Направление торговли</div>
            <div class="switcher">
              <div class="switcher__option">
                <input id="pr-action-buy" class="switcher__input" type="radio" name="action" value="0" checked>
                <label class="switcher__label" for="pr-action-buy">Купить</label>
              </div>
              <div class="switcher__option">
                <input id="pr-action-sell" class="switcher__input" type="radio" name="action" value="1" checked>
                <label class="switcher__label" for="pr-action-sell">Продать</label>
              </div>
            </div>
          </fieldset>
  
          <fieldset class="products-options__block products-options__payments">
            <div class="products-options__caption" data-tooltip="Доступны: перевод, qiwi, usdt, оплата с баланса TM">Метод оплаты:</div>
            <button class="products-options__payments-select" type="button">
              Перевод по карте
            </button>
            <div class="products-options__payments-switcher switcher switcher--transparent">
              <div class="switcher__option">
                <input id="pr-payment-card" class="switcher__input" type="radio" name="payment" value="0" data-label="Перевод по карте" checked>
                <label class="switcher__label" for="pr-payment-card">Перевод по карте</label>
              </div>
              <div class="switcher__option">
                <input id="pr-payment-qiwi" class="switcher__input" type="radio" name="payment" value="1" data-label="QIWI">
                <label class="switcher__label" for="pr-payment-qiwi">QIWI</label>
              </div>
              <div class="switcher__option">
                <input id="pr-payment-usdt" class="switcher__input" type="radio" name="payment" value="2" data-label="USDT">
                <label class="switcher__label" for="pr-payment-usdt">USDT</label>
              </div>
              <div class="switcher__option">
                <input id="pr-payment-balance" class="switcher__input" type="radio" name="payment" value="3" data-label="Баланс TM">
                <label class="switcher__label" for="pr-payment-balance">Баланс TM</label>
              </div>
            </div>
          </fieldset>
        </form>
        <!-- <div class="products-tabs__controls">
          <ul>
            <li>
              <button class="products-tabs__toggle" data-target-id="dota2" type="button" aria-label="Dota 2">
                <img src="img/games/dota2.svg" alt="Логотип Dota 2">
              </button>
            </li>
            <li>
              <button class="products-tabs__toggle" data-target-id="csgo" type="button" aria-label="CS:GO">
                <img src="img/games/cs.svg" alt="Логотип CS:GO">
              </button>
            </li>
            <li>
              <button class="products-tabs__toggle" data-target-id="rust" type="button" aria-label="Rust">
                <img src="img/games/rust.svg" alt="Логотип rust">
              </button>
            </li>
            <li>
              <button class="products-tabs__toggle" data-target-id="team-fortress-2" type="button" aria-label="Team Fortress 2">
                <img src="img/games/team-fortress-2.svg" alt="Логотип Team Fortress 2">
              </button>
            </li>
            <li>
              <button class="products-tabs__toggle" data-target-id="steam" type="button" aria-label="Steam">
                <img src="img/games/steam.svg" alt="Логотип Steam">
              </button>
            </li>
          </ul>
        </div> -->
      </div>
    </div>
  
    <div class="section__content section__content--dark section__content--products">
      <header class="section__header container">
        <h2 class="section__title">Популярные предметы</h2>
        <!-- <div class="section__reload reload">
          <button class="reload__button active"><span>Обновить инвентарь</span></button>
          <p class="reload__info">Следующее обновление инвентаря доступно через <span>1:59</span></p>
        </div> -->
      </header>
  
      <!-- 
        products-grid - 3 колонки
        products-grid + products-grid--wide - 4 колонки
      -->
  
        <div  class="products-grid container">
  
          <div class="products-grid__item">
            <article class="product">
              <div class="product__thumb"><img src="img/product-thumb.png" loading="lazy" width="320" height="250" alt="Ключ Manifold Paradox Arcana Dota"></div>
    
              <div class="product__info">
                <h3 class="product__title">Вариант купить 1</h3>
                <div class="product__footer">
                  <div class="product__footer-left">
                    <div class="product__meta">
                      <div class="product__meta-item product__meta-item--cat">Dota 2</div>
                      <div class="product__meta-item product__meta-item--rest">12 в наличии</div>
                    </div>
    
                    <div class="product__price">1.21 <span>$</span></div>
                  </div>
    
                  <div class="product__footer-right">
                    <button class="product__button js-product__button" type="button">
                      Купить
                      <svg class="product__button-icon" width="16" height="8" viewBox="0 0 16 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.01 3H1c-.55 0-1 .45-1 1s.45 1 1 1h11.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71L12.86.85c-.31-.32-.85-.09-.85.35V3Z" />
                      </svg>
                    </button>
                    <form class="product__form" action="#">
                      <button class="product__add-all" type="button">Add all</button>
                      <div class="counter">
                        <button class="counter__button counter__dec" type="button" aria-label="Уменьшить количество"></button>
                        <input class="counter__input" type="text" value="1" data-min="1" data-max="4">
                        <button class="counter__button counter__inc" type="button" aria-label="Увеличить количество"></button>
                      </div>
                    </form>
    
                  </div>
                </div>
              </div>
            </article>
          </div>
    
          <div class="products-grid__item">
            <article class="product">
              <div class="product__thumb"><img src="img/product-thumb.png" loading="lazy" width="320" height="250" alt="Ключ Manifold Paradox Arcana Dota"></div>
    
              <div class="product__info">
                <h3 class="product__title">Вариант купить 2</h3>
                <div class="product__footer">
                  <div class="product__footer-left">
                    <div class="product__meta">
                      <div class="product__meta-item product__meta-item--cat">Dota 2</div>
                      <div class="product__meta-item product__meta-item--rest">12 в наличии</div>
                    </div>
    
                    <div class="product__price">1.21 <span>$</span></div>
                  </div>
    
                  <div class="product__footer-right">
                    <button data-toggle="modal" data-target="#metal-buy" type="button" class="product__button">
                      Купить
                      <svg class="product__button-icon" width="16" height="8" viewBox="0 0 16 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.01 3H1c-.55 0-1 .45-1 1s.45 1 1 1h11.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71L12.86.85c-.31-.32-.85-.09-.85.35V3Z" />
                      </svg>
                    </button>
                    <!-- <button class="product__button" data-modal="modal-keys" type="button">
                      Купить
                      <svg class="product__button-icon" width="16" height="8" viewBox="0 0 16 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.01 3H1c-.55 0-1 .45-1 1s.45 1 1 1h11.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71L12.86.85c-.31-.32-.85-.09-.85.35V3Z" />
                      </svg>
                    </button> -->
                  </div>
                </div>
              </div>
            </article>
          </div>

          <!-- Все товары -->
          <div class="products-grid__item--wide">
            <div class="products__more">
              <a class="products__more-link" href="#">
                Все товары
                <svg class="products__more-icon" width="16" height="8" viewBox="0 0 16 8" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12.01 3H1c-.55 0-1 .45-1 1s.45 1 1 1h11.01v1.79c0 .45.54.67.85.35l2.78-2.79c.19-.2.19-.51 0-.71L12.86.85c-.31-.32-.85-.09-.85.35V3Z" />
                </svg>
              </a>
            </div>
          </div>
    
        </div>
    </div>
  </section>
  <!-- end products -->

  <!-- start faq -->
  <section class="section section--black section--bordered">
    <div class="section__content">
      <header class="section__header container">
        <h2 class="section__title">Часто задаваемые вопросы (FAQ)</h2>
      </header>

      <div class="faq">
        <div class="faq__group container">
          <div class="faq__item">
            <button class="faq__question" type="button">
              Как пополнить баланс Steam через ключи от ящика Манн Ко?
            </button>
            <div class="faq__answer">
              Ключи — простой и быстрый способ пополнения баланса в Steam (актуально на март 2022). Для
              того закупаем необходимое количество ключей у нас на сайте и выставляем их на Торговую
              Площадку в Steam (не задирайте цену для быстрой продажи). После продажи ключей на Торговой
              Площадке, Steam зачисляет деньги Вам на баланс
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__question" type="button">
              На банковские карты каких стран можно получить платеж при продаже?
            </button>
            <div class="faq__answer">
              Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
              Единственное толку
              ты ведущими, курсивных мир дороге диких использовало свое строчка текст подпоясал силуэт
              которое домах
              за семантика не безорфографичный?
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__question" type="button">
              Как пользоваться сайтом жителям других стран?
            </button>
            <div class="faq__answer">
              Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
              Единственное толку
              ты ведущими, курсивных мир дороге диких использовало свое строчка текст подпоясал силуэт
              которое домах
              за семантика не безорфографичный?
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__question" type="button">
              Как покупать и продавать за <span class="qiwi-color">QIWI</span> без комиссии?
            </button>
            <div class="faq__answer">
              Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
              Единственное толку
              ты ведущими, курсивных мир дороге диких использовало свое строчка текст подпоясал силуэт
              которое домах
              за семантика не безорфографичный?
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__question" type="button">
              Будет ли комиссия при покупке/оплате за <span class="usdt-color">USDT</span>?
            </button>
            <div class="faq__answer">
              Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
              Единственное толку
              ты ведущими, курсивных мир дороге диких использовало свое строчка текст подпоясал силуэт
              которое домах
              за семантика не безорфографичный?
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__question" type="button">
              Почему при попытке создать заказ на покупку, перекидывает
              на страницу «У вас нет открытых заказов»?
            </button>
            <div class="faq__answer">
              Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
              Единственное толку
              ты ведущими, курсивных мир дороге диких использовало свое строчка текст подпоясал силуэт
              которое домах
              за семантика не безорфографичный?
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__question" type="button">
              У меня подключено несколько банков к СБП. На какой придет платеж?
            </button>
            <div class="faq__answer">
              Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
              Единственное толку
              ты ведущими, курсивных мир дороге диких использовало свое строчка текст подпоясал силуэт
              которое домах
              за семантика не безорфографичный?
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__question" type="button">
              При продаже вещей за баланс ТМ сайт просит меня
              указать мой API-ключ. Безопасно ли это?
            </button>
            <div class="faq__answer">
              Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
              Единственное толку
              ты ведущими, курсивных мир дороге диких использовало свое строчка текст подпоясал силуэт
              которое домах
              за семантика не безорфографичный?
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__question" type="button">
              Как совершить перевод баланса TM через API?
            </button>
            <div class="faq__answer">
              Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
              Единственное толку
              ты ведущими, курсивных мир дороге диких использовало свое строчка текст подпоясал силуэт
              которое домах
              за семантика не безорфографичный?
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end faq -->

  <!-- start reviews -->
  <section class="section section--tight">
    <div class="section__content section__content--dark">
      <header class="section__header container">
        <h2 class="section__title">Отзывы</h2>
      </header>

      <div class="reviews container">
        <div class="reviews__grid">
          <div class="reviews__item">
            <div class="review">
              <div class="review__header">
                <div class="review__author">
                  <div class="review__photo avatar">
                    <img width="64" height="64" src="img/user-avatar.jpg" loading="lazy" alt="Vasya123">
                  </div>
                  <div class="review__descr">
                    <span class="review__name">Vasya123</span>
                    <div class="review__rating">
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star"></span>
                    </div>
                  </div>
                </div>
                <div class="review__meta">
                  <div class="review__meta-item">
                    <span class="review__meta-label">Order number</span>
                    <span class="review__meta-value">#129312094</span>
                  </div>
                  <div class="review__meta-item">
                    <span class="review__meta-label">Date</span>
                    <span class="review__meta-value">01.01.2021 18:37</span>
                  </div>
                </div>
              </div>
              <div class="review__content">
                <p>
                  Большой выбор завтраков! Безглютеновые десерты, без сахара - это прекрасно. Были семьей из 5 человек и всем все понравилось. 
                </p>
              </div>
            </div>
          </div>
          <div class="reviews__item">
            <div class="review">
              <div class="review__header">
                <div class="review__author">
                  <div class="review__photo avatar">
                    <img width="64" height="64" src="img/user-avatar.jpg" loading="lazy" alt="Vasya123">
                  </div>
                  <div class="review__descr">
                    <span class="review__name">Vasya123</span>
                    <div class="review__rating">
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star"></span>
                    </div>
                  </div>
                </div>
                <div class="review__meta">
                  <div class="review__meta-item">
                    <span class="review__meta-label">Order number</span>
                    <span class="review__meta-value">#129312094</span>
                  </div>
                  <div class="review__meta-item">
                    <span class="review__meta-label">Date</span>
                    <span class="review__meta-value">01.01.2021 18:37</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="reviews__item">
            <div class="review">
              <div class="review__header">
                <div class="review__author">
                  <div class="review__photo avatar">
                    <img width="64" height="64" src="img/user-avatar.jpg" loading="lazy" alt="Vasya123">
                  </div>
                  <div class="review__descr">
                    <span class="review__name">Vasya123</span>
                    <div class="review__rating">
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star"></span>
                    </div>
                  </div>
                </div>
                <div class="review__meta">
                  <div class="review__meta-item">
                    <span class="review__meta-label">Order number</span>
                    <span class="review__meta-value">#129312094</span>
                  </div>
                  <div class="review__meta-item">
                    <span class="review__meta-label">Date</span>
                    <span class="review__meta-value">01.01.2021 18:37</span>
                  </div>
                </div>
              </div>
              <div class="review__content">
                <p>
                  Большой выбор завтраков! Безглютеновые десерты, без сахара - это прекрасно. Были семьей из 5 человек и всем все понравилось. 
                </p>
              </div>
            </div>
          </div>
          <div class="reviews__item">
            <div class="review">
              <div class="review__header">
                <div class="review__author">
                  <div class="review__photo avatar">
                    <img width="64" height="64" src="img/user-avatar.jpg" loading="lazy" alt="Vasya123">
                  </div>
                  <div class="review__descr">
                    <span class="review__name">Vasya123</span>
                    <div class="review__rating">
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star checked"></span>
                      <span class="review__rating-star"></span>
                    </div>
                  </div>
                </div>
                <div class="review__meta">
                  <div class="review__meta-item">
                    <span class="review__meta-label">Order number</span>
                    <span class="review__meta-value">#129312094</span>
                  </div>
                  <div class="review__meta-item">
                    <span class="review__meta-label">Date</span>
                    <span class="review__meta-value">01.01.2021 18:37</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="reviews__item reviews__item--wide">
            <?php include_once('template/pagination.php') ?>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end reviews -->

</main>

<?php include_once('template/footer.php') ?>