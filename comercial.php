<!DOCTYPE html>
<?php
include("functions.php");
session_start();
if (isset($_SESSION["type"]) && $_SESSION["type"]=="comercial") {
  if ($_POST) {
  orden($_POST,$_SESSION);
  }
}else{
    header('location:login.php');
}
 ?>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Regisrtro de Ordenes</title>
  </head>

  <body>
    <div class="container">
      <h2>Registro de Ordenes</h2>

      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#carga">Carga</a></li>
        <li><a data-toggle="tab" href="#ordenes">Ordenes</a></li>
        <li><a data-toggle="tab" href="#estadisticas">Estadísticas</a></li>
      </ul>

      <div class="tab-content">
        <div id="carga" class="tab-pane fade in active">
          <h3>Cargar Orden</h3>

          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#individual">Individual</a></li>
            <li><a data-toggle="tab" href="#masiva">Masiva</a></li>
          </ul>
          <div class="tab-content">
          <div id="individual" class="tab-pane fade in active">
            <?php include "assets/comercial/orden_ind.php" ?>
          </div>
          <div id="masiva" class="tab-pane fade">
          <?php include "assets/comercial/orden_mas.php" ?>
          </div>
        </div>
      </div>
        <div id="ordenes" class="tab-pane fade">
        <?php include "assets/comercial/ordenes.php" ?>
        </div>

        <div id="estadisticas" class="tab-pane fade">
          <?php include "assets/comercial/estadistica.php" ?>
        </div>
      </div>
    </div>

<script type="text/javascript">

var room = 0;
function orden_masiva() {
  room++;
  var objTo = document.getElementById('orden_masiva')
  var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
  var rdiv = 'removeclass'+room;
  divtest.innerHTML = '<hr><div class="form-group" style="width:24%;display: inline-block;"> <label for="operacion">Operación</label><select required class="form-control" id="operacion" name="operacion'+room+'"><option selected>Seleccionar</option><option>Compra</option><option>Venta</option></select></div> <div class="form-group" style="width:25%;display: inline-block;"><label for="instrumento">Instrumento</label><select required class="form-control" id="instrumento" name="instrumento'+room+'"><option selected>Seleccionar</option><option>Accion</option><option>Bono</option><option>LEBAC</option><option>Dolar Bolsa</option><option>Pesos Bolsa</option><option>Caucion Tomadora</option></select></div> <div class="form-group" id="form-especie" style="width:24%;display: inline-block;"><label for="especie">Especie</label><input type="text" id="especie" class="form-control" name="especie'+room+'" value=""></div> <div class="form-group" style="width:24%;display: inline-block;"><label for="plazo">Plazo</label><select class="form-control" id="plazo" name="plazo'+room+'"><option selected>Seleccionar</option><option>CI</option><option>24 hs</option><option>48 hs</option><option>Plazo Convenient</option></select></div><br><div class="form-group" style="width:10%;display: inline-block;"><label for="moneda">Moneda</label><select class="form-control" id="moneda" name="moneda'+room+'"><option selected>Seleccionar</option><option>ARS</option><option>USD</option></select></div> <div class="form-group" style="width:20%;display: inline-block;"><label for="monto_bruto">Monto -bruto-</label><input type="number" id="monto_bruto" class="form-control" name="monto_bruto'+room+'" value=""></div> <div class="form-group" style="width:20%;display: inline-block;"><label for="precio_limite">Precio Límite</label><input type="number" id="precio_limite" class="form-control" name="precio_limite'+room+'" value=""></div> <div class="form-group" style="width:80%;display:inline-block;"><label for="comentarios">Comentario</label><input type="text" id="comentario" class="form-control" name="comentario'+room+'" value=""></div> <div class="input-group-btn" style="width:15%;display: inline-block;"> <button class="btn btn-danger" style="width:80%;float:right;" type="button" onclick="remove_orden_masiva('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

  objTo.appendChild(divtest)

}
 function remove_orden_masiva(rid) {
   $('.removeclass'+rid).remove();
   room--;
 }

 $(document).ready(function()
                 {
             $("#instrumento").change(function()
   {
       if($(this).val() === "LEBAC"|| $(this).val() == "Accion"|| $(this).val() == "Bono")
   {
       $("#form-especie").show();
   }
   else
   {
       $("#form-especie").hide();
   }
       });
                 $("#form-especie").hide();
 });

 function check() {
    document.getElementById("arancel_especial").checked = true;
}
if (check()== true) {
  

}

</script>

  </body>
</html>
