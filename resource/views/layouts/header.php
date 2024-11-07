<header>
<div class="header__container">
    <div class="header__logo">
      <img class="header__logo-img" src="https://psv4.userapi.com/s/v1/d/95OW2b9BTbCCQSMam-4bhw-WtASuWBboLED2t9wbJSEIUDTapMjd7LcxE_lpZk44Sv3wbn31ZTt5755Je5_AF15D9T2sddVpIhzGSjCGOYz9LEJHa2v2_g/domTek.png" alt="logo">
      <div class="header__logo-name">
        <p class="header__logo-name--top">ЖИЛЭКСПЕРТ</p>
        <p class="header__logo-name--bottom">Ваш дом - наша забота!</p>
      </div>
    </div>
    <nav class="header__nav">
      <ul class="header__nav-list">
        <li class="header__li"><a href="#main">Главная</a></li>
        <li class="header__li"><a href="#main">О нас</a></li>
        <li class="header__li"><a href="#call">Обратная связь</a></li>
        <li class="header__li"><a href="#catalog">Каталог</a></li>
        <?php if (!isset($_SESSION['user'])) { ?>
          <li><a href="/login" class="register-button">Войти</a></li>
        <?php } else { ?>
          <li class="header-login-item">
            <form action="/logout" method="POST">
              <input type="hidden" name="_method" value="DELETE">
              <button class="default-button" type="submit">Выйти</button>
            </form>
            <?php if ($_SESSION['user']['is_admin']) { ?>
              <a class="default-button" href="/admin">Админка</a>
            <?php } ?>
          </li>
        <?php } ?>
      </ul>
    </nav>
  </div>
</header>

<style>
* {
  padding: 0;
  margin: 0;
  border: 0;
}

*, *:before, *:after {
  box-sizing: border-box;
}

:focus, :active {
  outline: none;
}

a:focus, a:active {
  outline: none;
}

nav, footer, header, aside {
  display: block;
}

html, body {
  height: 100%;
  width: 100%;
  font-size: 100%;
  line-height: 1;
  font-size: 14px;
  -ms-text-size-adjust: 100%;
  -moz-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

input, button, textarea {
  font-family: inherit;
}

input::-ms-clear {
  display: none;
}

button {
  cursor: pointer;
}

button::-moz-focus-inner {
  padding: 0;
  border: 0;
}

a, a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
  color: rgb(0, 0, 0);
}

ul li {
  list-style: none;
}

img {
  vertical-align: top;
}

h1, h2, h3, h4, h5, h6 {
  font-size: inherit;
  font-weight: inherit;
}

a {
  color: #000;
}

