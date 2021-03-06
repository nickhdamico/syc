<h3>Masiva</h3>
<form class="" action="index.html" method="post">

  <div class="form-group" style="width:20%;display: inline-block;">
      <label for="comitente_nro">Nro Comitente</label>
      <input required type="number" id="comitente_nro" class="form-control" name="comitente_nro0" value="">
  </div>

  <div class="form-group" style="width:78%;display: inline-block;">
      <label for="comitente_nombre">Nombre</label>
      <input type="text" id="comitente_nombre" class="form-control" name="comitente_nombre0" value="" disabled>
  </div>

  <div class="form-group" style="width:24%;display: inline-block;">
    <label for="operacion">Operación</label>
      <select required class="form-control" id="operacion" name="operacion0">
        <option selected>Seleccionar</option>
       <option>Compra</option>
       <option>Venta</option>
      </select>
  </div>

  <div class="form-group" style="width:25%;display: inline-block;">
    <label for="instrumento">Instrumento</label>
      <select required class="form-control" id="instrumento" name="instrumento0">
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
      <input type="text" id="especie" class="form-control" name="especie0" value="">
  </div>

  <div class="form-group" style="width:24%;display: inline-block;">
    <label for="plazo">Plazo</label>
      <select class="form-control" id="plazo" name="plazo0">
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
      <select class="form-control" id="moneda" name="moneda0">
        <option selected>Seleccionar</option>
       <option>ARS</option>
       <option>USD</option>
      </select>
  </div>

  <div class="form-group" style="width:20%;display: inline-block;">
    <label for="monto_bruto">Monto -bruto-</label>
    <input type="number" id="monto_bruto" class="form-control" name="monto_bruto0" value="">
  </div>

  <div class="form-group" style="width:20%;display: inline-block;">
    <label for="precio_limite">Precio Límite</label>
    <input type="number" id="precio_limite" class="form-control" name="precio_limite0" value="">
  </div>

  <div class="form-group" style="width:80%;display: inline-block;">
      <label for="comentarios">Comentario</label>
      <input type="text" id="comentario" class="form-control" name="comentario0" value="">
  </div>

  <div class="input-group-btn" style="width:15%;display: inline-block;">
        <button class="btn btn-success" style="width:80%;float:right;" type="button"  onclick="orden_masiva();"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
  </div>
  <div id="orden_masiva">
  </div>

  <input type="hidden" name="masiva" value="true">
  <input class="btn btn-primary" type="submit" value="Enviar">
</form>
