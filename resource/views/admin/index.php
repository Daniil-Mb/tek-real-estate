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
  <nav class="admin-nav">
    <h2 class="admin-panel">Админ панель</h2>
    <ul class="admin-panel-list">
      <li><a href="/admin/materials">Материалы</a></li>
      <li><a href="/admin/feedback">Заявки</a></li>
    </ul>
  </nav>
</main>
</body>
</html>

<style>
  .admin-nav {
      width: 800px;
      margin: 0 auto;
  }

  .admin-panel {
      font-size: 20px;
      font-weight: bold;
      margin: 10px;
      text-align: center;
  }

  .admin-panel-list {
      display: flex;
      flex-direction: column;
      font-size: 18px;
  }

  .admin-panel-list>li {
      padding: 10px;
  }
</style>
