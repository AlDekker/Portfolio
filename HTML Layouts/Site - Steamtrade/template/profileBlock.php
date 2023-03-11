<div class="profile">
  <div class="container">
    <div class="page__grid profile__content">
      <div class="page__col profile__balance-nav balance-nav">
        <button class="balance-nav__btn balance-nav__btn--prev" data-slider-to="#profile-balance" type="button">
          <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="m.9946 10.1649 3.88-3.88-3.88-3.88a.9959.9959 0 0 1 0-1.41c.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41l-4.59 4.59c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42Z" />
          </svg>
          USDT
        </button>
        <button class="balance-nav__btn balance-nav__btn--next" data-slider-to="#profile-balance" type="button">
          RUB TM
          <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="m.9946 10.1649 3.88-3.88-3.88-3.88a.9959.9959 0 0 1 0-1.41c.39-.39 1.02-.39 1.41 0l4.59 4.59c.39.39.39 1.02 0 1.41l-4.59 4.59c-.39.39-1.02.39-1.41 0-.38-.39-.39-1.03 0-1.42Z" />
          </svg>
        </button>
      </div>
      <div class="page__col page__sidebar">
        <section class="profile__balance balance box">
          <div id="profile-balance" class="swiper slider">
            <div class="swiper-wrapper slider__wrapper">
              <div class="swiper-slide slider__item">
                <div class="box__header">
                  <div class="box__title">Баланс <span>USD</span></div>
                </div>
                <div class="balance__content">
                  <strong class="balance__value">2000 <span>$</span></strong>
                  <button class="balance__top-up button" type="button">Пополнить</button>
                </div>
              </div>
              <div class="swiper-slide slider__item">
                <div class="box__header">
                  <div class="box__title">Баланс <span>RUB</span></div>
                </div>
                <div class="balance__content">
                  <strong class="balance__value">2000 <span>₽</span></strong>
                  <button class="balance__top-up button" type="button">Пополнить</button>
                </div>
              </div>
              <div class="swiper-slide slider__item">
                <div class="box__header">
                  <div class="box__title">Баланс <span>RUB</span></div>
                </div>
                <div class="balance__content">
                  <strong class="balance__value">2000 <span>₽</span></strong>
                  <button class="balance__top-up button" type="button">Пополнить</button>
                </div>
              </div>
            </div>
            <div class="swiper-pagination slider__pagination"></div>
          </div>
        </section>

        <section class="profile__level level box">
          <header class="box__header">
            <h2 class="box__title">Ваш уровень</h2>
          </header>
          <h3 class="level__value">Начальный</h3>
          <div class="level__progress progress">
            <h4 class="progress__title">До нового уровня еще N сделок</h4>
            <div class="progress__line">
              <span style="width: 60%"></span>
            </div>
          </div>
          <div class="table-wrapper">
            <table class="level__table">
              <thead>
                <tr>
                  <th>Уровень</th>
                  <th>Условие</th>
                  <th>Скидка</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Начальный уровень</td>
                  <td>До 10 сделок</td>
                  <td>15%</td>
                </tr>
                <tr>
                  <td>Начальный уровень</td>
                  <td>До 10 сделок</td>
                  <td>15%</td>
                </tr>
                <tr>
                  <td>Начальный уровень</td>
                  <td>До 10 сделок</td>
                  <td>15%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
      <div class="page__col page__content">
        <section class="box">
          <header class="box__header">
            <h2 class="box__title">Промокод</h2>
          </header>
          <form action="#" class="form">
            <div class="form__row">
              <div class="form__field form__field--button">
                <input class="form__input" type="text" placeholder="Введите промокод">
                <button class="form__field-button button" type="submit">Применить</button>
              </div>
            </div>
          </form>
        </section>

        <section class="box">
          <header class="box__header">
            <h2 class="box__title">Ваша реферальная ссылка</h2>
          </header>
          <form action="#" class="form">
            <div class="form__row">
              <div class="form__field form__field--icon">
                <input class="form__input" type="text"
                  value="https://steamcommunity.com/tradeoffer/new/?partner=xxxxxxx&token=xxxxxxxxxxx" readonly></div>
            </div>
          </form>
        </section>

        <section class="box">
          <header class="box__header">
            <div class="box__header-col">
              <h2 class="box__title">Трейд ссылка</h2>
              <p class="box__description">Нажмите сюда для того, чтобы найти Вашу трейд ссылку</p>
            </div>
          </header>

          <form action="#" class="form">
            <fieldset class="form__fieldset form__fieldset--dark js-editable">
              <div class="form__row">
                <div class="form__field form__field--icon form__field--button form__field--button-icon">
                  <input class="form__input js-editable-input" type="text"
                    placeholder="https://steamcommunity.com/tradeoffer/new/?partner=xxxxxxx&token=xxxxxxxxxxx" readonly>
                    <button class="form__field-button js-editable-btn" type="button" aria-label="Редактировать ссылку">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M5 16.2472v2.3641a.385.385 0 0 0 .3888.3889H7.753c.101 0 .2022-.0389.2722-.1167l8.4922-8.4844-2.9163-2.9163-8.4845 8.4844c-.0777.0778-.1166.1711-.1166.28Zm13.7726-8.1034a.7744.7744 0 0 0 0-1.0966l-1.8198-1.8197a.7744.7744 0 0 0-1.0965 0l-1.4232 1.4231 2.9163 2.9163 1.4232-1.4231Z" />
                      </svg>
                      <span>Сохранить</span>
                    </button>
                </div>
              </div>
              <div class="form__row">
                <div class="form__field">
                  <input class="form__input" type="text" placeholder="Комментарий" readonly>
                </div>
              </div>
            </fieldset>
          </form>

          <form action="#" class="form">
            <fieldset class="form__fieldset form__fieldset--dark js-editable">
              <div class="form__row">
                <div class="form__field form__field--icon form__field--button form__field--button-icon">
                  <input class="form__input js-editable-input" type="text" value="https://steamcommunity.com/tradeoffer/new/?partner=xxxxxxx&token=xxxxxxxxxxx" readonly>
                  <button class="form__field-button js-editable-btn" type="button" aria-label="Редактировать ссылку">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5 16.2472v2.3641a.385.385 0 0 0 .3888.3889H7.753c.101 0 .2022-.0389.2722-.1167l8.4922-8.4844-2.9163-2.9163-8.4845 8.4844c-.0777.0778-.1166.1711-.1166.28Zm13.7726-8.1034a.7744.7744 0 0 0 0-1.0966l-1.8198-1.8197a.7744.7744 0 0 0-1.0965 0l-1.4232 1.4231 2.9163 2.9163 1.4232-1.4231Z" />
                    </svg>
                    <span>Сохранить</span>
                  </button>
                </div>
              </div>
              <div class="form__row">
                <div class="form__field">
                  <input class="form__input form__input--light" type="text" placeholder="Ссылка от одного аккаунта"
                    readonly>
                </div>
              </div>
            </fieldset>
          </form>

          <form action="#" class="form">
            <fieldset class="form__fieldset form__fieldset--dark js-editable">
              <div class="form__row">
                <div class="form__field form__field--icon form__field--button form__field--button-icon">
                  <input class="js-editable-input form__input" type="text" value="https://steamcommunity.com/tradeoffer/new/?partner=xxxxxxx&token=xxxxxxxxxxx" readonly>
                  <button class="form__field-button js-editable-btn" type="button" aria-label="Редактировать ссылку">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5 16.2472v2.3641a.385.385 0 0 0 .3888.3889H7.753c.101 0 .2022-.0389.2722-.1167l8.4922-8.4844-2.9163-2.9163-8.4845 8.4844c-.0777.0778-.1166.1711-.1166.28Zm13.7726-8.1034a.7744.7744 0 0 0 0-1.0966l-1.8198-1.8197a.7744.7744 0 0 0-1.0965 0l-1.4232 1.4231 2.9163 2.9163 1.4232-1.4231Z" />
                    </svg>
                    <span>Сохранить</span>
                  </button>
                </div>
              </div>
              <div class="form__row">
                <div class="form__field">
                  <input class="form__input form__input--light" type="text" placeholder="Ссылка от другого аккаунта"
                    readonly>
                </div>
              </div>
            </fieldset>
          </form>
          <button class="form__add" type="button">
            <svg class="form__add-icon" width="15" height="14" viewBox="0 0 15 14" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M13.5 8H8.5V13C8.5 13.55 8.05 14 7.5 14C6.95 14 6.5 13.55 6.5 13V8H1.5C0.95 8 0.5 7.55 0.5 7C0.5 6.45 0.95 6 1.5 6H6.5V1C6.5 0.45 6.95 0 7.5 0C8.05 0 8.5 0.45 8.5 1V6H13.5C14.05 6 14.5 6.45 14.5 7C14.5 7.55 14.05 8 13.5 8Z" />
            </svg>
            Добавить еще одну трейд ссылку
          </button>
        </section>

        <section class="box">
          <header class="box__header">
            <div class="box__header-col">
              <h2 class="box__title">Реквизиты</h2>
            </div>
          </header>

          <form action="#" class="form">
            <fieldset class="form__fieldset">
              <legend class="form__legend">Банковская карта</legend>

              <div class="form__radio form__radio--light form__radio--flex">
                <input id="p-card-1" class="form__radio-input" type="radio" name="card" value="1" checked>
                <label for="p-card-1" class="form__radio-label">
                  5536 9140 8167 5880
                </label>
                <button type="button" class="form__remove" aria-label="Удалить карту">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M6 19.5c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10Zm3.17-7.83c.39-.39 1.02-.39 1.41 0L12 13.09l1.42-1.42c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-1.42 1.42 1.42 1.42c.39.39.39 1.02 0 1.41-.39.39-1.02.39-1.41 0L12 15.91l-1.42 1.42c-.39.39-1.02.39-1.41 0a.9959.9959 0 0 1 0-1.41l1.42-1.42-1.42-1.42c-.39-.38-.39-1.02 0-1.41ZM15.5 4.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29l-.71.71H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5Z" />
                  </svg>
                </button>
              </div>
              <div class="form__radio form__radio--light form__radio--flex">
                <input id="p-card-2" class="form__radio-input" type="radio" name="card" value="2">
                <label for="p-card-2" class="form__radio-label">
                  5536 9140 8167 5880
                </label>
                <button type="button" class="form__remove" aria-label="Удалить карту">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M6 19.5c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10Zm3.17-7.83c.39-.39 1.02-.39 1.41 0L12 13.09l1.42-1.42c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-1.42 1.42 1.42 1.42c.39.39.39 1.02 0 1.41-.39.39-1.02.39-1.41 0L12 15.91l-1.42 1.42c-.39.39-1.02.39-1.41 0a.9959.9959 0 0 1 0-1.41l1.42-1.42-1.42-1.42c-.39-.38-.39-1.02 0-1.41ZM15.5 4.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29l-.71.71H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5Z" />
                  </svg>
                </button>
              </div>
              <div class="form__radio form__radio--light form__radio--flex">
                <input id="p-card-3" class="form__radio-input" type="radio" name="card" value="3">
                <label for="p-card-3" class="form__radio-label">
                  5536 9140 8167 5880
                </label>
                <button type="button" class="form__remove" aria-label="Удалить карту">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M6 19.5c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10Zm3.17-7.83c.39-.39 1.02-.39 1.41 0L12 13.09l1.42-1.42c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-1.42 1.42 1.42 1.42c.39.39.39 1.02 0 1.41-.39.39-1.02.39-1.41 0L12 15.91l-1.42 1.42c-.39.39-1.02.39-1.41 0a.9959.9959 0 0 1 0-1.41l1.42-1.42-1.42-1.42c-.39-.38-.39-1.02 0-1.41ZM15.5 4.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29l-.71.71H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5Z" />
                  </svg>
                </button>
              </div>
            </fieldset>

            <fieldset class="form__fieldset">
              <legend class="form__legend">QIWI</legend>

              <div class="form__radio form__radio--light form__radio--flex">
                <input id="p-qiwi-1" class="form__radio-input" type="radio" name="qiwi" value="1" checked>
                <label for="p-qiwi-1" class="form__radio-label">
                  5536 9140 8167 5880
                </label>
                <button type="button" class="form__remove" aria-label="Удалить карту">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M6 19.5c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10Zm3.17-7.83c.39-.39 1.02-.39 1.41 0L12 13.09l1.42-1.42c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-1.42 1.42 1.42 1.42c.39.39.39 1.02 0 1.41-.39.39-1.02.39-1.41 0L12 15.91l-1.42 1.42c-.39.39-1.02.39-1.41 0a.9959.9959 0 0 1 0-1.41l1.42-1.42-1.42-1.42c-.39-.38-.39-1.02 0-1.41ZM15.5 4.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29l-.71.71H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5Z" />
                  </svg>
                </button>
              </div>
              <div class="form__radio form__radio--light form__radio--flex">
                <input id="p-qiwi-2" class="form__radio-input" type="radio" name="qiwi" value="2">
                <label for="p-qiwi-2" class="form__radio-label">
                  5536 9140 8167 5880
                </label>
                <button type="button" class="form__remove" aria-label="Удалить карту">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M6 19.5c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10Zm3.17-7.83c.39-.39 1.02-.39 1.41 0L12 13.09l1.42-1.42c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-1.42 1.42 1.42 1.42c.39.39.39 1.02 0 1.41-.39.39-1.02.39-1.41 0L12 15.91l-1.42 1.42c-.39.39-1.02.39-1.41 0a.9959.9959 0 0 1 0-1.41l1.42-1.42-1.42-1.42c-.39-.38-.39-1.02 0-1.41ZM15.5 4.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29l-.71.71H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5Z" />
                  </svg>
                </button>
              </div>
              <div class="form__radio form__radio--light form__radio--flex">
                <input id="p-qiwi-3" class="form__radio-input" type="radio" name="qiwi" value="3">
                <label for="p-qiwi-3" class="form__radio-label">
                  5536 9140 8167 5880
                </label>
                <button type="button" class="form__remove" aria-label="Удалить карту">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M6 19.5c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10Zm3.17-7.83c.39-.39 1.02-.39 1.41 0L12 13.09l1.42-1.42c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-1.42 1.42 1.42 1.42c.39.39.39 1.02 0 1.41-.39.39-1.02.39-1.41 0L12 15.91l-1.42 1.42c-.39.39-1.02.39-1.41 0a.9959.9959 0 0 1 0-1.41l1.42-1.42-1.42-1.42c-.39-.38-.39-1.02 0-1.41ZM15.5 4.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29l-.71.71H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5Z" />
                  </svg>
                </button>
              </div>
            </fieldset>
          </form>

          <button class="form__add" type="button">
            <svg class="form__add-icon" width="15" height="14" viewBox="0 0 15 14" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M13.5 8H8.5V13C8.5 13.55 8.05 14 7.5 14C6.95 14 6.5 13.55 6.5 13V8H1.5C0.95 8 0.5 7.55 0.5 7C0.5 6.45 0.95 6 1.5 6H6.5V1C6.5 0.45 6.95 0 7.5 0C8.05 0 8.5 0.45 8.5 1V6H13.5C14.05 6 14.5 6.45 14.5 7C14.5 7.55 14.05 8 13.5 8Z" />
            </svg>
            Добавить способы оплаты
          </button>
        </section>
      </div>
      <section class="page__col page__col--wide box history">
        <header class="box__header">
          <div class="box__header-col">
            <h2 class="box__title">История сделок</h2>
          </div>
          <div class="box__header-col">
            <div class="switcher">
              <div class="switcher__option">
                <input id="p-action-buy" class="switcher__input" type="radio" name="action" value="0" checked>
                <label class="switcher__label" for="p-action-buy">Покупки</label>
              </div>
              <div class="switcher__option">
                <input id="p-action-sell" class="switcher__input" type="radio" name="action" value="1">
                <label class="switcher__label" for="p-action-sell">Продажи</label>
              </div>
            </div>
          </div>
        </header>
        <form action="#" id="p-history" class="form history__form">
          <div class="history__tools">
            <div class="history__selects">
              <div class="select select--wide">
                <span id="item-name" class="select__label visually-hidden">Название предмета</span>
                <div class="select__wrapper">
                  <select class="select__native" aria-labelledby="item-name">
                    <option value="sel" disabled="" selected="">Название предмета</option>
                    <option value="1">Прикольный ключ</option>
                    <option value="2">Прикольный ключ</option>
                    <option value="3">Прикольный ключ</option>
                  </select>
                  <div class="select__custom" aria-hidden="true">
                    <div class="select__custom-trigger">Название предмета</div>
                    <div class="select__custom-options">
                      <div class="select__custom-option" data-value="1">Прикольный ключ</div>
                      <div class="select__custom-option" data-value="2">Прикольный ключ</div>
                      <div class="select__custom-option" data-value="3">Прикольный ключ</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="select">
                <span id="currency-select" class="select__label visually-hidden">Валюта</span>
                <div class="select__wrapper">
                  <select class="select__native" aria-labelledby="currency-select">
                    <option value="1" selected>RUB</option>
                    <option value="2">USD</option>
                  </select>
                  <div class="select__custom" aria-hidden="true">
                    <div class="select__custom-trigger">RUB</div>
                    <div class="select__custom-options">
                      <div class="select__custom-option" data-value="1">RUB</div>
                      <div class="select__custom-option" data-value="2">USD</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="history__date">
              <div class="form__date">
                <span>с</span>
                <input id="p-history-from" class="form__date-input" value="2023-01-01" type="date">
                <label for="p-history-from" class="visually-hidden">Дата начала</label>
              </div>

              <div class="form__date">
                <span>по</span>
                <input id="p-history-to" class="form__date-input" value="2023-01-01" type="date">
                <label for="p-history-to" class="visually-hidden">Дата завершения</label>
              </div>
            </div>
          </div>
        </form>
        <div class="history__table">
          <div class="table-wrapper">
            <table class="table">
              <thead>
                <tr>
                  <th>Лот</th>
                  <th>Сделка</th>
                  <th><button class="table__sort table__sort--state-1 js-sort" type="button">Дата</button></th>
                  <th><button class="table__sort table__sort--state-2 js-sort" type="button">Кол-во</button></th>
                  <th><button class="table__sort js-sort" type="button">Цена</button></th>
                  <th style="font-size: 12px;"><button class="table__sort js-sort" type="button">Общая стоимость</button></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Прикольный ключ</td>
                  <td>Продажа</td>
                  <td>21.01.2021 18:21</td>
                  <td>12 шт.</td>
                  <td>1 000 ₽</td>
                  <td>12 000 ₽</td>
                </tr>
                <tr>
                  <td>Прикольный ключ</td>
                  <td>Продажа</td>
                  <td>21.01.2021 18:21</td>
                  <td>12 шт.</td>
                  <td>1 000 ₽</td>
                  <td>12 000 ₽</td>
                </tr>
                <tr>
                  <td>Прикольный ключ</td>
                  <td>Продажа</td>
                  <td>21.01.2021 18:21</td>
                  <td>12 шт.</td>
                  <td>1 000 ₽</td>
                  <td>12 000 ₽</td>
                </tr>
                <tr>
                  <td>Прикольный ключ</td>
                  <td>Продажа</td>
                  <td>21.01.2021 18:21</td>
                  <td>12 шт.</td>
                  <td>1 000 ₽</td>
                  <td>12 000 ₽</td>
                </tr>
                <tr>
                  <td>Прикольный ключ</td>
                  <td>Продажа</td>
                  <td>21.01.2021 18:21</td>
                  <td>12 шт.</td>
                  <td>1 000 ₽</td>
                  <td>12 000 ₽</td>
                </tr>
                <tr>
                  <td>Прикольный ключ</td>
                  <td>Продажа</td>
                  <td>21.01.2021 18:21</td>
                  <td>12 шт.</td>
                  <td>1 000 ₽</td>
                  <td>12 000 ₽</td>
                </tr>
                <tr>
                  <td>Прикольный ключ</td>
                  <td>Продажа</td>
                  <td>21.01.2021 18:21</td>
                  <td>12 шт.</td>
                  <td>1 000 ₽</td>
                  <td>12 000 ₽</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="history__table-info">
            <p>Всего сделок 10 из 350</p>
            <p>На сумму <span>10 000 ₽</span> и <span>0.00011 USDT</span></p>
          </div>
          <?php include('template/pagination-alt.php') ?>  
        </div>
      </section>
    </div>
  </div>
</div>