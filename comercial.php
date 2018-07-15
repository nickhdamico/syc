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
            <h3>Individual</h3>
            <br>
            <form class="" action="index.html" method="post">

              <div class="form-group" style="width:20%;display: inline-block;">
                  <label for="comitente_nro">Nro Comitente</label>
                  <input required type="number" id="comitente_nro" class="form-control" name="comitente_nro" value="">
              </div>

              <div class="form-group" style="width:78%;display: inline-block;">
                  <label for="comitente_nombre">Nombre</label>
                  <input type="text" id="comitente_nombre" class="form-control" name="comitente_nombre" value="" disabled>
              </div>

              <div class="form-group" style="width:24%;display: inline-block;">
                <label for="operacion">Operación</label>
                  <select required class="form-control" id="operacion" name="operacion">
                    <option selected>Seleccionar</option>
                   <option>Compra</option>
                   <option>Venta</option>
                  </select>
              </div>

              <div class="form-group" style="width:25%;display: inline-block;">
                <label for="instrumento">Instrumento</label>
                  <select required class="form-control" id="instrumento" name="instrumento">
                    <option selected>Seleccionar</option>
                   <option>Accion</option>
                   <option>Bono</option>
                   <option>LEBAC</option>
                   <option>Dolar Bolsa</option>
                   <option>Pesos Bolsa</option>
                   <option>Caucion Tomadora</option>
                  </select>
              </div>

              <div class="form-group" id="form-especie" style="width:24%;display: inline-block;">
                  <label for="especie">Especie</label>
                  <input type="text" id="especie" class="form-control" name="especie" value="">
              </div>

              <div class="form-group" style="width:24%;display: inline-block;">
                <label for="plazo">Plazo</label>
                  <select class="form-control" id="plazo" name="plazo">
                    <option selected>Seleccionar</option>
                   <option>CI</option>
                   <option>24 hs</option>
                   <option>48 hs</option>
                   <option>Plazo Convenient</option>
                  </select>
              </div>
              <br>
              <div class="form-group" style="width:10%;display: inline-block;">
                <label for="moneda">Moneda</label>
                  <select class="form-control" id="moneda" name="moneda">
                    <option selected>Seleccionar</option>
                   <option>ARS</option>
                   <option>USD</option>
                  </select>
              </div>

              <div class="form-group" style="width:20%;display: inline-block;">
                <label for="monto_bruto">Monto -bruto-</label>
                <input type="number" id="monto_bruto" class="form-control" name="monto_bruto" value="">
              </div>

              <div class="form-group" style="width:20%;display: inline-block;">
                <label for="precio_limite">Precio Límite</label>
                <input type="number" id="precio_limite" class="form-control" name="precio_limite" value="">
              </div>

              <div class="form-group">
                  <label for="comentarios">Comentario</label>
                  <input type="text" id="comentario" class="form-control" name="comentario" value="">
              </div>
              <input class="btn btn-primary" type="submit" value="Enviar">
            </form>
          </div>

          <div id="masiva" class="tab-pane fade">
            <h3>Masiva</h3>
            <form class="" action="index.html" method="post">

              <div class="form-group" style="width:20%;display: inline-block;">
                  <label for="comitente_nro">Nro Comitente</label>
                  <input required type="number" id="comitente_nro" class="form-control" name="comitente_nro" value="">
              </div>

              <div class="form-group" style="width:78%;display: inline-block;">
                  <label for="comitente_nombre">Nombre</label>
                  <input type="text" id="comitente_nombre" class="form-control" name="comitente_nombre" value="" disabled>
              </div>

              <div class="form-group" style="width:24%;display: inline-block;">
                <label for="operacion">Operación</label>
                  <select required class="form-control" id="operacion" name="operacion">
                    <option selected>Seleccionar</option>
                   <option>Compra</option>
                   <option>Venta</option>
                  </select>
              </div>

              <div class="form-group" style="width:25%;display: inline-block;">
                <label for="instrumento">Instrumento</label>
                  <select required class="form-control" id="instrumento" name="instrumento">
                    <option selected>Seleccionar</option>
                   <option>Accion</option>
                   <option>Bono</option>
                   <option>LEBAC</option>
                   <option>Dolar Bolsa</option>
                   <option>Pesos Bolsa</option>
                   <option>Caucion Tomadora</option>
                  </select>
              </div>

              <div class="form-group" id="form-especie" style="width:24%;display: inline-block;">
                  <label for="especie">Especie</label>
                  <input type="text" id="especie" class="form-control" name="especie" value="">
              </div>

              <div class="form-group" style="width:24%;display: inline-block;">
                <label for="plazo">Plazo</label>
                  <select class="form-control" id="plazo" name="plazo">
                    <option selected>Seleccionar</option>
                   <option>CI</option>
                   <option>24 hs</option>
                   <option>48 hs</option>
                   <option>Plazo Convenient</option>
                  </select>
              </div>
              <br>
              <div class="form-group" style="width:10%;display: inline-block;">
                <label for="moneda">Moneda</label>
                  <select class="form-control" id="moneda" name="moneda">
                    <option selected>Seleccionar</option>
                   <option>ARS</option>
                   <option>USD</option>
                  </select>
              </div>

              <div class="form-group" style="width:20%;display: inline-block;">
                <label for="monto_bruto">Monto -bruto-</label>
                <input type="number" id="monto_bruto" class="form-control" name="monto_bruto" value="">
              </div>

              <div class="form-group" style="width:20%;display: inline-block;">
                <label for="precio_limite">Precio Límite</label>
                <input type="number" id="precio_limite" class="form-control" name="precio_limite" value="">
              </div>

              <div class="form-group">
                  <label for="comentarios">Comentario</label>
                  <input type="text" id="comentario" class="form-control" name="comentario" value="">
              </div>
              <input class="btn btn-primary" type="submit" value="Enviar">
            </form>

          </div>


        </div>
        <div id="ordenes" class="tab-pane fade">
          <h3>Ordenes</h3>
          <p>Aca podes visualizar tus ordenes cargadas o en el caso, las de tu grupo.</p>
        </div>

        <div id="estadisticas" class="tab-pane fade">
          <h3>Estadísticas</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
