<?php include_once 'base.php' ?>

<?php startblock('titulo') ?>CANTON NOMBRE_CANTON<?php endblock() ?>
<?php startblock('css') ?>
<link rel="stylesheet" href="/assets/css/alojamiento.css">
<?php endblock() ?>

<?php startblock('meta') ?>
<meta name="description" content="AGREGAR DESCRIPCION DEL CANTON">
<?php endblock() ?>



<?php startblock('contenido') ?>

<div id="main-menu-canton">
    <div class="row" style="background-color: #E53935;">
        <div class="col-md-4 hidden-xs hidden-sm wow slideInLeft" id="menu-canton">
            <div class="row">
                <div class="col-xs-6">
                    <a class="hvr-grow-shadow scroll-to" href="#alojamiento" style="text-decoration: none">
                        <img class="img" src="/assets/img/cantones/menu/alojamiento.png">
                        <br>
                        <h2>ALOJAMIENTO</h2>
                    </a>
                </div><!-- /.col-lg-4 -->
                <div class="col-xs-6">
                    <a class="hvr-grow-shadow scroll-to" href="#gastronomia"
                       style="text-decoration: none">
                        <img class="img"
                             src="/assets/img/cantones/menu/gastronomia.png">
                        <br>

                        <h2>GASTRONOMÍA</h2>
                    </a>
                </div><!-- /.col-lg-4 -->

                <div class="clearfix"></div>
                <br>

                <div class="col-xs-6">
                    <a class="hvr-grow-shadow scroll-to" href="#turisticos"
                       style="text-decoration: none">
                        <img class="img" src="/assets/img/cantones/menu/atractivos.png">
                        <br>

                        <h2>TURÍSMO</h2>
                    </a>
                </div>


                <div class="col-xs-6" align="center">
                    <a class="hvr-grow-shadow scroll-to" href="#div-mapa" style="text-decoration: none">
                        <img class="img" src="/assets/img/cantones/menu/mapa.png">
                        <br>

                        <h2>MAPA</h2>
                    </a>


                </div><!-- /.col-lg-4 -->


            </div><!-- /.row -->


        </div>
        <div id="carousel-r" class="col-md-8 wow slideInRight" style="padding: 0; ">
            <div id="carousel-canton" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="/img/banios.png" alt="">

                    <h2 class="title-carousel">CUNA DE LOS TRES JUANES</h2>
                </div>
                <div class="item">
                    <img src="/img/banios.png" alt="">

                    <h2 class="title-carousel">GASTRONOMIA UNICA</h2>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-xs-12 visible-sm visible-xs wow slideInLeft" id="menu-canton">
            <div class="row" style="padding-bottom: 8px;">
                <div class="col-xs-3">
                    <a class="hvr-grow-shadow scroll-to" href="#alojamiento" style="text-decoration: none">
                        <img class="img" src="/assets/img/cantones/menu/alojamiento.png">
                    </a>
                </div><!-- /.col-lg-4 -->
                <div class="col-xs-3">
                    <a class="hvr-grow-shadow scroll-to" href="#gastronomia"
                       style="text-decoration: none">
                        <img class="img"
                             src="/assets/img/cantones/menu/gastronomia.png">
                    </a>
                </div><!-- /.col-lg-4 -->
                <div class="col-xs-3">
                    <a class="hvr-grow-shadow scroll-to" href="#turisticos"
                       style="text-decoration: none">
                        <img class="img" src="/assets/img/cantones/menu/atractivos.png">
                    </a>
                </div>


                <div class="col-xs-3" align="center">
                    <a class="hvr-grow-shadow scroll-to" href="#div-mapa" style="text-decoration: none">
                        <img class="img" src="/assets/img/cantones/menu/mapa.png">
                    </a>


                </div><!-- /.col-lg-4 -->


            </div><!-- /.row -->


        </div>
    </div>
</div>


<div id="fixed-menu">
    <ul>
        <li><a class="scroll-to" href="#alojamiento"><img src="/assets/img/cantones/menu/alojamiento.png" alt=""></a>
        </li>
        <li><a class="scroll-to" href="#gastronomia"><img src="/assets/img/cantones/menu/gastronomia.png" alt=""></a>
        </li>
        <li><a class="scroll-to" href="#turisticos"><img src="/assets/img/cantones/menu/atractivos.png" alt=""></a></li>
        <li><a class="scroll-to" href="#div-mapa"><img src="/assets/img/cantones/menu/mapa.png" alt=""></a></li>
    </ul>
</div>


