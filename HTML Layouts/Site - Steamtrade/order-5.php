<?php $page_title = 'Заказ завершен'; ?>
<?php $breadcrumbs_title = 'Вы продаете'; ?>
<?php $breadcrumbs_order = 'Order #47484'; ?>

<?php include_once('template/head.php'); ?>

<?php include_once('template/navbar.php') ?>

<main class="main">

  <div class="order" style="background-image: url(img/top-screen-bg.jpg)">
    <?php include_once('template/breadcrumbs.php') ?>
    <div class="container">
      <div class="order__grid order__grid--centered">
        <div class="order__grid-item order__grid-item--high order__box blur-box">
          <div class="order__alert">
            <div class="order__alert-icon">
              <img width="172" height="172" src="img/icons/order-success.svg" alt="">
            </div>
            <h2 class="order__title">Сделка совершена!</h2>
            <p class="order__text">Предметы были успешно отправлены</p>
          </div>
        </div>
        <div class="order__grid-item order__box order__box--thin order__message blur-box">
          <h2 class="order__title">Спасибо за выбор <a href="/">tf2lavka.ru</a></h2>
        </div>
        <div class="order__grid-item order__box blur-box">
          <h2 class="order__title">Оставьте отзыв</h2>
          <form method="post" action="?action=rate" class="order__review-form form">
            <div class="form__row rating">
              <input id="star-5" type="radio" name="rating">
              <label for="star-5" title="Оценка «5»"></label>
              <input id="star-4" type="radio" name="rating" checked>
              <label for="star-4" title="Оценка «4»"></label>
              <input id="star-3" type="radio" name="rating">
              <label for="star-3" title="Оценка «3»"></label>
              <input id="star-2" type="radio" name="rating">
              <label for="star-2" title="Оценка «2»"></label>
              <input id="star-1" type="radio" name="rating">
              <label for="star-1" title="Оценка «1»"></label>
            </div>
            <div class="form__row">
              <textarea class="form__input" name="rating_text" maxlength="300" cols="30" rows="4" placeholder="Текст отзыва (Не обязательно)"></textarea>
            </div>
            <input type="submit" value="Отправить" class="button button--outline" >
          </form>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include_once('template/footer.php') ?>