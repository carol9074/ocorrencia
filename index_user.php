<?php
session_start();
include 'config/conexao.php';

switch (@$_REQUEST['page']) {
 
  case "enviar":
    $_REQUEST['acao'] = "enviar";
    include 'agua.php';
    break;

    case "enviar2":
      $_REQUEST['acao'] = "enviar2";
      include 'luz.php';
      break;
      
      case "enviar3":
        $_REQUEST['acao'] = "enviar3";
        include 'ruas.php';
        break;

        case "enviarMensagem":
          $_REQUEST['acao'] = "enviarMensagem";
          include 'feedback.php';
          break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Mexant - Financial HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <title>Teste Usuario!</title>
</head>

<body>

  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#inicio" class="active">Inicio</a></li>
              <li class="scroll-to-section"><a href="#sobre">Sobre</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Categorias</a>
                <ul class="sub-menu">
                  <li><a href="agua.php">Água</a></li>
                  <li><a href="luz.php">Luz</a></li>
                  <li><a href="ruas.php">Ruas</a></li>
                </ul>
              </li>
              
              <li class="has-sub">
                <a href="javascript:void(0)">Minha Conta</a>
                <ul class="sub-menu">
                  <li><a href="perfil.php">Perfil</a></li>
                  <li><a href="luz.php">Notificações</a></li>
                  <li><a href="feedback.php">Feedback</a></li>
                  <li><a href="ruas.php">Status</a></li>
                  <li><a href="config/logout.php">Sair</a></li>

                </ul>
              </li>
              
              <a class='menu-trigger'>
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="swiper-container" id="inicio">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/slide-01.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2><em>Bem-vindo </em>ao site de ocorrências da cidade,<br>sua plataforma para fazer <em>a
                      diferença na comunidade.</em></h2>
                  <div class="div-dec"></div>
                  <div class="buttons">
                    <div class="green-button">
                      <a href="#">Discover More</a>
                    </div>
                    <div class="orange-button">
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/slide-02.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2><em>Juntos,</em>construímos<br>uma cidade melhor.Comece registrando sua <em>ocorrência hoje.</em>
                  </h2>
                  <div class="div-dec"></div>
                  <div class="buttons">
                    <div class="green-button">
                      <a href="#">Discover More</a>
                    </div>
                    <div class="orange-button">
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/slide-03.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2>Relate problemas,<br>inspire soluções.<em>Faça parte da mudança em sua cidade.</em></h2>
                  <div class="div-dec"></div>
                  <div class="buttons">
                    <div class="green-button">
                      <a href="#">Discover More</a>
                    </div>
                    <div class="orange-button">
                      <a href="#">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>

  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="sobre">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="service-item">
            <i class="fas fa-archive"></i>
            <p>O Site de Ocorrências da Cidade é uma plataforma online dedicada a facilitar a comunicação entre os
              residentes da cidade e as autoridades locais. Este site oferece aos cidadãos a oportunidade de relatar uma
              ampla gama de problemas e preocupações que afetam a comunidade, desde problemas de luz e água até questões
              de infraestrutura e segurança. Neste artigo, exploraremos as principais características e benefícios do
              site de ocorrências da cidade.</p>
          </div>
        </div>


  </section>
  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-2 col-3">
          <div class="item">
            <img src="assets/images/sim_tra-removebg-preview.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-3">
          <div class="item">
            <img src="assets/images/corsan_logo-removebg-preview.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-3">
          <div class="item">
            <img src="assets/images/ceee-removebg-preview.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 A Voz do Povo Todos os direitos reservados.


          </p>
        </div>
      </div>
    </div>
  </footer>





  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/swiper.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    var interleaveOffset = 0.5;

    var swiperOptions = {
      loop: true,
      speed: 1000,
      grabCursor: true,
      watchSlidesProgress: true,
      mousewheelControl: true,
      keyboardControl: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        progress: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress;
            var innerOffset = swiper.width * interleaveOffset;
            var innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".slide-inner").style.transform =
              "translate3d(" + innerTranslate + "px, 0, 0)";
          }
        },
        touchStart: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function(speed) {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-inner").style.transition =
              speed + "ms";
          }
        }
      }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);
  </script>
</body>


</html>