<div>
    <br><br>

    <div class="container wow slideInUp">


        <div class="row" style="background-color: #2E7D32; border-radius: 2em;">

            <div id="text-canton" class="col-md-12" style="color: white">

                <p class="text-justify" style="font-size: 20px; padding: 20px 10px;">
                    El cantón Ambato se caracteriza por el espíritu laborioso y
                    emprendedor de su gente, la fecundidad de sus huertos y cultivos, la historia y permanencia de su
                    cultura y
                    tradiciones y su paisaje ataviado por montañas y colinas cuya configuración configura un horizonte
                    natural
                    inconfundible. La ciudad está enclavada en una hondonada formada por seis mesetas: Píllaro,
                    Quisapincha,
                    Tisaleo,Quero, Huambaló y Cotaló. A 2 577 msnm, goza de un clima templado y suave que varía entre
                    los
                    12C. y
                    los 20C. excepto los meses de julio y agosto que dispone de una temperatura algo más baja.
                </p>

            </div>

        </div>


    </div>
</div>

<div class="clearfix"></div>
<br><br>

<!-- alojamiento -->
<div id="alojamiento" class="text-center container">

    <div>
        <h2>ALOJAMIENTO</h2>

        <div class="row">
            <!-- primera fila -->

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="div-img hvr-push">
                    <a class="open-alojamiento" data-toggle="modal" data-target="#modal-alojamiento">
                        <img class="img hvr-push" src="/img/hospedaje/ambato/hosp2.png" width="200"
                             height="200"></a>
                </div>
                <h2 style="margin-top: 0; font-size: 20px;">Hotel Ambato </h2>

                <p><a class="btn btn-success open-alojamiento" data-toggle="modal" data-target="#modal-alojamiento">Ver
                        detalles &raquo;</a></p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="div-img hvr-push">
                    <a class="open-alojamiento" data-toggle="modal" data-target="#modal-alojamiento">
                        <img class="img hvr-push" src="/img/hospedaje/ambato/hosp2.png" width="200"
                             height="200"></a>
                </div>
                <h2 style="margin-top: 0; font-size: 20px;">Hotel Ambato </h2>

                <p><a class="btn btn-success open-alojamiento" data-toggle="modal" data-target="#modal-alojamiento">Ver
                        detalles &raquo;</a></p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="div-img hvr-push">
                    <a class="open-alojamiento" data-toggle="modal" data-target="#modal-alojamiento">
                        <img class="img hvr-push" src="/img/hospedaje/ambato/hosp2.png" width="200"
                             height="200"></a>
                </div>
                <h2 style="margin-top: 0; font-size: 20px;">Hotel Ambato </h2>

                <p><a class="btn btn-success open-alojamiento" data-toggle="modal" data-target="#modal-alojamiento">Ver
                        detalles &raquo;</a></p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="div-img hvr-push">
                    <a class="open-alojamiento" data-toggle="modal" data-target="#modal-alojamiento">
                        <img class="img hvr-push" src="/img/hospedaje/ambato/hosp2.png" width="200"
                             height="200"></a>
                </div>
                <h2 style="margin-top: 0; font-size: 20px;">Hotel Ambato </h2>

                <p><a class="btn btn-success open-alojamiento" data-toggle="modal" data-target="#modal-alojamiento">Ver
                        detalles &raquo;</a></p>
            </div>

        </div><!-- /.row -->
    </div>


</div>
<!-- fin alojamiento -->

<div class="clearfix"></div>
<hr><br>
<!-- gastronomia -->
<div id="gastronomia" class="text-center container  wow slideInUp">
    <br>

    <h2>GASTRONOMÍA</h2>

    <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="div-img  hvr-push">
                <a class="open-gastronomia" data-toggle="modal" data-target="#modal-gastronomia"><img class="img"
                                                                     src="/img/gastronomia/casarecreo2.jpg"
                                                                     width="200"
                                                                     height="200"></a>
            </div>
            <h2 style="margin-top: 0; font-size: 20px;">Casa el Recreo</h2>

            <p><a class="btn btn-success open-gastronomia" data-toggle="modal" data-target="#modal-gastronomia">Ver
                    detalles &raquo;</a></p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="div-img  hvr-push">
                <a class="open-gastronomia" data-toggle="modal" data-target="#modal-gastronomia"><img class="img"
                                                                     src="/img/gastronomia/casarecreo2.jpg"
                                                                     width="200"
                                                                     height="200"></a>
            </div>
            <h2 style="margin-top: 0; font-size: 20px;">Casa el Recreo</h2>

            <p><a class="btn btn-success open-gastronomia" data-toggle="modal" data-target="#modal-gastronomia">Ver
                    detalles &raquo;</a></p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="div-img  hvr-push">
                <a class="open-gastronomia" data-toggle="modal" data-target="#modal-gastronomia"><img class="img"
                                                                     src="/img/gastronomia/casarecreo2.jpg"
                                                                     width="200"
                                                                     height="200"></a>
            </div>
            <h2 style="margin-top: 0; font-size: 20px;">Casa el Recreo</h2>

            <p><a class="btn btn-success open-gastronomia" data-toggle="modal" data-target="#modal-gastronomia">Ver
                    detalles &raquo;</a></p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="div-img  hvr-push">
                <a class="open-gastronomia" data-toggle="modal" data-target="#modal-gastronomia"><img class="img"
                                                                     src="/img/gastronomia/casarecreo2.jpg"
                                                                     width="200"
                                                                     height="200"></a>
            </div>
            <h2 style="margin-top: 0; font-size: 20px;">Casa el Recreo</h2>

            <p><a class="btn btn-success open-gastronomia" data-toggle="modal" data-target="#modal-gastronomia">Ver
                    detalles &raquo;</a></p>
        </div>


    </div>


