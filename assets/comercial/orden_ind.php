<h3>Individual</h3>
<br>
<form class="" action="" method="post">

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


<!-- Agregar VN y agregar Caución colocadora

Moneda siempre por que se vende contra USD o $
Monto bruto o VN es excluyente

Si o si completar siempre Precio limite -> numero o MarketPrice

Select option para arancel especial. cambiaria solo para esta operacion a un monto especifico definido por el comercial.
if check display input number replacing arancel on db.

Neto sacarlo row db

Precio es el ultimo calculo que debe de ser el operador
campo avaiable input number edit save on db

En pesos o dolar no VN
Comercial solo ve la orden
rows 3/4 no
Click en principal, desgloce de 3/4 para op. -->
