<?php $page_title = 'Корзина'; ?>

<?php include_once('template/head.php'); ?>

<?php include_once('template/navbar.php') ?>

<main class="main">

  <?php include_once('template/breadcrumbs.php') ?>

  <div class="cart">
    <div class="container">
      <div class="cart__content">
        <div class="cart__payment">
          Метод оплаты: <strong>Перевод по карте</strong>
        </div>
        <section class="cart__products box">
          <header class="cart__products-header">
            <div class="cart__count">Всего: 5 товаров</div>
            <button class="cart__clear button button--dark button--icon" type="button">
              <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 19.5c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10Zm3.17-7.83c.39-.39 1.02-.39 1.41 0L12 13.09l1.42-1.42c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-1.42 1.42 1.42 1.42c.39.39.39 1.02 0 1.41-.39.39-1.02.39-1.41 0L12 15.91l-1.42 1.42c-.39.39-1.02.39-1.41 0a.9959.9959 0 0 1 0-1.41l1.42-1.42-1.42-1.42c-.39-.38-.39-1.02 0-1.41ZM15.5 4.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29l-.71.71H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1h-2.5Z"/></svg>
              Очистить корзину
            </button>
          </header>
          <div class="cart-product">
            <div class="cart-product__thumb"><img src="img/product-thumb.png" loading="lazy" width="120" height="120" alt="Ключ Manifold Paradox Arcana Dota"></div>
            <div class="cart-product__info">
              <h3 class="cart-product__title">Manifold Paradox Arcana Dota</h3>
              <p class="cart-product__category">Team Fortress 2</p>

              <div class="cart-product__footer">
                <div class="cart-product__counter counter">
                  <button class="counter__button counter__dec" type="button" aria-label="Уменьшить количество"></button>
                  <input class="counter__input" type="text" value="1" data-min="1" data-max="4">
                  <button class="counter__button counter__inc" type="button" aria-label="Увеличить количество"></button>
                </div>
                <div class="cart-product__price">125 ₽/шт</div>
              </div>
            </div>
          </div>
          <div class="cart-product">
            <div class="cart-product__thumb"><img src="img/product-thumb.png" loading="lazy" width="120" height="120" alt="Ключ Manifold Paradox Arcana Dota"></div>
            <div class="cart-product__info">
              <h3 class="cart-product__title">Manifold Paradox Arcana Dota</h3>
              <p class="cart-product__category">Team Fortress 2</p>

              <div class="cart-product__footer">
                <div class="cart-product__counter counter">
                  <button class="counter__button counter__dec" type="button" aria-label="Уменьшить количество"></button>
                  <input class="counter__input" type="text" value="1" data-min="1" data-max="4">
                  <button class="counter__button counter__inc" type="button" aria-label="Увеличить количество"></button>
                </div>
                <div class="cart-product__price">125 ₽/шт</div>
              </div>
            </div>
          </div>
          <div class="cart-product">
            <div class="cart-product__thumb"><img src="img/product-thumb.png" loading="lazy" width="120" height="120" alt="Ключ Manifold Paradox Arcana Dota"></div>
            <div class="cart-product__info">
              <h3 class="cart-product__title">Manifold Paradox Arcana Dota</h3>
              <p class="cart-product__category">Team Fortress 2</p>

              <div class="cart-product__footer">
                <div class="cart-product__counter counter">
                  <button class="counter__button counter__dec" type="button" aria-label="Уменьшить количество"></button>
                  <input class="counter__input" type="text" value="1" data-min="1" data-max="4">
                  <button class="counter__button counter__inc" type="button" aria-label="Увеличить количество"></button>
                </div>
                <div class="cart-product__price">125 ₽/шт</div>
              </div>
            </div>
          </div>
          <div class="cart-product">
            <div class="cart-product__thumb"><img src="img/product-thumb.png" loading="lazy" width="120" height="120" alt="Ключ Manifold Paradox Arcana Dota"></div>
            <div class="cart-product__info">
              <h3 class="cart-product__title">Manifold Paradox Arcana Dota</h3>
              <p class="cart-product__category">Team Fortress 2</p>

              <div class="cart-product__footer">
                <div class="cart-product__counter counter">
                  <button class="counter__button counter__dec" type="button" aria-label="Уменьшить количество"></button>
                  <input class="counter__input" type="text" value="1" data-min="1" data-max="4">
                  <button class="counter__button counter__inc" type="button" aria-label="Увеличить количество"></button>
                </div>
                <div class="cart-product__price">125 ₽/шт</div>
              </div>
            </div>
          </div>
        </section>
        <section class="cart__order">
          <form action="#">
            <div class="box">links</div>
            <div class="box">
              <button class="button" type="submit">Перейти к оплате</button>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>

</main>

<?php include_once('template/footer.php') ?>