</div>
<div class="clearfix"></div>
<!-- fin gastronomia -->


<hr><br>
<!-- atractivos turisticos -->
<div id="turisticos" class="text-center container  wow slideInUp">
    <br>

    <h2>ATRACTIVOS TURÍSTICOS</h2>

    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="div-img  hvr-push">
                <a class="open-turistico" data-toggle="modal" data-target="#modal-turismo"><img class="img"
                                                                                                src="/img/turismo/aguas-termales-reina-del-rosario.png"
                                                                                                width="200"
                                                                                                height="200"></a>
            </div>
            <h2 style="margin-top: 0; font-size: 20px;">Sitio Turitico</h2>

            <p><a class="btn btn-success open-turistico" data-toggle="modal" data-target="#modal-turismo">Ver
                    detalles &raquo;</a></p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="div-img  hvr-push">
                <a class="open-turistico" data-toggle="modal" data-target="#modal-turismo"><img class="img"
                                                                                                src="/img/turismo/aguas-termales-reina-del-rosario.png"
                                                                                                width="200"
                                                                                                height="200"></a>
            </div>
            <h2 style="margin-top: 0; font-size: 20px;">Sitio Turitico</h2>

            <p><a class="btn btn-success open-turistico" data-toggle="modal" data-target="#modal-turismo">Ver
                    detalles &raquo;</a></p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="div-img  hvr-push">
                <a class="open-turistico" data-toggle="modal" data-target="#modal-turismo"><img class="img"
                                                                                                src="/img/turismo/aguas-termales-reina-del-rosario.png"
                                                                                                width="200"
                                                                                                height="200"></a>
            </div>
            <h2 style="margin-top: 0; font-size: 20px;">Sitio Turitico</h2>

            <p><a class="btn btn-success open-turistico" data-toggle="modal" data-target="#modal-turismo">Ver
                    detalles &raquo;</a></p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="div-img  hvr-push">
                <a class="open-turistico" data-toggle="modal" data-target="#modal-turismo"><img class="img"
                                                                                                src="/img/turismo/aguas-termales-reina-del-rosario.png"
                                                                                                width="200"
                                                                                                height="200"></a>
            </div>
            <h2 style="margin-top: 0; font-size: 20px;">Sitio Turitico</h2>

            <p><a class="btn btn-success open-turistico" data-toggle="modal" data-target="#modal-turismo">Ver
                    detalles &raquo;</a></p>
        </div>

    </div>

</div>
<!-- /atractivos turisticos -->
<div class="clearfix"></div>
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



<!-- mapa -->
<div id="div-mapa" class="text-center container">
    <div id="mapa"></div>
    <br>
</div>
<!-- /mapa -->


<!--modal alojamiento-->
<div id="modal-alojamiento" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="text-center">Hotel Ambato</h3>
            </div>
            <div class="modal-body">
                <div class="row">


                    <div class="col-md-5 text-center" style="margin-bottom: 10px;">
                        <img src="/img/hospedaje/ambato/cama2.png" style="width: 100%; max-width: 400px;  border-top-left-radius: 3em; border-bottom-right-radius: 3em;">

                    </div>


                    <div class="col-md-7">
                        <UL type=circle>

                            <LI>Dirección: Guayaquil 1801 y Rocafuerte, Ambato-Ecuador</LI>
                            <LI>Teléfono fijo: 03 2421791</LI>
                            <LI>Fax: 03 2421790</LI>


                            <LI>E-mail: info@hotelambato.com</LI>
                            <LI>Web: <a href="http://www.hotelambato.com" target="_blank">www.hotelambato.com</a></LI>
                        </UL>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal"><i class="icon-cancel"></i> Cerrar</button>
            </div>
        </div>

    </div>
</div>
<!--/modal alojamiento-->


