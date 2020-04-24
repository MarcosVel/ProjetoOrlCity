<!DOCTYPE html>
<html ng-app="shop">  <!-- ng-app é para o angular-->
  <head>
    <meta charset="utf-8">          <!--antes do title para concertar acentos do titulo-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orlando City</title>
    <!-- Required meta tags -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2/dist/assets/owl.theme.default.min.css">
    <script src="https://use.fontawesome.com/b5d0a71661.js"></script>
    <link rel="stylesheet" href="lib/raty/lib/jquery.raty.css">
    <link rel="stylesheet" href="css/orlcity.css">
    <link rel="stylesheet" href="css/orlcity-mobile.css">
  
    <script src="lib/angularjs/angular.min.js"></script>

  </head>
  
  <body>
    <header>

      <div id="menu-mobile-mask" class="d-block d-sm-none"></div>

      <div id="menu-mobile" class="d-block d-sm-none">

        <ul class="list-unstyled">    <!--list-unstyled para tirar as bolinhas do ul-->
          <li><a href="videos.php">Videos</a></li>
          <li><a href="#">Tickets</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Schedule</a></li>
        </ul>

        <div class="bar-close">
          <button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
        </div>

      </div>

        <div class="header-black">      <!--criando a header preta-->
            <div class="container">
              
              <input type="search" id="input-search-mobile" class="d-block d-sm-none" placeholder="Search...">

              <button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
              <button id="btn-search" type="button"><i class="fa fa-search"></i></button>
              
              <ul class="float-right">
                    <li class="club-01"><a href="#"></a></li>
                    <li class="club-02"><a href="#"></a></li>
                    <li class="club-03"><a href="#"></a></li>
                    <li class="club-04"><a href="#"></a></li>
                    <li class="club-05"><a href="#"></a></li>
                    <li class="club-06"><a href="#"></a></li>
                    <li class="club-07"><a href="#"></a></li>
                    <li class="club-08"><a href="#"></a></li>
                    <li class="club-09"><a href="#"></a></li>
                    <li class="club-10"><a href="#"></a></li>
                    <li class="club-11"><a href="#"></a></li>
                    <li class="club-12"><a href="#"></a></li>
                    <li class="club-13"><a href="#"></a></li>
                    <li class="club-14"><a href="#"></a></li>
                    <li class="club-15"><a href="#"></a></li>
                    <li class="club-16"><a href="#"></a></li>
                    <li class="club-17"><a href="#"></a></li>
                    <li class="club-18"><a href="#"></a></li>
                    <li class="club-19"><a href="#"></a></li>
                    <li class="club-20"><a href="#"></a></li>
                    <li class="club-21"><a href="#"></a></li>
                    <li class="club-22"><a href="#"></a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <nav id="menu" class="float-right">
                  <ul>
                    <li><a href="videos.php">Videos</a></li>
                    <li><a href="#">Tickets</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Schedule</a></li>
                    <li class="search">
                      <div class="input-group">
                        <input type="search" placeholder="Search..." id="input-search">
                        <span class="input-group-btn">
                          <button type="button"><i class="fa fa-search"></i></button> <!--pegando link da imagem da lupa de pesquisa-->
                        </span>
                      </div><!-- /input-group -->
                    </li>
                  </ul>
                </nav>
            </div>
        </div>

        <div class="container">  <!--para poder sobrescrever as tags e a imagem-->
            <a href="index.php"><img id="logotipo" src="img/logo.png" alt="Logotipo"></a>  <!--o alt serve para caso a foto não seja carregada, avise que é um logotipo-->
        </div>

    </header>