<!-- modal (Продажа ключей) -->
<div id="modal-keys" class="modal modal--wide" tabindex="-1" role="dialog" aria-labelledby="modal-keys"
  aria-hidden="true">
  <div class="modal__body" aria-labelledby="modal-keys-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-keys-title">Продажа ключей</h2>
    </header>
    <div class="modal__content">
      <form id="mf-keys" class="modal__form form" action="#">
        <div class="modal__form-content">
          <div class="form__row">
            <div class="form__caption">
              <label class="form__label" for="mf-link">
                Нажмите <a href="#">сюда</a> для того, чтобы найти вашу трейд ссылку
              </label>
            </div>
            <div class="form__field form__field--icon">
              <input id="mf-link" class="form__input" type="text" name="link" placeholder="Вставьте вашу трейд ссылку"
                required>
            </div>
            <ul class="form__list form__prompt">
              <li>Либо номер телефона (без комиссии, если у вас подключена Система быстрых Платежей, в других случаях
                - 1.5%, минимум 30 ₽)</li>
              <li>Либо номер карты без пробелов (Тинькофф - без комиссии, в других банках - 1.5%, минимум 30 ₽)</li>
            </ul>
            <div class="form__field">
              <label class="visually-hidden" for="mf-number">Введите</label>
              <input id="mf-number" class="form__input" type="text" name="number"
                placeholder="+7 (9ХХ) ХХХ-ХХ-ХХ или 5536 ХХХХ ХХХХ ХХХХ" required>
            </div>
          </div>

          <div class="form__row">
            <div class="form__caption">
              <label class="form__label" for="mf-count">
                Укажите количество ключей
              </label>
              <div class="form__prompt">Временно минимум 15 шт., вывод на ТМ от 1 шт. на USDT от 7 шт.</div>
            </div>
            <div class="form__field">
              <input id="mf-count" class="form__input" type="text" name="count"
                placeholder="Максимум 1500 за одну сделку" required>
            </div>
          </div>
          <div class="form__row form__row--inline">
            <label class="form__label" for="mf-sum">Сумма, которую мы вам отправим:</label>
            <output id="mf-sum" class="form__output">1500 ₽</output>
          </div>
          <div class="form__row">
            <div class="form__caption">
              <label class="form__label" for="mf-promo">
                Промокод (при наличии):
              </label>
            </div>
            <div class="form__field">
              <input id="mf-promo" class="form__input" type="text" name="promo" placeholder="Введите промокод">
            </div>
          </div>
          <div class="form__row">
            <div class="modal__message">Доплата по промокоду будет применена после закрытия заказа</div>
          </div>

        </div>
        <div class="modal__form-footer">
          <div class="modal__buttons">
            <button class="button">Продолжить</button>
            <a href="#close-modal" rel="modal:close" class="button button--outline">Закрыть</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal (Продажа ключей) -->

<!-- modal (Проверка оплаты) -->
<div id="modal-check" class="modal" tabindex="-1" role="dialog" aria-labelledby="modal-check" aria-hidden="true">
  <div class="modal__body" aria-labelledby="modal-check-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-check-title">Проверка оплаты</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">Минутку, проверяем оплату, подготавливаем обмен</div>
      <div class="modal__text"><strong>При успешном результате проверки сделка завершится автоматически</strong></div>
      <div class="modal__message">Иногда отображение банковского перевода занимает до 15 минут. Надеемся на ваше
        понимание.</div>
      <div class="modal__buttons">
        <a href="#close-modal" rel="modal:close" class="button button--outline">Закрыть</a>
      </div>
    </div>
  </div>
</div>
<!-- end modal (Проверка оплаты) -->

<!-- modal (Отмена сделки 1) -->
<div id="modal-cancel-1" class="modal" tabindex="-1" role="dialog" aria-labelledby="modal-cancel-1" aria-hidden="true">
  <div class="modal__body" aria-labelledby="modal-cancel-1-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-cancel-1-title">Отмена сделки</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">Вы действительно хотите отменить сделку?</div>
      <div class="modal__buttons">
        <button class="button">Отменить сделку</button>
        <a href="#close-modal" rel="modal:close" class="button button--outline">Закрыть</a>
      </div>
    </div>
  </div>
