<?php $page_title = 'Клиент покупает'; ?>
<?php $breadcrumbs_title = 'Вы продаете'; ?>
<?php $breadcrumbs_order = 'Order #47484'; ?>

<?php include_once('template/head.php'); ?>

<?php include_once('template/navbar.php') ?>

<main class="main">

  <div class="order" style="background-image: url(img/top-screen-bg.jpg)">
    <?php include_once('template/breadcrumbs.php') ?>
    <div class="container">
      <div class="order__grid">
        <div class="order__grid-item">
          <div class="order__product product product--sm-row blur-box">
            <div class="product__thumb"><img src="img/product-thumb.png" width="320" height="250"
                alt="Ключ Manifold Paradox Arcana Dota"></div>
            <div class="product__info">
              <h3 class="product__title">Manifold Paradox Arcana Dota</h3>
              <div class="product__footer">
                <div class="product__footer-left">
                  <div class="product__meta">
                    <div class="product__meta-item product__meta-item--cat">Dota 2</div>
                    <div class="product__meta-item product__meta-item--rest">12 в наличии</div>
                  </div>

                  <div class="product__price">1.21 <span>$</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="order__grid-item order__grid-item--sm-last order__box blur-box">
          <h2 class="order__title">Как отправить деньги без комиссии с Вашего <span class="qiwi-color">QIWI
              кошелька</span></h2>

          <h3 class="order__subtitle">1. Отправьте точную сумму нам на карту по номеру телефона, либо по номеру карты
          </h3>
          <p class="order__text">
            Включите СБП в настройках Вашего банка для перевода без комиссии по номеру телефона
          </p>
          <div class="order__contacts order-contacts">
            <div class="order-contacts__item">
              <div class="order-contacts__number order-contacts__number--tel"><a href="tel:+79253082268">+7 (925) 308
                  22 68</a></div>
              <p class="order-contacts__descr">Через Систему Быстрых Платежей и без комиссии. Получатель Дарья Ч.,
                Тинькофф</p>
            </div>
            <div class="order-contacts__item">
              <div class="order-contacts__number order-contacts__number--card">5536 9140 8167 5880</div>
              <p class="order-contacts__descr">Без комиссии для карт Tinkoff, 1.5% для карт других банков (Мин 30 ₽)
              </p>
            </div>
          </div>

          <h3 class="order__subtitle">2. Нажмите кнопку “Проверить оплату” для подтверждения оплаты</h3>
          <p class="order__text">
            Просим обратить Ваше внимание, что отображение банковского перевода в системе может занимать до 15 минут,
            время резерва заказа будет продлено, при нажатии
          </p>
        </div>
        <div class="order__grid-item order__grid-item--wide order__box order__box--thin blur-box">
          <div class="order__result">
            <div class="order__result-col">
              <h3 class="order__title">Бот готов к сделке</h3>
              <p class="order__text">Заказ будет автоматически отменен через 10:45</p>
            </div>
            <div class="order__result-col">
              <div class="order__result-label">Сумма к оплате</div>
              <div class="order__result-value">2902.62 <span>₽</span></div>
            </div>
            <div class="order__result-col order__result-col--flex">
              <form action="order" method="get"> 
                <input type="hidden" name="act" value="run">
                <input type="submit" class="button" value="Проверить оплату">
              </form>
              или
              <form action="order" method="get"> 
                <input type="hidden" name="act" value="run">
                <input type="submit" class="button" value="Оплатить балансом">
              </form>
              <!-- <button class="button" type="button">Проверить оплату</button> или <button class="button"
                type="button">Оплатить балансом</button> -->
            </div>
            <div class="order__result-col order__result-col--flex">
              <button class="order__cancel" type="button" data-toggle="modal" data-target="#cancelOrder">Отмена</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include_once('template/footer.php') ?>