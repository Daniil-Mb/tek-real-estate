<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    /** @var Controllers\Register\RegisterUserData|null $data */
    /** @var Controllers\Register\RegisterUserErrorsData $errors */
    ?>
</head>
<body>
<?php require_once __DIR__ . '/../layouts/header.php'?>
<main class="register-page">
  <form class="register-form" action="/login" method="POST">
    <h2 class="form-header">
      Форма входа
    </h2>

    <label class="register-item">
      <span>Email</span>
      <input type="text" name="email" value="<?=$data->email ?? ''?>">
        <?php if (!empty($errors->email)) { ?>
          <span class="error"><?=$errors->email?></span>
        <?php } ?>
    </label>

    <label class="register-item">
      <span>Пароль</span>
      <input type="password" name="password" value="<?=$data->password ?? ''?>">
      <?php if (!empty($errors->password)) { ?>
        <span class="error"><?=$errors->password?></span>
      <?php } ?>
    </label>

    <div class="register-submit">
      <button class="button-register-submit" type="submit">
        Войти
      </button>
      <a class="button-register-submit" href="/register" type="submit">
        Регистрация
      </a>
    </div>
  </form>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'?>
</body>
</html>

<style>
  .form-header{
      text-align: center;
      margin: 10px;
      font-size: 20px;
  }

  .register-form {
      display: flex;
      flex-direction: column;
      width: 500px;
      margin: 0 auto;
  }

  .register-form>.register-item {
      margin: 10px;
      display: flex;
      flex-direction: column;
  }

  .register-item>span{
      margin-left:5px;
      font-size: 18px;
  }

  .register-item>input{
      margin: 5px;
  }

  .register-submit{
      display: flex;
      justify-content: center;
  }

  .button-register-submit{
      background: #81e181;
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
