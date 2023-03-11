<?php $page_title = '404'; ?>

<?php include_once('template/head.php'); ?>

<?php include_once('template/navbar.php') ?>

<main class="main">

  <section class="error-screen" style="background-image: url(img/top-screen-bg.jpg)">
    <div class="container">
      <div class="error-screen__box blur-box">
        <div class="error-screen__icon">
          <img src="img/icons/404.svg" alt="">
        </div>
        <h1 class="error-screen__title">упс! страница не найдена</h1>
        <p class="error-screen__descr">
          Эта страница находится в разработке или ее не существует
        </p>
        <div class="error-screen__buttons">
          <a class="button" href="/">Перейти на главную</a>
        </div>
      </div>
    </div>  
  </section>

</main>

<?php include_once('template/footer.php') ?>