<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
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

          <div id="individual" class="tab-pane fade in active">
            <?php include "assets/comercial/orden_ind.php" ?>
          </div>
          <div id="masiva" class="tab-pane fade">
          <?php include "assets/comercial/orden_mas.php" ?>
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

</script>

  </body>
</html>
