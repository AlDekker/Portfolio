<?php $page_title = 'Продажа'; ?>
<?php $breadcrumbs_title = 'Вы продаете'; ?>
<?php $breadcrumbs_order = 'Order #47484'; ?>

<?php include_once('template/head.php'); ?>

<?php include_once('template/navbar.php') ?>

<main class="main">

  <div class="order" style="background-image: url(img/top-screen-bg.jpg)">
    <?php include_once('template/breadcrumbs.php') ?>
    <div class="container">
      <div class="order__grid">
        <div class="order__grid-item order__grid-item--high">
          <div class="order__product product product--sm-row blur-box">
            <div class="product__thumb"><img src="img/product-thumb.png" width="320" height="250" alt="Ключ Manifold Paradox Arcana Dota"></div>
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
        <div class="order__grid-item order__box blur-box">
          <div class="order__alert">
            <div class="order__loader loader is-active"></div>
            <h2 class="order__title">Почти готово!</h2>
            <p class="order__text">
              Подготавливаем реквизиты оплаты <br> и бронируем предметы для Вас
            </p>
          </div>
        </div>
        <div class="order__grid-item order__box order__box--thin blur-box">
          <div class="order__result">
            <div class="order__result-col">
              <div class="order__result-label">Сумма к оплате</div>
              <div class="order__result-value">2902.62 <span>₽</span></div>
            </div>
            
            <div class="order__result-col">
              <div class="order__result-label">На карту</div>
              <div class="order__result-value">4762 7720 7320 1111
              </div>
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