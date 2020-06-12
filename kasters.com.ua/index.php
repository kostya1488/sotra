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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
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

<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
  <!-- Индикаторы для карусели -->
  <ol class="carousel-indicators">
    <!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
  </ol>   
  <!-- Слайды карусели -->
  <div class="carousel-inner">
    <!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
    <div class="active item">
      <img src="img/slide1.png" alt="">
      <div class="carousel-caption">
 
        <p>Создаем креативные идеи для вашего бизнеса</p>
      </div>
    </div>
    <!-- Слайд №2 -->
    <div class="item">
      <img src="img/slide2.png" alt="">
      <div class="carousel-caption">
        
        <p>Предостовляем широкий спектр рекламных услуг для наших клиентов</p>
      </div>
    </div>
    <!-- Слайд №3 -->
  </div>
  <!-- Навигация для карусели -->
  <!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
  <a class="carousel-control right" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>



<div class="container-fluid" style="overflow:hidden; margin-bottom:30px;">
  <div class="row">
    <div class="romb margin"><h1><img src="img/romb.jpg" alt="">Рекламное агенство КАСТЕРС<img src="img/romb.jpg" alt=""></h1></div>
    <div class="col-sm-4">
      <div class="block-index">
        <div class="flaticon-toilets1"></div>
        <div class="hr"></div>
        <h3>МЫ ПРОФЕССИОНАЛЫ</h3>
        <p>Наше преимущество К нам уже обратились как молодые компании, так и представители среднего бизнеса,
         которые уже не один год функционируют на рынке,
         и в новой экономической обстановке приняли значимое решение выделить расходы на повышения репутации.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block-index">
        <div class="flaticon-coffee69"></div>
        <div class="hr"></div>
        <h3>РАБОТАЕМ НА РЕЗУЛЬТАТ</h3>
        <p>Причиной для обращения в "Кастерс" может стать новая ступень развития бизнеса,
         выход вашей кампании на свежие рынки, введение новой продукции и услуг.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="block-index">
        <div class="flaticon-hotel70"></div>
        <div class="hr"></div>
        <h3>НЕКОТОРЫЕ УСЛУГИ</h3>
        <p>Реклама в прессе<br>
Наружная реклама<br>
Внутренняя реклама<br>
Реклама в/на транспорте<br>
Реклама в метро и городской электричке Киева<br>
Реклама в Интернете<br>
Промоакции. Рассылки по ящикам.</p>
      </div>
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
        kasters.kiev@gmail.com</h2>
    </div>
  </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