<!--modal sitio turistico-->
<div id="modal-turismo" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="text-center">Sitio turistico</h3>
            </div>
            <div class="modal-body">
                <div class="row">


                    <div class="col-md-5 text-center" style="margin-bottom: 10px;">
                        <img src="/img/turismo/aguas-termales-reina-del-rosario.png"
                             style="width: 100%; max-width: 400px; border-top-left-radius: 3em; border-bottom-right-radius: 3em;">

                    </div>


                    <div class="col-md-7">
                        <UL type=circle>

                            <LI>Dirección: Guayaquil 1801 y Rocafuerte, Ambato-Ecuador</LI>
                            <LI>Teléfono fijo: 03 2421791</LI>
                            <LI>Fax: 03 2421790</LI>


                            <LI>E-mail: info@hotelambato.com</LI>
                            <LI>Web: <a href="http://www.hotelambato.com" target="_blank">www.hotelambato.com</a></LI>
                        </UL>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal"><i class="icon-cancel"></i> Cerrar</button>
            </div>
        </div>

    </div>
</div>

<!--/modal sitio turistico-->


<!--modal gastronomia-->
<div id="modal-gastronomia" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="text-center">Casa el Recreo/ Las gallinas de Pinllo</h3>
            </div>
            <div class="modal-body">
                <div class="row">


                    <div class="col-md-5 text-center" style="margin-bottom: 10px;">
                        <img src="/img/gastronomia/casarecreo.jpg" style="width: 100%; max-width: 400px;
                                                                          border-top-left-radius: 3em; border-bottom-right-radius: 3em;">

                    </div>


                    <div class="col-md-7">
                        <p>Exquisita variedad de platos a base de gallina de Pinllo.</br>
                            Sus precios varian desde $5 a $43 </br>
                        </p>

                        <p align="left">
                            <b>Ubicación:</b> Av. Nieto Polo del Águila entre Cosmos y Democracia </br>
                            <b>Horario de Atención:</b> Lun-Vier de 10:00 a 20:00, Sáb-Dom de 10:00 a 21:00<br>
                            <b>Contactos:</b> (03) 2466-351</br>
                            <b>Página Web:</b> <a href="http://www.gallinasdepinllo.com/"
                                                  target="_blank">www.gallinasdepinllo.com</a></p>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal"><i class="icon-cancel"></i> Cerrar</button>
            </div>
        </div>

    </div>
</div>
<!--/modal gastronomia-->


<?php endblock() ?>



<?php startblock('scripts') ?>

<script>
    $(function () {

        $('#span-canton').show();

        $('.owl-carousel').owlCarousel({
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
        });


        var scrollTop = 0;
        $(window).scroll(function () {
            scrollTop = $(window).scrollTop();
            var width = $(window).width();


            if (scrollTop >= $('#main-menu-canton').height()) {
                $('#fixed-menu').addClass('open');
            } else {
                $('#fixed-menu').removeClass('open');
            }

        });

    })
</script>


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    function initialize() {
        var marcadores = [
            ['Parque Provincial de la familia', -1.2395001, -78.6799381],
            ['Parque La Cantera', -1.26048420, -78.6420948],
            ['Parque Cevallos"', -1.2415777, -78.6280933],
            ['Quinta Juan Leon Mera', -1.2412163, -78.6352203],
            ['Casa Museo Martinez-Holguin', -1.2412163, -78.6352203],
            ['Quinta de Juan Montalvo', -1.2508299, -78.6483568],
            ['Museo del Colegio Nacional Bolivar', -1.2411336, -78.627415],
            ['Monumento a la primera Imprenta', -1.2381748, -78.6393964],
            ['Iglesia La Catedral', -1.2420745, -78.6310897],
            ['Iglesia la Inmaculada', -1.2489518, -78.6404666],
            ['Iglesia de Quisapincha', -1.2351045, -78.6839425],
            ['Iglesia de Pinllo', -1.2336745, -78.6385636],
            ['Iglesia de Pasa', -1.2689915, -78.7316564],
            ['Iglesia la Merced ', -1.2351027, -78.624373],
            ['Capilla de la Medalla Milagrosa', -1.241687, -78.6293043],
            ['Iglesia del Perpetuo Socorro', -1.2424829, -78.6417119],
            ['Casa el recreo', -1.2328101, -78.6403715],
            ['Spice-House', -1.2420745, -78.6310897],
            ['El porton de Tilulun', -1.2622206, -78.6615181],
            ['Complejo Recreacional el Socavon', -1.2286686, -78.6186148],
            ['Hotel Kapital', -1.2446038, -78.6318503],
            ['Kiubeer-Bar', -1.2427323, -78.6375772]


        ];
        var map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 14,
            center: new google.maps.LatLng(-1.2543408, -78.6228504),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        for (i = 0; i < marcadores.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(marcadores[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDm7xe_0p6tTwv5VEtrnR-ctpWuY9CVyUc&callback=initMap">
</script>


<?php endblock() ?>
