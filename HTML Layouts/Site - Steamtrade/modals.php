<?php $page_title = 'Модалки'; ?>

<?php include_once('template/head.php'); ?>

<?php include_once('template/navbar.php') ?>

<main class="main">

  <section class="section">
    <div class="container">
    <div class="section__content">

      <style>
        .buttons-group {
          margin-top: 20px;
          display: flex;
          flex-wrap: wrap; 
          gap: 30px;
        }
      </style>
      <h2 class="page__title">Модалки (с jQuery)</h2>

      <div class="buttons-group">
        <button class="button" data-toggle="modal" data-target="#modal-keys" type="button">Продажа ключей</button>
        <button class="button" data-toggle="modal" data-target="#modal-check" type="button">Проверка оплаты</button>
        <button class="button" data-toggle="modal" data-target="#modal-cancel-1" type="button">Отмена сделки 1</button>
        <button class="button" data-toggle="modal" data-target="#modal-cancel-2" type="button">Отмена сделки 2</button>
        <button class="button" data-toggle="modal" data-target="#modal-info" type="button">Важная информация</button>
        <button class="button" data-toggle="modal" data-target="#modal-hb" type="button">ДР проекта</button>
        <button class="button" data-toggle="modal" data-target="#modal-img" type="button">С картинкой</button>
        <button class="button" data-toggle="modal" data-target="#modal-links" type="button">С ссылками</button>
      </div>
      
    </div>
    </div>
  </section>

</main>

<?php include_once('template/footer.php') ?>