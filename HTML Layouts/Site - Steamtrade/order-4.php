<?php $page_title = 'Клиент продает'; ?>
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
          <h2 class="order__title">Как принять обмен</h2>

          <h3 class="order__subtitle">1. Перейдите по ссылке, чтобы открыть предложение обмена</h3>
          <p class="order__text">
            <a href="#" class="button button--dark">Открыть предложения обмена</a>
          </p>

          <h3 class="order__subtitle">2. Примите обмен, отправленный от нашего бота</h3>
          <p class="order__text">
            Обязательно сверьте данные бота! Не принимайте обмен, если какая-либо информация отличается
          </p>
          <p class="order__text"><strong>Дата регистрации бота: 9 мая 2020</strong></p>
          <p class="order__text"><strong>Ник бота: tf2lavka.ru bot#4</strong></p>
          <p class="order__text"><strong>Уровень бота: 20</strong></p>

          <h3 class="order__subtitle">3. Подтвердите обмен в мобильном приложении Steam</h3>

        </div>
        <div class="order__grid-item order__grid-item--wide order__box order__box--thin blur-box">
          <div class="order__result">
            <div class="order__result-col">
              <h3 class="order__title">Обмен отправлен</h3>
              <p class="order__text">Заказ будет автоматически отменен через 10:45</p>
            </div>
            <div class="order__result-col">
              <div class="order__result-label">Сумма к оплате</div>
              <div class="order__result-value">2902.62 <span>₽</span></div>
            </div>
            <div class="order__result-col">
              <div class="order__result-label">На карту</div>
              <div class="order__result-value">4762 7720 7320 1111</div>
            </div>
            <div class="order__result-col order__result-col--flex">
              <form action="order" method="get">
                <input type="hidden" name="confirm" value="run">
                <input type="submit" class="button" value="Я подтвердил обмен в приложении Steam">
              </form>
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