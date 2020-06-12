<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Главная</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/remodal.css">
 <link rel="stylesheet" href="css/remodal-default-theme.css">
  
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <nav class="navbar navbar-default nopadding">
  <div class="container-fluid nopadding" style="overflow:hidden;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="white">MENU</span>
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse nopadding" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="col-sm-3 nopadding bg-red"><a href="index.php">Главная</a></li>
        <li class="col-sm-3 nopadding bg-blue"><a href="uslugi.php">Направления деятельности</a></li>
        <li class="col-sm-3 nopadding bg-orange"><a href="work.html">Вакансии</a></li>
        <li class="col-sm-3 nopadding bg-green"><a href="contact.html">Контакты</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="container-fluid" style="overflow:hidden; margin-top:60px;">
  <div class="row">
    <div class="romb"><h1><img src="img/romb.jpg" alt="">Услуги Рекламного Агенства КАСТЕРС<img src="img/romb.jpg" alt=""></h1></div>
    <div class="index-text">
      <p>“КАСТЕРС” – объединение узкопрофильных рекламных компаний, где каждая из них работает только в своей отрасли. Огромный профильный опыт связок дизайнеров, рекламщиков, фотографов, операторов и креативщиков, в каждой отдельно взятой отрасли, позволяет реализовывать качественные проекты в максимально короткие сроки. Группа компаний “КАСТЕРС” создает продукт, полностью удовлетворяющий потребностям современного клиента.</p>

      <div class="check-uslugi">
        <p><img src="img/check.jpg" alt="">креатив, брендинг, маркетинг, позиционирование, реклама</p>
        <p><img src="img/check.jpg" alt="">издание корпоративной прессы</p>
        <p><img src="img/check.jpg" alt="">кроссплатформенное размещение</p>
        <p><img src="img/check.jpg" alt="">нативные форматы</p>
        <p><img src="img/check.jpg" alt="">глубокая аналитика</p>
        <p><img src="img/check.jpg" alt="">реклама в газетах,в подъездах и лифтах</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="home">
    <p><a class="mainButton" href="#modal">Оставить заявку</a></p>
  </div>

  <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
    <div class="remodalBorder">
      <p><img src="img/sendico.png"></p>
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
          <form id="form">
            <h2 id="modal1Title">Оставьте ваши контактные данные и наш консультант свяжется <br>с вами</h2>
            <input type="text" class="putName" name="name" placeholder="Ваше ваше имя" required>
            <input name="phone" type="tel" class="putPhone" placeholder="Введите номер телефона" required>
            <input type="submit" name="submit" class="btn" value="ОТПРАВИТЬ">
            <input type="hidden" name="formData" value="Заявка с сайта">
        </form>
    </div>
  </div>
</div>
   

<div class="container-fluid footer">
  <div class="row">
    <div class="col-sm-8">
      <div class="footer-menu">
        <a href="index.php" class="col-sm-3">Главная</a>
        <a href="uslugi.php" class="col-sm-3">Направления деятельности</a>
        <a href="work.html" class="col-sm-3">Вакансии</a>
        <a href="contact.html" class="col-sm-3">Контакты</a>
      </div>
    </div>
    <div class="col-sm-4">
      <h2>+38(067)221-21-16 <br><br>
        kasters.kiev@gmail.com</h2>    </div>
  </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/remodal.min.js"></script>
<script src="js/script.js"></script>
  </body>
</html>
