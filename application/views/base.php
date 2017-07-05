<!--este archivo servira como plantilla base para toda la pagina web-->
<?php require_once 'ti.php' ?><!--para la herencia de paltillasa (solo se llama una sola ves al archivo ti.php)-->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#E53935"/>
    <title><?php startblock('titulo') ?><?php endblock() ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/assets/img/logo.png"/>
    <?php startblock('meta') ?>
    <?php endblock() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/assets/img/logo.png"/>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/fontello/css/fontello.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/slick/slick.css">
    <link rel="stylesheet" href="/assets/slick/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/main-carousel.css">
    <link rel="stylesheet" href="/assets/css/nav-cantones.css">
    <link rel="stylesheet" href="/assets/css/nav.css">
    <link rel="stylesheet" href="/assets/css/hover.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/agenda.css">
    <link rel="stylesheet" href="/assets/css/serviceBox.css">
    <link rel="stylesheet" href="/assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/owl-carousel/owl.theme.default.css">


    <style>
        body {

            overflow-x: hidden;
            overflow-y: hidden;

        }

        html {
            overflow-x: hidden;
            font-family: 'Montserrat', sans-serif;
        }

        @font-face {
            font-family: arial_rounded;
            src: url(assets/fuentes/arial_rounded.ttf);
        }




        #modal-cantones .modal-lg {
            width: 800px;
        }

        #modal-cantones .modal-content{
            border-radius: 2em;
            background-color: rgba(255, 255, 255, 1);
        }

        #modal-cantones .modal-content img{
           border: none;
            width: auto;
            max-height: 160px;
        }

        #modal-cantones .modal-content .close{
            color: #fff;
        }

        #content-cantones > [class*='col-'] {
            padding: 3px;
        }

    </style>

    <?php startblock('css') ?><?php endblock() ?>

</head>
<body>


<!-- inicio Header -->
<div id="header" class="container-fluid">
    <h1 id="logo"><img src="/assets/img/logo.png"> <span id="span-canton" hidden style="color: white">AMBATO</span></h1>

    <button class="nav-toggle"><i class="icon-th-large-outline"></i></button>


    <!-- Navigation -->
    <div id="navigation">


        <ul class="hidden-sm hidden-xs" style="float: left;">
            <li><a target="_blank" href="#"><i
                        class="icon-facebook"></i></a></li>
            <li><a target="_blank" href="#"><i class="icon-google"></i></a>
            </li>
            <li><a target="_blank" href="#"><i
                        class="icon-youtube"></i></a></li>
        </ul>


        <ul style="float: right;">

            <li style="float: right"><a id="open-login" href="javascript:;"><i
                        class="icon-users-1"></i>INICIAR SESIÓN</a></li>
        </ul>


        <ul id="main-nav" style="float: right; overflow-y: hidden;">

            <li><a id="nav-inicio" href="index.php">INICIO</a></li>
            <li><a id="nav-cantones" class="hidden-xs" href="#modal-cantones" data-toggle="modal">CANTONES</a></li>
            <li><a class="scroll-to" id="nav-agenda" href="#agenda-cultural">AGENDA CULTURAL</a></li>
            <li id="nav-exit"><a href="javascript:;" onclick="$('#main-nav').removeClass('open')"><i
                        class="icon-cancel"></i></a></li>
            <div class="clearfix"></div>
            <div id="nav-content-cantones" class="text-center"
                 style="background-color: transparent; border: none; padding-left: 1%; padding-right: 1%;">
                <div class="col-xs-4"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                 src="/assets/img/cantones/c_ambato.png"
                                                                 width="100%"> </a>
                </div>
                <div class="col-xs-4"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                 src="/assets/img/cantones/c_banios.png"
                                                                 width="100%"> </a>
                </div>
                <div class="col-xs-4"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                 src="/assets/img/cantones/c_cevallos.png"
                                                                 width="100%"> </a>
                </div>
                <div class="clearfix"></div>
                <br>

                <div class="col-xs-4"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                 src="/assets/img/cantones/c_mocha.png"
                                                                 width="100%"> </a></div>
                <div class="col-xs-4"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                 src="/assets/img/cantones/c_papate.png"
                                                                 width="100%"> </a>
                </div>
                <div class="col-xs-4"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                 src="/assets/img/cantones/c_pelileo.png"
                                                                 width="100%"> </a>
                </div>
                <div class="clearfix"></div>
                <br>

                <div class="col-xs-4"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                 src="/assets/img/cantones/c_pillaro.png"
                                                                 width="100%"> </a>
                </div>
                <div class="col-xs-4"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                 src="/assets/img/cantones/c_quero.png"
                                                                 width="100%"> </a></div>
                <div class="col-xs-4"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                 src="/assets/img/cantones/c_tisaleo.png"
                                                                 width="100%"> </a>
                </div>
                <div class="clearfix"></div>

            </div>

        </ul>


    </div>
    <!-- end Navigation -->

    <div class="clearfix"></div>

