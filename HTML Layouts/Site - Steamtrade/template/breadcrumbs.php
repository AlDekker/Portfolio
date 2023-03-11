<div class="breadcrumbs">
  <div class="container">
    <ul class="breadcrumbs__list">
      <li class="breadcrumbs__item">
        <a href="/">Главная</a>
      </li>
      <li class="breadcrumbs__item">
        <span><?= $page_title ?></span>
      </li>
    </ul>
    <h1 class="page__title"><?php echo $breadcrumbs_title ? $breadcrumbs_title : $page_title; ?></h1>
    <?php if ($breadcrumbs_order): ?>
    <p class="page__subtitle">Order #47484</p>
    <?php endif; ?>
  </div>
</div>