.header {
  width: 100%;
  background: #e6f6ff;
}
.header__container {
  margin: 0 auto;
  max-width: 1780px;
  max-height: 140px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.header__logo {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin-left: 70px;
  gap: 10px;
}
.header__logo-img {
  max-width: 100px;
  max-height: 100px;
}
.header__logo-name {
  padding-top: 14px;
}
.header__logo-name--top {
  font-weight: 400;
  font-size: 24px;
  line-height: 30px;
}
.header__logo-name--bottom {
  font-weight: 400;
  font-size: 12px;
  line-height: 24px;
}
.header__nav-list {
  width: 800px;
  display: flex;
  justify-content: space-around;
  align-items: center;
}
.header-login-item {
    display: flex;
    align-items: center;
}
.header-login-item>form{
    margin: 5px;
}
.header__log {
  margin-right: 70px;
  display: flex;
  gap: 50px;
}
.header__register {
  color: #000000;
  border-radius: 20px;
  width: 80px;
  height: 30px;
  background: #ffffff;
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
}
.header__login {
  color: #fff;
  border-radius: 20px;
  width: 80px;
  height: 30px;
  background: #21b1ff;
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
}

.about {
  margin: 0 auto;
}
.about__h1 {
  margin-top: 100px;
  font-weight: 400;
  font-size: 48px;
  text-align: center;
}
.about__h2 {
  margin-top: 40px;
  font-weight: 400;
  font-size: 32px;
  text-align: center;
  color: #21b1ff;
}
.about__block {
  margin-top: 40px;
  display: grid;
  place-items: center;
  grid-template-columns: repeat(2, 1fr);
  gap: 100px;
}
.about__card {
  display: flex;
  justify-content: space-between;
}
.about__img {
  width: 120px;
  height: 120px;
}
.about__text {
  margin: 15px 0 0 10px;
  display: flex;
  flex-direction: column;
  max-width: 300px;
  gap: 5px;
}
.about__text-top {
  font-weight: 400;
  font-size: 20px;
}
.about__text-bottom {
  font-weight: 400;
  font-size: 18px;
}
@media (max-width: 768px) {
  .about__block {
    grid-template-columns: 1fr; /* Для экранов до 768px, один блок на строку */
  }
}

.form {
  margin: 0 auto;
}
.form__block {
  margin-top: 85px;
  width: 1600px;
  background: #fff;
  padding: 0 60px;
}
.form__h2 {
  padding: 40px 0 30px;
  font-weight: 400;
  font-size: 32px;
  text-align: center;
}
.form__field {
  margin-top: 20px;
  max-width: 1480px;
}
.form__p {
  font-weight: 400;
  font-size: 20px;
}
.form__input {
  margin-top: 10px;
  width: 100%;
  font-weight: 400;
  font-size: 18px;
  border: none; /* Убираем другие границы */
  border-bottom: 2px solid #000; /* Добавляем подчеркивание */
  outline: none; /* Убираем стандартный контур при фокусе */
  padding: 5px 0;
}
.form__button {
  border-radius: 10px;
  width: 110px;
  height: 60px;
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
  background: #21b1ff;
  color: #fff;
}
.form__div-botton {
  margin: 40px 0;
  display: flex;
  justify-content: center;
}
.form__consent {
  font-weight: 400;
  font-size: 14px;
  color: rgba(0, 0, 0, 0.5);
  padding-bottom: 50px;
}

.purchase {
  margin: 50px 70px;
}
.purchase__h2 {
  font-weight: 400;
  font-size: 32px;
}
.purchase__img {
  width: 400px;
  height: 225px;
}
.purchase__cart {
  margin-top: 50px;
  display: flex;
  justify-content: flex-start;
}
.purchase__info {
  margin-left: 50px;
  display: flex;
  justify-content: space-between;
}
.purchase__left {
  display: flex;
  flex-direction: column;
  gap: 20px;
  justify-content: space-around;
}
.purchase__left-top {
  font-weight: 400;
  font-size: 20px;
}
.purchase__left-botom {
  font-weight: 400;
  font-size: 18px;
  color: rgba(0, 0, 0, 0.5);
}
.purchase__button {
  border-radius: 10px;
  width: 110px;
  height: 60px;
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
  background: #21b1ff;
  color: #fff;
}
.purchase__right {
  margin-left: 50px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  gap: 5px;
}
.purchase__right-top {
  font-weight: 400;
  font-size: 18px;
}
.purchase__right-botom {
  font-weight: 400;
  font-size: 18px;
}

.footer {
  width: 100%;
}
.footer__container {
  margin: 0 auto;
  max-width: 1780px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.footer__logo {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin-left: 70px;
  gap: 10px;
}
.footer__logo-img {
  max-width: 100px;
  max-height: 100px;
}
.footer__logo-name {
  padding-top: 14px;
}
.footer__logo-name--top {
  font-weight: 400;
  font-size: 24px;
  line-height: 30px;
}
.footer__logo-name--bottom {
  font-weight: 400;
  font-size: 12px;
  line-height: 24px;
}
.footer__p-mid {
  font-weight: 400;
  font-size: 18px;
  max-width: 475px;
}
.footer__p {
  font-weight: 400;
  font-size: 18px;
}
.footer__info {
  margin-right: 70px;
}
.footer__info-img {
  max-width: 30px;
  max-height: 30px;
}
.footer__info-text {
  width: 190px;
  text-align: center;
  font-weight: 400;
  font-size: 20px;
}
.footer__info-block {
  display: flex;
  justify-content: space-around;
  width: 190px;
}
.footer__info-img {
  margin-top: 10px;
  max-width: 40px;
  max-height: 40px;
}
.footer__cont {
  margin: 0 auto;
  padding: 25px 0 50px;
  max-width: 1780px;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 150px;
}
.footer__cont-left {
  margin-left: 70px;
  font-style: italic;
  font-weight: 600;
  font-size: 18px;
  color: rgba(0, 0, 0, 0.5);
}
.footer__cont-right {
  font-weight: 400;
  font-size: 18px;
  text-decoration: underline; /* Добавляет подчеркивание */
}

html {
  scroll-behavior: smooth;
}

body {
  background: #f1faff;
}

img {
  width: 100%;
  height: 100%;
}

.main__container {
  margin: 0 auto;
  max-width: 1600px;
}

  .wrapper {
    height: 100%;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
  }
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        justify-content: flex-start;
    }

    header {
        background-color: #dcedfa;
    }

    .header-nav {
        height: 50px;
        margin-top: 30px;
        margin-right: 60px;
    }

    .header-list {
        height: 100%;
        width: 800px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .register-button {
        background-color: unset;
        border: 0;
        color: #fff;
        border-radius: 20px;
        padding: 10px 20px;

        background: #21b1ff;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
    }

    .default-button {
        background-color: unset;
        border: 0;
        cursor: pointer;
        color: #fff;
        border-radius: 20px;
        padding: 10px 20px;
        background: #21b1ff;
        height: 35px;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
    }
/* Флекс-контейнер для body */
body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Основной контент */
        main {
            flex-grow: 1; /* Занимает всё доступное пространство */
        }


</style>






