<?php // require ('steamauth/steamauth.php'); ?>

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
      <div class="header__user">
        <div class="header__user-info">
          <div class="header__user-name">vasya123</div>
          <a class="header__user-link" href="#">Профиль</a>
        </div>
        <a href="#" class="header__user-avatar avatar">
          <img src="img/user-avatar.jpg" width="32" height="32" alt="Фото vasya123">
        </a>
      </div>
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
      <!-- <div class="header__steamauth">
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
        </div> -->
        <!-- end steamauth -->

      <div class="header__logout">
        <button class="logout-button" type="button" aria-label="Сменить пользователя">
          <svg class="logout-button__icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59a.996.996 0 0 0 0-1.41L12.2 7.7a.996.996 0 1 0-1.41 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0 1.41ZM19 3H5a2 2 0 0 0-2 2v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1v3c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2Z" />
          </svg>
        </button>
      </div>

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