</div>
<!-- end modal (Отмена сделки 1) -->

<!-- modal (Отмена сделки 2) -->
<div id="modal-cancel-2" class="modal" tabindex="-1" role="dialog" aria-labelledby="modal-cancel-2" aria-hidden="true">
  <div class="modal__body" aria-labelledby="modal-cancel-2-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-cancel-2-title">Отмена сделки</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">Сделка была успешно закрыта</div>
      <div class="modal__buttons">
        <a href="#close-modal" rel="modal:close" class="button button--outline">Закрыть</a>
      </div>
    </div>
  </div>
</div>
<!-- end modal (Отмена сделки 2) -->

<!-- modal (Важная информация) -->
<div id="modal-info" class="modal" tabindex="-1" role="dialog" aria-labelledby="modal-info" aria-hidden="true">
  <div class="modal__body" aria-labelledby="modal-info-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-info-title">Важная информация</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">
        <p><b>Для тех кто покупает:</b></p>

        <p>Реквизиты нашей карты для оплаты могут меняться при каждой новой открытой сделке!</p>

        <p><strong>Будьте внимательны при осуществлении переводов!</strong></p>
      </div>
      <div class="modal__buttons">
        <a href="#close-modal" rel="modal:close" class="button button--outline">Закрыть</a>
      </div>
    </div>
  </div>
</div>
<!-- end modal (Важная информация) -->

<!-- modal (ДР) -->
<div id="modal-hb" class="modal" tabindex="-1" role="dialog" aria-labelledby="modal-hb" aria-hidden="true">
  <div class="modal__body" aria-labelledby="modal-hb-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-hb-title">День Рождения нашего проекта!</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">
        <p>
          Друзья, 21 марта у нас День Рождения, нам исполняется 1 год! В честь этого события мы разыгрываем 3 скина на
          сумму 10 000 ₽
        </p>
        <p>
          <b>
            1 место: М4А1-S Огонь Чантико
            (Немного поношенное)
          </b>
        </p>
        <p>
          <b>
            2 место: М4А1-S Огонь Чантико
            (Немного поношенное)
          </b>
        </p>
        <p>
          <b>
            3 место: М4А1-S Огонь Чантико
            (Немного поношенное)
          </b>
        </p>

      </div>
      <div class="modal__buttons">
        <button class="button">Участвовать!</button>
        <a href="#close-modal" rel="modal:close" class="button button--outline">Закрыть</a>
      </div>
    </div>
  </div>
</div>
<!-- end modal (ДР) -->

<!-- modal с картинкой -->
<div id="modal-img" class="modal" tabindex="-1" role="dialog" aria-labelledby="modal-img" aria-hidden="true">
  <div class="modal__body" aria-labelledby="modal-img-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-img-title">Картинка</h2>
    </header>
    <div class="modal__content">
      <img src="img/top-screen-bg.jpg" alt="Какая-то картинка">
      <div class="modal__text">
        Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. Единственное семь жизни
        которой парадигматическая если. Грустный, речью. Осталось, речью путь! Маленькая вопроса даль дороге последний
        ведущими! Родного, предупреждал последний.
      </div>
      <div class="modal__buttons">
        <a href="#close-modal" rel="modal:close" class="button button--outline">Закрыть</a>
      </div>
    </div>
  </div>
</div>
<!-- end modal с картинкой -->

