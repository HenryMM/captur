<?php include_once 'base.php' ?>

<!--usamos la herencia de plantillas para escribir el titulo de la pagina-->
<?php startblock('titulo') ?>CAPTUR TUNGURAHUA<?php endblock() ?>
<?php startblock('meta') ?>
<meta name="description" content="  La Cámara Provincial de Turismo de Tungurahua
                        (CAPTUR) es un organismo gremial sin fines de lucro, creada en el año de 1996, conformada por
                        los establecimientos turísticos de la provincia con el objetivo de impulsar el desarrollo del
                        turismo y sus servicios en general contribuyendo al desarrollo de la provincia y el país.">
<?php endblock() ?>


<?php startblock('css') ?>
<style>
    #main-text {
        background-color: #2E7D32;
        border-radius: 3em;
        padding: 15px;
        position: relative;
        color: #fff;
        -webkit-box-shadow: 2px 11px 5px 0px rgba(171, 171, 171, 1);
        -moz-box-shadow: 2px 11px 5px 0px rgba(171, 171, 171, 1);
        box-shadow: 2px 11px 5px 0px rgba(171, 171, 171, 1);
    }

    #main-text:after {
        content: "";
        border-left: 40px solid rgba(251, 251, 251, 0);
        border-right: 40px solid rgba(255, 0, 0, 0);
        border-bottom: 30px solid #A5D6A7;
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
    }
</style>
<?php endblock() ?>


<?php startblock('contenido') ?>


<!-- Carousel
================================================== -->
<div id="carousel-index" class="owl-carousel owl-theme">
    <div class="item">
        <img src="/img/banos.png" alt="captur tungurahua">

        <h2 class="title-carousel">Bienvenidos a la provincia de Tungurahua</h2>
    </div>
    <div class="item">
        <img src="/img/principal.png" alt="captur tungurahua">

        <h2 class="title-carousel">La mejor gastronomía</h2>
    </div>

    <div class="item">
        <img src="/img/mocha.png" alt="captur tungurahua">

        <h2 class="title-carousel">Turismo único</h2>
    </div>

</div>


<div id="inicio" class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <div class="serviceBox">
                <img class=" wow slideInDown" src="/assets/img/flor.png" style="border-top-right-radius: 3em;
    border-bottom-left-radius: 3em;  border-bottom-right-radius: 3em;">

                <div class="service-content  wow slideInDown">
                    <span class="service-icon">
                        <i class="icon-leaf"></i>
                    </span>

                    <h2>Las mejores fiestas del País</h2>

                    <p style="text-align: justify;" class="lead">Un sin número de actividades se realizan en las epocas
                        festivas
                        de Tungurahua, ven y diviertete junto a nosotros.</p>

                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="serviceBox middle">
                <div class="service-content  wow slideInLeft">
                    <span class="service-icon">
                        <i class="icon-star"></i>
                    </span>

                    <h2>¿Quiénes somos?</h2>

                    <p class="description wow slideInUp" style="text-align: justify">
                        La Cámara Provincial de Turismo de Tungurahua
                        (CAPTUR) es un organismo gremial sin fines de lucro, creada en el año de 1996, conformada por
                        los
                        establecimientos turísticos de la provincia con el objetivo de impulsar el desarrollo del
                        turismo y
                        sus servicios en general contribuyendo al desarrollo de
                        la
                        provincia y el país.
                    </p>

                </div>
                <img class=" wow slideInDown" src="/assets/img/fiesta1.jpg"
                style="border-top-right-radius: 3em;
    border-top-left-radius: 3em;">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="serviceBox">
                <img class=" wow slideInUp" src="/assets/img/cama1.jpg" style="border-bottom-right-radius: 3em;
    border-top-left-radius: 3em; border-bottom-left-radius: 3em;">

                <div class="service-content  wow slideInRight">
                    <span class="service-icon">
                        <i class="icon-suitcase"></i>
                    </span>

                    <h2>Hotelería, Gastronomía y Recreación</h2>

                    <p style="text-align: justify; font-size: 17px;">Sientete como en casa en nuestros diferentes
                        hoteles de la
                        provincia, además puedes degustar la más variada gastronomía con diferentes platos típicos de la
                        Sierra.</p>

                </div>
            </div>
        </div>
    </div>
</div>


<hr>

