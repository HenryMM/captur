<?php include_once 'base.php' ?>

<?php startblock('titulo') ?>NOMBRE ENVENTO AQUI<?php endblock() ?>


<?php startblock('meta') ?>
<meta name="description" content="AGREGAR DESCRIPCION DEL EVENTO">
<?php endblock() ?>



<?php startblock('contenido') ?>
<div class="container" style="padding-top: 100px;">



   <div class="row" style="background-color: #0F9E5E; color: white;">
       <div class="col-md-4" style="text-align: center; position: relative; padding: 0; ">
           <time style="position: absolute; left: 0px; top: 0px; background-color: #E53935; padding: 10px;
           border-bottom-right-radius: 2em;">
               <span class="day" style="font-size: 40px;">1-6</span><br>

               <span class="month" style="font-size: 25px;font-weight: bold;">Enero</span><br>

               <span class="year">2017</span><br>
               <span class="time" style="font-size: 20px;">6:00 am</span>
           </time>
           <img src="/img/diab.jpg"  style="width: 100%;">

       </div>
       <div class="col-md-8">

           <h2 style="color: white; text-align: center;" class="title">Diablada de
               pillaro</h2>
           <br>
           <p style="padding: 10px 25px 40px 80px;">ingresar aqui la descripcion del evento como html o texto usando un editor wysiwyg como CKEditor</p>

       </div>
   </div>



</div>

<div class="clearfix"></div>
<br>

<h3 style="text-align: center;">Gregar mas contenido de ser necesario</h3>
<?php endblock() ?>



<?php startblock('scripts') ?>

<script>
    $(function () {
        $('#header').css({"background-color": "#E53935"});
    });
</script>

<?php endblock() ?>
