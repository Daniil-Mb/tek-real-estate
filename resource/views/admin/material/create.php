<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require_once __DIR__ . '/../../layouts/header.php'?>
<main>
  <form class="create-material-form" action="/admin/material/create" method="POST">
    <h2 class="form-header">
      Форма добавления материалов
    </h2>

    <label class="create-material-item">
      <span>Название</span>
      <input type="text" name="name" value="<?=$data->name ?? ''?>">
        <?php if (!empty($errors->name)) { ?>
          <span class="error"><?=$errors->name?></span>
        <?php } ?>
    </label>

    <label class="create-material-item">
      <span>Описание</span>
      <input type="text" name="description" value="<?=$data->description ?? ''?>">
        <?php if (!empty($errors->description)) { ?>
          <span class="error"><?=$errors->description?></span>
        <?php } ?>
    </label>

    <label class="create-material-item">
      <span>Цена в рублях</span>
      <input type="number" name="price" min="1" value="<?=$data->price ?? 1?>">
        <?php if (!empty($errors->price)) { ?>
          <span class="error"><?=$errors->price?></span>
        <?php } ?>
    </label>

    <label class="create-material-item">
    <span>Ссылка на картинку</span>
    <input type="text" name="image" value="<?=$data->image ?? ''?>">
      <?php if (!empty($errors->image)) { ?>
        <span class="error"><?=$errors->image?></span>
      <?php } ?>
    </label>

    <div class="material-submit">
      <button class="button-material-submit" type="submit">
        Добавить
      </button>
    </div>
  </form>
</main>
</body>
</html>


<style>
    .form-header{
        text-align: center;
        margin: 50px;
        font-size: 20px;
    }

    .create-material-form {
        display: flex;
        flex-direction: column;
        width: 500px;
        margin: 0 auto;
        /* background: #e6f6ff; */
    }

    .create-material-form>.create-material-item {
        margin: 10px;
        display: flex;
        flex-direction: column;
    }

    .create-material-item>span{
        margin-left:5px;
        font-size: 18px;
    }

    .create-material-item>input{
        margin: 5px;
        padding: 8px;
    }

    .material-submit{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    .button-material-submit{
        background: #21b1ff;
        border: 0;
        width: 200px;
        margin: 8px;
        padding: 8px;
        border-radius: 20px;
    }

    .error{
        margin: 5px;
        color: #ff5353;
        font-size: 14px;
    }
</style>