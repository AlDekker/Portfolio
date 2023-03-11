<section class="top-screen" style="background-image: url(img/top-screen-bg-ste.jpg);">
  <div class="top-screen__container container">
    <div class="top-screen__info">
      <div class="top-screen__breadcrumbs breadcrumbs">
        <ul class="breadcrumbs__list">
          <li class="breadcrumbs__item">
            <a href="/">Главная</a>
          </li>
          <li class="breadcrumbs__item">
            <span>
              <?= $page_title ?>
            </span>
          </li>
        </ul>
      </div>
      <h1 class="top-screen__title">
        Инструменты для безопасного заработка в Steam
      </h1>
      <p class="top-screen__descr">
        Максимальная прибыль при торговле, гибкие и лёгкие настройки, низкие цены без привязки к обороту.
      </p>
      <a class="top-screen__button button" href="#">Подробнее</a>
    </div>
    <div class="top-screen__media top-screen__media--image">
      <img class="top-screen__image" src="img/ste-screenshot.png" alt="Скриншот">
    </div>
  </div>
</section>

<section class="section">
  <div class="section__content">
    <div class="container">
      <div class="ste">
        <div class="ste__sidebar">
          <article class="product product--sm-row box">
            <div class="product__thumb"><img src="img/product-thumb.png" loading="lazy" width="320" height="250" alt="Ключ Manifold Paradox Arcana Dota"></div>

            <div class="product__info">
              <h3 class="product__title">Manifold Paradox Arcana Dota</h3>
              <p class="product__descr">
                <span>Начисляем 115.54₽ за 1 ключ</span>
                Количество ключей, которое можем принять сейчас: 500
              </p>
            </div>
          </article>
        </div>
        <div class="ste__content">
          <div class="box">
            <form class="form form-ste" action="#">
              <h2 class="form__title">
                Пополнение баланса STE Ключами от ящика Манн Ко
              </h2>
              <div class="form__row">
                <div class="form__caption">
                  <label class="form__label" for="ste__link">
                    Нажмите <a href="#">сюда</a> для того, чтобы найти вашу трейд ссылку
                  </label>
                </div>
                <div class="form__field form__field--icon">
                  <input id="ste__link" class="form__input" type="text" name="ste__link" placeholder="Вставьте вашу трейд ссылку" required>
                </div>
              </div>
              <div class="form__row">
                <div class="form__caption">
                  <label class="form__label" for="ste__id">
                    Ваш <a href="#">уникальный ID STE</a> для начисления
                  </label>
                </div>
                <div class="form__field">
                  <input id="ste__id" class="form__input" type="text" name="ste__id" placeholder="Вставьте ID STE" required>
                </div>
              </div>
              <div class="form__row">
                <div class="form__caption">
                  <label class="form__label" for="ste__keys">
                    Укажите количество ключей
                  </label>
                </div>
                <div class="form__field">
                  <input id="ste__keys" class="form__input" type="text" name="ste__id" placeholder="Максимум 500 ключей за одну сделку" required>
                </div>
              </div>
              <div class="form__row">
                <div class="form-ste__footer">
                  <div class="form__result">
                    <span class="form__label">Итого:</span>
                    <strong class="form__result-value">2902.62 <span>₽</span></strong>
                  </div>
                  <div class="form-ste__button">
                    <button class="button">Пополнить</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>