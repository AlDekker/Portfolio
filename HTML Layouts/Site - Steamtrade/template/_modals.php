<!-- Модалки без jQuery -->

<!-- 
  Чтобы заработали:
  - отключить стили modal-jq.scss
  - подключить modal.scss
  - отключить jq в футере
  - раскомментировать в main.js:

  // import MicroModal from 'micromodal';

  // MicroModal.init({
  //   openTrigger: 'data-modal',
  //   openClass: 'opened',
  //   disableScroll: true
  // });
  
 -->

<button class="button" data-modal="modal-keys" type="button">Продажа ключей</button>
<button class="button" data-modal="modal-check" type="button">Проверка оплаты</button>
<button class="button" data-modal="modal-cancel-1" type="button">Отмена сделки 1</button>
<button class="button" data-modal="modal-cancel-2" type="button">Отмена сделки 2</button>
<button class="button" data-modal="modal-info" type="button">Важная информация</button>
<button class="button" data-modal="modal-hb" type="button">ДР проекта</button>

<!-- modal (Продажа ключей) -->
<div id="modal-keys" class="modal modal--wide micromodal-slide" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close></div>
  <div class="modal__body" role="dialog" aria-modal="true" aria-labelledby="modal-keys-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-keys-title">Продажа ключей</h2>
    </header>
    <div class="modal__content">
      <form id="mf-keys" class="modal__form form" action="#">
        <div class="modal__form-content">
          <div class="form__section">
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
          </div>
          <div class="form__section">
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
          </div>
          <div class="form__section">
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
        </div>
        <div class="modal__form-footer">
          <div class="modal__buttons">
            <button class="button">Продолжить</button>
            <button class="button button--outline" data-micromodal-close>Закрыть</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal (Продажа ключей) -->

<!-- modal (Проверка оплаты) -->
<div id="modal-check" class="modal micromodal-slide" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close></div>
  <div class="modal__body" role="dialog" aria-modal="true" aria-labelledby="modal-check-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-check-title">Проверка оплаты</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">Минутку, проверяем оплату, подготавливаем обмен</div>
      <div class="modal__text"><strong>При успешном результате проверки сделка завершится автоматически</strong></div>
      <div class="modal__message">Иногда отображение банковского перевода занимает до 15 минут. Надеемся на ваше
        понимание.</div>
      <div class="modal__buttons">
        <button class="button button--outline" data-micromodal-close>Назад</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal (Проверка оплаты) -->

<!-- modal (Отмена сделки 1) -->
<div id="modal-cancel-1" class="modal micromodal-slide" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close></div>
  <div class="modal__body" role="dialog" aria-modal="true" aria-labelledby="modal-cancel-1-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-cancel-1-title">Отмена сделки</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">Вы действительно хотите отменить сделку?</div>
      <div class="modal__buttons">
        <button class="button">Отменить сделку</button>
        <button class="button button--outline" data-micromodal-close>Назад</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal (Отмена сделки 1) -->

<!-- modal (Отмена сделки 2) -->
<div id="modal-cancel-2" class="modal micromodal-slide" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close></div>
  <div class="modal__body" role="dialog" aria-modal="true" aria-labelledby="modal-cancel-2-title">
    <header class="modal__header">
      <h2 class="modal__title" id="modal-cancel-2-title">Отмена сделки</h2>
    </header>
    <div class="modal__content">
      <div class="modal__text">Сделка была успешно закрыта</div>
      <div class="modal__buttons">
        <button class="button button--outline" data-micromodal-close>Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal (Отмена сделки 2) -->

<!-- modal (Важная информация) -->
<div id="modal-info" class="modal micromodal-slide" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close></div>
  <div class="modal__body" role="dialog" aria-modal="true" aria-labelledby="modal-info-title">
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
        <button class="button button--outline" data-micromodal-close>Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal (Важная информация) -->

<!-- modal (ДР) -->
<div id="modal-hb" class="modal micromodal-slide" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close></div>
  <div class="modal__body" role="dialog" aria-modal="true" aria-labelledby="modal-hb-title">
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
        <button class="button" data-micromodal-close>Участвовать!</button>
        <button class="button button--outline" data-micromodal-close>Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal (ДР) -->