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
<main class="admin-house-wrapper">
  <div class="admin-house-panel">
    <a class="default-button" href="/admin/house/create">Добавить недвижимость</a>
  </div>
  <div class="admin-house-content">

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
      width: 800px;
      margin: 0 auto;
  }
</style>