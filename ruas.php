<?php 
if (!isset($_SESSION)) {
  session_start();
}

include 'config/conexao.php';
switch (@$_REQUEST['acao']) {
    case 'enviar3':
       $ende_ocorrencia = $_POST ['endereco_ocorrencia'];
       $compl_ocorrencia = $_POST ['complemento_ocorrencia'];
       $cid_ocorrencia = $_POST ['cidade_ocorrencia'];
       $bairro_ocorrencia = $_POST ['bairro_ocorrencia'];
       $cep_ocorrencia = $_POST ['cep_ocorrencia'];
        $comentario = $_POST['descricao'];
        $status = $_POST['status_ocorrencia'];
   

            $sql = "INSERT INTO ocorrencia (tipo_ocorrencia, descricao,status_ocorrencia, endereco_ocorrencia,complemento_ocorrencia,cidade_ocorrencia,bairro_ocorrencia,cep_ocorrencia) 
        VALUES ('ruas', '{$comentario}','solicitado','{$ende_ocorrencia}','{$compl_ocorrencia}','{$cid_ocorrencia}','{$bairro_ocorrencia}','{$cep_ocorrencia}')";

            $res = $mysqli->query($sql);

            if ($res == true) {
                print "<script>alert('Ocorrencia realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Cadastro não foi realizado!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Mexant Template - Services page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->

</head>

<body>


    <!-- ***** Header Area Start ***** -->
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
                            <li class="has-sub">
                                <a href="javascript:void(0)">Categorias</a>
                                <ul class="sub-menu">
                                    <li><a href="agua.php">Água</a></li>
                                    <li><a href="luz.php">Luz</a></li>
                                    <li><a href="contact-us.html">Contato</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php">Voltar</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h2>Ruas com Problema</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area End ***** -->

    <section class="main-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="left-image">
                                    <img src="assets/images/buraco.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="right-text-content">
                                    <h4>Sobre o Formulário</h4>
                                    <p>Este formulário foi criado para coletar informações essenciais sobre problemas
                                        relacionados à luz
                                        em sua área. Seu feedback é fundamental para identificar e resolver questões que
                                        afetam a qualidade,
                                        o acesso e o fornecimento de água. Por favor, preencha este formulário com o
                                        máximo de detalhes
                                        possível para nos ajudar a entender melhor a situação.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="service-item">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="left-text-content">
                                    <h4>Ruas em Má Conservação</h4>
                                    <p>Ruas com problemas e buracos podem apresentar desafios significativos para a
                                        segurança, a mobilidade e o conforto dos moradores. Presença de buracos,
                                        rachaduras e superfícies irregulares nas ruas. Esses problemas incluem buracos
                                        no asfalto, falta de sinalização adequada, iluminação deficiente, calçadas
                                        danificadas, congestionamentos frequentes e falta de manutenção adequada. Essas
                                        condições podem resultar em riscos para pedestres e motoristas, impactando
                                        negativamente o tráfego, a mobilidade urbana e a estética das áreas afetadas.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-image">
                                    <img src="assets/images/buraco rua.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="service-item last-service">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="left-image">
                                    <img src="assets/images/alagamento 1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="right-text-content">
                                    <!-- <i class="fas fa-archive"></i> -->
                                    <h4>Ruas com Alagamentos</h4>
                                    <p>Ruas com problemas de alagamento enfrentam questões relacionadas ao acúmulo
                                        excessivo de água, resultando em situações de inundação. Isso pode ocorrer
                                        devido a diversos fatores, como falta de sistemas de drenagem eficazes,
                                        obstrução de canais pluviais, impermeabilização do solo devido ao
                                        desenvolvimento urbano desordenado e elevação do lençol freático. O alagamento
                                        de ruas não apenas causa transtornos à mobilidade, mas também pode resultar em
                                        danos à infraestrutura, veículos e propriedades. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-details">

        <div class="col-lg-10 offset-lg-1">
            <div class="naccs">
                <div class="tabs">
                    <div class="row">
                    </div>
                    <div class="col-lg-12">
                        <ul class="nacc">
                            <li class="active">
                                <div>
                                    <div class="left-image">
                                        <img src="assets/images/service-details-01.jpg" alt="">
                                    </div>
                                    <div class="right-content">
                                        <h4>Comunicação com a Comunidade:</h4>
                                        <p class="fw-bold">
                                        <h5>Informar a comunidade sobre os riscos, a situação e as ações tomadas é
                                            crucial
                                            para garantir a
                                            segurança pública.
                                            A comunicação transparente mantém a população informada e ajuda a evitar
                                            comportamentos
                                            arriscados.</h5>
                                        </p>
                                        <br><br><br>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <br><br>
    <form class="row g-3" action="?page=enviar3" method="POST">
    <div class="row">
      <div class="col-md-6">
      <input type="hidden" name="acao" value="enviar3">
      <input type="hidden" name="tipo_ocorrencia" value="ruas">
        <!-- <input type="text" class="form-control" placeholder="Nome Completo" aria-label="First name"> -->
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label"></label>
        <input type="text" class="form-control" placeholder="endereço" aria-label="First name" name="endereco_ocorrencia">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label"></label>
        <input type="text" class="form-control" placeholder="complemento" aria-label="First name" name="complemento_ocorrencia">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label"></label>
        <input type="text" class="form-control" placeholder="cidade" aria-label="First name" name="cidade_ocorrencia">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label"></label>
        <select id="inputState" class="form-select" name="bairro_ocorrencia">
          <option selected>Bairro</option>
          <option>Centro</option>
          <option>Zona Nova</option>
          <option>São Francisco</option>
          <option>Nova Tramandaí</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label"></label>
        <input type="text" class="form-control" placeholder="CEP" aria-label="First name" name="cep_ocorrencia">
      </div>
      <br><br><br>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Deixe seu Comentario" id="floatingTextarea2"  name="descricao"
          style="height: 200px"></textarea>
                <label for="floatingTextarea2">Deixe seu Comentario</label> <br>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Concordo com os Termos de Serviço.
                    </label>
                </div> <br>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
    </form>
    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="assets/images/sim_tra-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="assets/images/ceee-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="assets/images/corsan_logo-removebg-preview.png" alt="">
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
                progress: function () {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                            "translate3d(" + innerTranslate + "px, 0, 0)";
                    }
                },
                touchStart: function () {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function (speed) {
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