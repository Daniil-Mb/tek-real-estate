<header>
  <div style="display: flex; justify-content: space-around">
    <nav class="header-nav">
      <ul class="header-list">
        <li><a href="/">Главная</a></li>
        <li><a href="/catalog">Каталог</a></li>
        <li><a href="/feedback">Обратная связь</a></li>
        <li><a href="/about">О нас</a></li>
        <?php if (!isset($_SESSION['user'])) { ?>
          <li><a href="/login" class="register-button">Войти</a></li>
        <?php } else { ?>
          <li>
            <form action="/logout" method="POST">
              <input type="hidden" name="_method" value="DELETE">
              <button class="logout-button" type="submit">Выйти</button>
            </form>
          </li>
        <?php } ?>
      </ul>
    </nav>
  </div>
</header>

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        justify-content: flex-start;
    }

    header {
        background-color: #dcedfa;
        min-height: 50px;
    }

    .header-nav {
        height: 50px;
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
    }

    .logout-button {
        background-color: unset;
        border: 0;
        cursor: pointer;
    }

</style>

<style>
    html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}
    article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}
    html{height:100%}
    body{line-height:1}
    ol,ul{list-style:none}
    blockquote,q{quotes:none}
    blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}
    table{border-collapse:collapse;border-spacing:0}
</style>