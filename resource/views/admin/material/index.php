<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    /** @var array<int, Controllers\Admin\Materials\MaterialData> $materials */
    ?>
</head>
<body>
<?php require_once __DIR__ . '/../../layouts/header.php'?>
<main class="admin-material-wrapper">
  <div class="admin-material-panel">
    <a class="default-button" href="/admin/material/create">Добавить материалы</a>
  </div>
  <div class="admin-material-content">
    <section class="purchase" id="catalog">
      <h2 class="purchase__h2">Каталог</h2>
      <?php foreach ($materials as $material) { ?>
      <div class="purchase__cart">
        <img src="<?=$material->image?>" alt="Кажется у этих материалов нету картинок" class="purchase__img">
        <div class="purchase__info">
          <div class="purchase__left">
            <p class="purchase__left-top"><?=$material->name?></p>
            <p class="purchase__left-botom"><?=$material->description?></p>
            <div style="display: flex; gap: 10px">
              <button class="purchase__button">Подробнее</button>
              <form action="/admin/material/destroy" method="POST">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="<?=$material->id?>">
                <button class="purchase__button delete">Удалить</button>
              </form>
            </div>
          </div>
          <div class="purchase__right">
            <p class="purchase__right-top"><?=$material->price?> ₽</p>
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
  .admin-material-panel {
      margin: 10px;
  }
  .admin-material-wrapper {
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