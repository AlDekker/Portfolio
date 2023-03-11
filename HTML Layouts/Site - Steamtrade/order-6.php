<?php $page_title = 'Нет заказов'; ?>
<?php $breadcrumbs_title = 'Вы продаете'; ?>
<?php $breadcrumbs_order = 'Order #47484'; ?>

<?php include_once('template/head.php'); ?>

<?php include_once('template/navbar.php') ?>

<main class="main">

  <div class="order" style="background-image: url(img/top-screen-bg.jpg)">
    <?php include_once('template/breadcrumbs.php') ?>
    <div class="container">
      <div class="order__grid">
        <div class="order__grid-item order__box blur-box">
          <div class="order__alert">
            <div class="order__alert-icon">
              <img width="172" height="172" src="img/icons/order-error.svg" alt="">
            </div>
            <h2 class="order__title">УПС! У вас нет открытых заказов</h2>
            <p class="order__text"><a href="#">Возможные причины</a></p>
          </div>
        </div>
        <div class="order__grid-item order__box blur-box">
          <h2 class="order__title">Если вы покупаете</h2>
          <p class="order__text"><strong>Вероятно, уже существует открытый заказ на эту же сумму.</strong></p>
          <p class="order__text"><strong>Пожалуйста, создайте заказ немного позже или на другую сумму</strong></p>
          <p class="order__text">Поскольку не все банки/платежные системы дают возможность оставлять комментарий при
            отправке, нам приходится ограничивать возможность создавать одновременно несколько заказов на покупку с
            одинаковой суммой к оплате</p>

          <h2 class="order__title">Прочие причины</h2>
          <ul class="order__list">
            <li>Заказ был отменен автоматически из-за бездействия </li>
            <li>Вы отменили заказ </li>
            <li>Заказ был успешно выполнен </li>
            <li>Заказ еще не был создан</li>
          </ul>
          <p class="order__text">Попробуйте <a href="#">обновить страницу</a> или <a href="/">вернуться на главную</a> и создать заказ заново.</p>
          <p class="order__text">Если вам нужна помощь, <a href="#">свяжитесь с нами</a></p>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include_once('template/footer.php') ?>