</div>
<!-- end Header -->


<div class="clearfix"></div>

<!-- Modal -->
<div id="modal-cantones" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #E53935; border-top-left-radius: 2em; border-top-right-radius: 2em;">
                <button type="button" class="close" data-dismiss="modal"><i class="icon-cancel"></i></button>
                <h4 class="modal-title" style="text-align: center; color: #fff;">TUNGURAHUA</h4>
            </div>
            <div class="modal-body">
                <div id="content-cantones" class="text-center">
                    <div class="col-md-4 col-sm-4 col-xs-6"><a href="<?php echo base_url('canton/1'); ?>"> <img class="hvr-grow-rotate"
                                                                                       src="/assets/img/cantones/c_ambato.png"
                                                                                       width="100%"> </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6"><a href="<?php echo base_url('canton/2'); ?>"> <img class="hvr-grow-rotate"
                                                                                       src="/assets/img/cantones/c_banios.png"
                                                                                       width="100%"> </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                                       src="/assets/img/cantones/c_cevallos.png"
                                                                                       width="100%"> </a>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-6"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                                       src="/assets/img/cantones/c_mocha.png"
                                                                                       width="100%"> </a></div>
                    <div class="col-md-4 col-sm-4 col-xs-6"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                                       src="/assets/img/cantones/c_papate.png"
                                                                                       width="100%"> </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                                       src="/assets/img/cantones/c_pelileo.png"
                                                                                       width="100%"> </a>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-6"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                                       src="/assets/img/cantones/c_pillaro.png"
                                                                                       width="100%"> </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                                       src="/assets/img/cantones/c_quero.png"
                                                                                       width="100%"> </a></div>
                    <div class="col-md-4 col-sm-4 col-xs-6"><a href="canton.php"> <img class="hvr-grow-rotate"
                                                                                       src="/assets/img/cantones/c_tisaleo.png"
                                                                                       width="100%"> </a>
                    </div>


                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>

<?php startblock('contenido') ?><?php endblock() ?>


<!--footer-->
<footer>
    <div class="container text-center">
        <br>

        <img class="logo" src="/assets/img/logo.png" width="125"
             height="125"/>

        <div class="clearfix"></div>
        <br>

        <a href="#">03-2822149</a> | <a href="#">Calle Montalvo 3-10 y Rocafuerte</a>

        <div id="social">
            <a class="facebookBtn smGlobalBtn" href="#"></a>
            <a class="twitterBtn smGlobalBtn" href="#"></a>
            <a class="googleplusBtn smGlobalBtn" href="#"></a>
            <a class="linkedinBtn smGlobalBtn" href="#"></a>
            <a class="pinterestBtn smGlobalBtn" href="#"></a>
            <a class="tumblrBtn smGlobalBtn" href="#"></a>
        </div>


        <div class="clearfix"></div>
        <br>
    </div>
    <div class="bottom-bar">
        Desarrollado por| <a href="">UCE </a> | <a href=""> FACULTAD DE CIENCIAS, FÍSICAS Y MATEMÁTICA</a>
    </div>
</footer>
<!--fin footer-->


<div style="bottom: 35px; right: 10px; position: fixed; z-index: 999;">
    <a id="toTop" href="javascript:;"
       style="display: none; border-radius: 50%;
        width: 45px; background-color: #2E7D32; color: white; padding: 15px 11px;">
        <i class="icon-up-bold" style="font-size: 20px;"></i>
    </a>
</div>





<script src="/assets/js/jquery.2.1.1.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.js"></script>
<script src="/assets/slick/slick.js"></script>
<script src="/assets/js/animatedModal.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/fullscreen-modal.js"></script>
<script src="/assets/owl-carousel/owl.carousel.js"></script>
<script src="/assets/js/base.js"></script>

<?php startblock('scripts') ?><?php endblock() ?><!--para agregar scripts personalizados de ser necesario a cada pagina-->


</body>
</html>