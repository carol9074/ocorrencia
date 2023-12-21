<?php
session_start();
include 'config/conexao.php';
switch (@$_REQUEST['page']) {
    case "editar":
      $_REQUEST['acao'] = "editar";
      include 'config/salvar_usuario.php';
      break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
''
<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <title>Perfil</title>
</head>

<body>
<div class="p-3 mb-2 bg-dark text-white">
  <form class="row g-6" action="?page=editar" method="POST">
    <div class="row">
      <div class="col-md-6"> <br>
        <input type="text" class="form-control" placeholder="Email" aria-label="First name" name="email">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label"></label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" aria-label="First name" name="senha">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label"></label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Endereço" name="ende">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label"></label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Complemento" name="complemento">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label"></label>
        <input type="text" class="form-control" id="inputCity" placeholder="Cidade" aria-label="First name" name="cidade">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label"></label>
        <select id="inputState" class="form-select" name="bairro">
          <option selected>Bairro</option>
          <option>Centro</option>
          <option>Zona Nova</option>
          <option>São Francisco</option>
          <option>Nova Tramandaí</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label"></label>
        <input type="text" class="form-control" id="inputZip" placeholder="CEP" aria-label="First name" name="cep">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </form>
  </div>

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