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
<?php require_once __DIR__ . '/../layouts/header.php'?>
<main>
<div class="main__container" id="main">
            <section class="about">
                <h1 class="about__h1">Строительные материалы «СтройТЭК»</h1>
                <h2 class="about__h2">Дорогие посетители! Мы рады приветствовать вас на нашем сайте!</h2>
                <div class="about__block">
                    <div class="about__card">
                        <img src="/img/icon-building-material.png" alt="" class="about__img">
                        <div class="about__text">
                            <p class="about__text-top">Продажа строй материалов</p>
                            <p class="about__text-bottom">Продадим строй материалы, быстро и безопасно</p>
                        </div>
                    </div>
                    <div class="about__card">
                        <img src="/img/icon-worker.png" alt="" class="about__img">
                        <div class="about__text">
                            <p class="about__text-top">Высококачественные специалисты</p>
                            <p class="about__text-bottom">Досконально проверим стройматериалы, минимизируем риски</p>
                        </div>
                    </div>
                    <div class="about__card">
                        <img src="/img/icon-industry.png" alt="" class="about__img">
                        <div class="about__text">
                            <p class="about__text-top">Доставка в любую точку</p>
                            <p class="about__text-bottom">Рассчитаем стоимость доставки и доставим в убодные вам сроки</p>
                        </div>
                    </div>
                    <div class="about__card">
                        <img src="/img/icon-construction.png" alt="" class="about__img">
                        <div class="about__text">
                            <p class="about__text-top">Страхование материалов</p>
                            <p class="about__text-bottom">Защитим вас и ваше имущество от любых непредвиденных обстоятельств</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="form" id="call">
                <div class="form__block">
                    <h2 class="form__h2">Купите закажите материалы прямо сейчас</h2>
                    <div class="form__field">
                        <p class="form__p">Введите имя</p>
                        <input type="text" class="form__input" placeholder="Введите имя">
                    </div>
                    <div class="form__field">
                        <p class="form__p">Введите E-mail</p>
                        <input type="text" class="form__input" placeholder="mail@mail.ru">
                    </div>
                    <div class="form__field">
                        <p class="form__p">Введите телефон</p>
                        <input type="text" class="form__input" placeholder="+7 (999) 999 99 99">
                    </div>
                    <div class="form__div-botton">
                        <button class="form__button">Отправить</button>
                    </div>
                    <p class="form__consent">Нажимая на кнопку, Вы принимаете Положение и Согласие на обработку персональных данных.</p>
                </div>
            </section>
            <section class="purchase" id="catalog">
                <h2 class="purchase__h2">Каталог</h2>
                <?php foreach ($houses as $house) { ?>
                <div class="purchase__cart">
                    <img src="<?=$house->image?>" alt="Для этой невижемости нету картинки" class="purchase__img">
                    <div class="purchase__info">
                        <div class="purchase__left">
                            <p class="purchase__left-top"><?=$house->name?></p>
                            <p class="purchase__left-botom"><?=$house->description?></p>
                            <button class="purchase__button">Подробнее</button>
                        </div>
                        <div class="purchase__right">
                            <p class="purchase__right-top"><?=$house->price?> ₽</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </section>
            <section class="news"></section>
            <section class="connection"></section>
        </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'?>
</body>
</html>

