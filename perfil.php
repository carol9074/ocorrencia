<?php
session_start();
include 'config/conexao.php';
$sql = "SELECT * FROM cadastro_usuario WHERE id =" . $_SESSION['id'];
$res = $mysqli->query($sql);
$row = $res->fetch_object();

switch (@$_REQUEST['page']) {
    case "editar":
      $_REQUEST['acao'] = "editar";
     include 'config/salvar_usuario.php';
      break;

      case "deletar":
        $_REQUEST['acao'] = "excluir";
       include 'config/salvar_usuario.php';
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <input type="hidden" name="acao" value= "editar"> 
    <div class="row">
      <div class="col-md-6"> <br>
        <input type="text" class="form-control" placeholder="<?php echo $row->nome; ?>" aria-label="First name" name="nome">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label"></label>
        <input type="text" class="form-control" placeholder="<?php echo $row->cpf; ?>" aria-label="First name" name="cpf">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label"></label>
        <input type="text" class="form-control" placeholder="<?php echo $row->email; ?>" aria-label="First name" name="email">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label"></label>
        <input type="text" class="form-control" placeholder="<?php echo $row->senha; ?>" aria-label="First name" name="senha">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label"></label>
        <input type="text" class="form-control" placeholder="<?php echo $row->endereco; ?>" aria-label="First name" name="ende">
      </div>
      <div class="col-md-6">
        <label for="inputAddress2" class="form-label"></label>
        <input type="text" class="form-control" placeholder="<?php echo $row->cidade; ?>" aria-label="First name" name="cidade">
      </div>
      <div class="col-md-6">
        <label for="inputAddress2" class="form-label"></label>
        <input type="text" class="form-control" placeholder="<?php echo $row->complemento; ?>" aria-label="First name" name="complemento">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label"></label>
        <input type="text" class="form-control" placeholder="<?php echo $row->endereco; ?>" name="bairro">
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label"></label>
        <input type="text" class="form-control" id="inputZip"placeholder="<?php echo $row->cep ;?>" aria-label="First name" name="cep">
        <br>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
  </form>
  </div>
  <form class="row g-6" action="?page=deletar" method="POST">
    <input type="hidden" name="acao" value= "excluir"> 
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Deletar</button>
        </div>
      </div>
    </form>
    </style>
</head>
<body>
    <script>
        function openFileInput() {
            document.getElementById('file-input').click();
        }
        function previewImage(input) {
            var file = input.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profile-picture').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

</body>
</html>














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