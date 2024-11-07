<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    /** @var array<int, Controllers\Admin\House\HouseData> $houses */
    ?>
</head>
<body>
<?php require_once __DIR__ . '/../../layouts/header.php'?>
<main class="admin-house-wrapper">
  <div class="admin-house-panel">
    <a class="default-button" href="/admin/house/create">Добавить недвижимость</a>
  </div>
  <div class="admin-house-content">
    <section class="purchase" id="catalog">
      <h2 class="purchase__h2">Каталог</h2>
      <?php foreach ($houses as $house) { ?>
      <div class="purchase__cart">
        <img src="<?=$house->image?>" alt="Кажется у этой недвижемости нету картинок" class="purchase__img">
        <div class="purchase__info">
          <div class="purchase__left">
            <p class="purchase__left-top"><?=$house->name?></p>
            <p class="purchase__left-botom"><?=$house->description?></p>
            <div style="display: flex; gap: 10px">
              <button class="purchase__button">Подробнее</button>
              <form action="/admin/house/destroy" method="POST">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="<?=$house->id?>">
                <button class="purchase__button delete">Удалить</button>
              </form>
            </div>
          </div>
          <div class="purchase__right">
            <p class="purchase__right-top"><?=$house->price?> ₽</p>
          </div>
        </div>
      </div>
      <?php } ?>
    </section>
  </div>
</main>
</body>
</html>

<style>
  .admin-house-panel {
      margin: 10px;
  }
  .admin-house-wrapper {
      padding: 10px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      width: 1400px;
      margin: 0 auto;
  }
  .delete {
      background-color: #ff5353;
  }
</style>