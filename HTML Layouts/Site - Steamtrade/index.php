<?php $page_title = 'Главная'; ?>

<?php include_once('template/head.php'); ?>

<?php include_once('template/navbar.php') ?>

<main class="main">

  <?php include_once('template/top.php') ?>

  <?php // include_once('template/products/products.php') ?>
  <?php include_once('template/products/productsLong.php') ?>

  <!-- start faq -->
  <section class="section section--black section--bordered">
    <div class="section__content">
      <header class="section__header container">
        <h2 class="section__title">Часто задаваемые вопросы (FAQ)</h2>
      </header>
      <?php include_once('template/faq.php') ?>
    </div>
  </section>
  <!-- end faq -->

  <!-- start reviews -->
  <section class="section section--tight">
    <div class="section__content section__content--dark">
      <header class="section__header container">
        <h2 class="section__title">Отзывы</h2>
      </header>
      <?php include_once('template/reviews.php') ?>
    </div>
  </section>
  <!-- end reviews -->

</main>

<?php include_once('template/footer.php') ?>