<div class="container">
    <div id="main-text">
        <h2 style="text-align: center;">BASE LEGAL</h2>

        <p style="text-align: justify; padding: 10px;">
            La Cámara Provincial de Turismo de Tungurahua (CAPTUR), fue creada por iniciativa
            privada de los empresarios turísticos de la provincia, mediante la Ley de Cámaras Provinciales de
            Turismo y su Federación Nacional, publicada en el Registro Oficial Nº 689 de 5 de mayo de 1995,
            conforme a lo prescrito en el art. 1 de la Ley de Cámaras Provinciales de Turismo, y legalmente
            constituida mediante Acuerdo Ministerial Nº 015, publicado en el Registro Oficial Nº 991 de 18 de
            julio de 1996 y aprobados sus estatutos por Resolución Ministerial Nº 034, el 20 de marzo de 2000.
            Sus Estatutos Reformados fueron aprobados mediante Acuerdo Ministerial Nº 20050001 del 03 de mayo de
            2005. La Cámara de Turismo de Tungurahua es el máximo representante de la actividad turística
            privada de la provincia y agrupa a las empresas turísticas reconocidas por la Ley de Turismo y la
            Ley de Cámaras de Turismo y su Federación Nacional, registradas por el Ministerio de Turismo.
        </p>
    </div>
</div>
<hr>


<!-- agenda cultural -->
<div id="agenda-cultural" class="container-fluid">
    <div class="clearfix"></div>
    <section id="agenda" class="regular slider wow slideInLeft" style="margin-top: 5px;">

        <div class="item">
            <a class="hvr-grow-rotate" href="evento.php">
                <div class="col-sm-5 timee" style="border-top-left-radius: 3em;">
                    <time>
                        <span class="day" style="font-size: 40px;">1-6</span><br>

                        <span class="month" style="font-size: 25px;font-weight: bold;">Enero</span><br>

                        <span class="year">2017</span><br>
                        <span class="time" style="font-size: 20px;">6:00 am</span>
                    </time>


                </div>
                <div class="col-sm-7" style="padding: 0;  margin-bottom: -99999px;
    padding-bottom: 99999px;">
                    <img src="/img/diab.jpg" alt="" style="width: 100%;">
                </div>

                <div class="clearfix"></div>
                <div class="col-xs-12" style="background-color: #E53935;">
                    <h2 style="color: white; font-size: 20px; text-align: center;" class="title">Diablada de
                        pillaro</h2>
                </div>
            </a>
        </div>
        <div class="item">
            <a class="hvr-grow-rotate" href="evento.php">
                <div class="col-sm-5 timee" style="border-top-left-radius: 3em;">
                    <time>
                        <span class="day" style="font-size: 40px;">1-6</span><br>

                        <span class="month" style="font-size: 25px;font-weight: bold;">Enero</span><br>

                        <span class="year">2017</span><br>
                        <span class="time" style="font-size: 20px;">6:00 am</span>
                    </time>


                </div>
                <div class="col-sm-7" style="padding: 0;  margin-bottom: -99999px;
    padding-bottom: 99999px;">
                    <img src="/img/diab.jpg" alt="" style="width: 100%;">
                </div>

                <div class="clearfix"></div>
                <div class="col-xs-12" style="background-color: #E53935;">
                    <h2 style="color: white; font-size: 20px; text-align: center;" class="title">Diablada de
                        pillaro</h2>
                </div>
            </a>
        </div>
        <div class="item">
            <a class="hvr-grow-rotate" href="evento.php">
                <div class="col-sm-5 timee" style="border-top-left-radius: 3em;">
                    <time>
                        <span class="day" style="font-size: 40px;">1-6</span><br>

                        <span class="month" style="font-size: 25px;font-weight: bold;">Enero</span><br>

                        <span class="year">2017</span><br>
                        <span class="time" style="font-size: 20px;">6:00 am</span>
                    </time>


                </div>
                <div class="col-sm-7" style="padding: 0;  margin-bottom: -99999px;
    padding-bottom: 99999px;">
                    <img src="/img/diab.jpg" alt="" style="width: 100%;">
                </div>

                <div class="clearfix"></div>
                <div class="col-xs-12" style="background-color: #E53935;">
                    <h2 style="color: white; font-size: 20px; text-align: center;" class="title">Diablada de
                        pillaro</h2>
                </div>
            </a>
        </div>
        <div class="item">
            <a class="hvr-grow-rotate" href="evento.php">
                <div class="col-sm-5 timee" style="border-top-left-radius: 3em;">
                    <time>
                        <span class="day" style="font-size: 40px;">1-6</span><br>

                        <span class="month" style="font-size: 25px;font-weight: bold;">Enero</span><br>

                        <span class="year">2017</span><br>
                        <span class="time" style="font-size: 20px;">6:00 am</span>
                    </time>


                </div>
                <div class="col-sm-7" style="padding: 0;  margin-bottom: -99999px;
    padding-bottom: 99999px;">
                    <img src="/img/diab.jpg" alt="" style="width: 100%;">
                </div>

                <div class="clearfix"></div>
                <div class="col-xs-12" style="background-color: #E53935;">
                    <h2 style="color: white; font-size: 20px; text-align: center;" class="title">Diablada de
                        pillaro</h2>
                </div>
            </a>
        </div>
        <div class="item">
            <a class="hvr-grow-rotate" href="evento.php">
                <div class="col-sm-5 timee" style="border-top-left-radius: 3em;">
                    <time>
                        <span class="day" style="font-size: 40px;">1-6</span><br>

                        <span class="month" style="font-size: 25px;font-weight: bold;">Enero</span><br>

                        <span class="year">2017</span><br>
                        <span class="time" style="font-size: 20px;">6:00 am</span>
                    </time>


                </div>
                <div class="col-sm-7" style="padding: 0;  margin-bottom: -99999px;
    padding-bottom: 99999px;">
                    <img src="/img/diab.jpg" alt="" style="width: 100%;">
                </div>

                <div class="clearfix"></div>
                <div class="col-xs-12" style="background-color: #E53935;">
                    <h2 style="color: white; font-size: 20px; text-align: center;" class="title">Diablada de
                        pillaro</h2>
                </div>
            </a>
        </div>
        <div class="item">
            <a class="hvr-grow-rotate" href="evento.php">
                <div class="col-sm-5 timee" style="border-top-left-radius: 3em;">
                    <time>
                        <span class="day" style="font-size: 40px;">1-6</span><br>

                        <span class="month" style="font-size: 25px;font-weight: bold;">Enero</span><br>

                        <span class="year">2017</span><br>
                        <span class="time" style="font-size: 20px;">6:00 am</span>
                    </time>


                </div>
                <div class="col-sm-7" style="padding: 0;  margin-bottom: -99999px;
    padding-bottom: 99999px;">
                    <img src="/img/diab.jpg" alt="" style="width: 100%;">
                </div>

                <div class="clearfix"></div>
                <div class="col-xs-12" style="background-color: #E53935;">
                    <h2 style="color: white; font-size: 20px; text-align: center;" class="title">Diablada de
                        pillaro</h2>
                </div>
            </a>
        </div>
        <div class="item">
            <a class="hvr-grow-rotate" href="evento.php">
                <div class="col-sm-5 timee" style="border-top-left-radius: 3em;">
                    <time>
                        <span class="day" style="font-size: 40px;">1-6</span><br>

                        <span class="month" style="font-size: 25px;font-weight: bold;">Enero</span><br>

                        <span class="year">2017</span><br>
                        <span class="time" style="font-size: 20px;">6:00 am</span>
                    </time>


                </div>
                <div class="col-sm-7" style="padding: 0;  margin-bottom: -99999px;
    padding-bottom: 99999px;">
                    <img src="/img/diab.jpg" alt="" style="width: 100%;">
                </div>

                <div class="clearfix"></div>
                <div class="col-xs-12" style="background-color: #E53935;">
                    <h2 style="color: white; font-size: 20px; text-align: center;" class="title">Diablada de
                        pillaro</h2>
                </div>
            </a>
        </div>

    </section>
    <hr>