<!-- modal со ссылками -->
<div id="modal-links" class="modal" tabindex="-1" role="dialog" aria-labelledby="modal-links" aria-hidden="true">
  <div class="modal__body" aria-labelledby="modal-links-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-links-title">Ссылки</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">
        Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты.
      </div>
      <div class="modal__contacts contacts-buttons">
        <a class="contacts-buttons__link" href="#" rel="noopener noreferrer nofollow" target="_blank">
          <svg class="contacts-buttons__link-icon" width="49" height="48" viewBox="0 0 49 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M41.9513 14.7578c.2502-.8345 0-1.4477-1.1911-1.4477h-3.9384c-1.0014 0-1.463.5297-1.7134 1.1138 0 0-2.0028 4.8818-4.8401 8.0529-.9179.9179-1.3352 1.21-1.8359 1.21-.2503 0-.6127-.2921-.6127-1.1265v-7.8025c0-1.0014-.2906-1.4477-1.1252-1.4477h-6.189c-.6258 0-1.0021.4647-1.0021.9052 0 .9493 1.4185 1.1683 1.5648 3.8387v5.7997c0 1.2716-.2297 1.5021-.7304 1.5021-1.3351 0-4.5828-4.9036-6.5091-10.5146-.3774-1.0906-.7561-1.5311-1.7626-1.5311H8.1277c-1.1253 0-1.3504.5297-1.3504 1.1138 0 1.0431 1.3353 6.217 6.217 13.0598 3.2545 4.6732 7.8398 7.2063 12.0123 7.2063 2.5034 0 2.8131-.5626 2.8131-1.5317v-3.532c0-1.1252.2372-1.3498 1.03-1.3498.5841 0 1.5855.2921 3.9221 2.5452 2.6704 2.6704 3.1106 3.8683 4.6127 3.8683h3.9384c1.1252 0 1.6879-.5626 1.3633-1.6729-.3552-1.1066-1.6301-2.7122-3.3219-4.6154-.918-1.0849-2.2949-2.2531-2.7121-2.8374-.5842-.7509-.4173-1.0848 0-1.7523 0 0 4.7984-6.7594 5.2991-9.0542Z" />
          </svg>
          Вконтакте
        </a>
        <a class="contacts-buttons__link" href="#" rel="noopener noreferrer nofollow" target="_blank">
          <svg class="contacts-buttons__link-icon" width="48" height="48" viewBox="0 0 48 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="m14.7793 26.0709 3.9524 10.9397s.4941 1.0236 1.0233 1.0236c.5291 0 8.3992-8.1874 8.3992-8.1874l8.7517-16.9039-21.9856 10.3042-.141 2.8238Z"
              fill="url(#a)" />
            <path d="m20.0201 28.8765-.7588 8.0635s-.3176 2.4708 2.1527 0c2.4702-2.4707 4.8346-4.376 4.8346-4.376" />
            <path
              d="m14.851 26.4613-8.1302-2.649s-.9716-.3942-.6587-1.2881c.0644-.1844.1943-.3412.583-.6108C8.4465 20.6578 39.988 9.3209 39.988 9.3209s.8906-.3001 1.4159-.1005a.7683.7683 0 0 1 .5233.5705c.0567.2347.0805.4763.0705.7176-.0025.2088-.0278.4023-.0469.7057-.1921 3.0995-5.941 26.2325-5.941 26.2325s-.3439 1.3537-1.5763 1.4a2.2569 2.2569 0 0 1-1.6448-.6362c-2.4183-2.0802-10.7767-7.6974-12.6237-8.9328a.3526.3526 0 0 1-.1515-.2499c-.0259-.1302.1157-.2915.1157-.2915s14.5542-12.9368 14.9415-14.2949c.03-.1052-.0833-.1571-.2354-.111-.9667.3556-17.724 10.938-19.5735 12.1059a.8916.8916 0 0 1-.4109.025Z" />
            <defs>
              <linearGradient id="a" x1="14.7793" y1="12.9429" x2="37.6727" y2="13.6632" gradientUnits="userSpaceOnUse">
                <stop stop-color="#6B6B6B" stop-opacity=".54" />
                <stop offset="1" stop-color="#767676" stop-opacity=".4" />
              </linearGradient>
            </defs>
          </svg>
          Telegram</a>
      </div>
      <div class="modal__buttons">
        <a href="#close-modal" rel="modal:close" class="button button--outline">Закрыть</a>
      </div>
    </div>
  </div>
</div>
<!-- end modal со ссылками -->

<!-- modal "Купить" в товаре -->
<div id="metal-buy" class="modal" tabindex="-1" role="dialog" aria-labelledby="metal-buy" aria-hidden="true">
  <div class="modal__body" aria-labelledby="metal-buy-title">
    <header class="modal__header">
      <h2 class="modal__title" id="metal-buy-title">Купить</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">
        ...
      </div>
      <div class="modal__buttons">
        <button class="button">Купить</button>
        <a href="#close-modal" rel="modal:close" class="button button--outline">Закрыть</a>
      </div>
    </div>
  </div>
</div>
<!-- end modal "Купить" в товаре -->