</div>
<!-- fin agenda cultural -->


<div class="container-fluid" style="    background: url(img/body.jpg) center;">
    <div class="row">
        <div class="col-md-9 col-sm-7">
            <h2 style="text-transform: uppercase;">La nueva aplicación para dispositivos Android</h2>

            <p style="text-align: justify;" class="lead">Estés donde estés nuestra nueva App te va a acompañar siempre,
                mantente informado del clima y toda la información de nuestras fiestas y destinos turísticos ¡Estan
                aquí! que esperas para descargarla desde Google Play.</p>

        </div>
        <div class="col-md-3 col-sm-5">
            <a href="#" target="_blank">
                <img style="width: 100%; margin-top: 20px; padding: 20px;" alt="captur tungurahua apk"
                     src="/img/descarga_android.png">
            </a>
        </div>
    </div>
    <br>
</div>


<?php endblock() ?>





<?php startblock('scripts') ?>
<script>
    $(function () {
        $('#carousel-index').owlCarousel({
            margin: 10,
            loop: true,
            smartSpeed: 450,
            autoWidth: false,
            items: 1,
            autoplay: true,
            animateOut: 'slideOutDown',
            nav: true,
            navText: [
                "<i> </i>",
                "<i> </i>"
            ],
        })

    })
</script>

<?php endblock() ?>
