<h3>Ordenes</h3>
<p>Aca podes visualizar tus ordenes cargadas o en el caso, las de tu grupo.</p>
<table class="table table-hover" style="text-align:center;">

      <thead>
        <tr >
          <th>#</th>
          <th>Comercial</th>
          <th>Carga</th>
          <th>Comitente</th>
          <th>Tipo</th>
          <th>Inst.</th>
          <th>Esp.</th>
          <th>Plazo</th>
          <th>$/U$</th>
          <th>Bruto</th>
          <th>Neto</th>
          <th>Precio</th>
          <th>Limite</th>
          <th>Nominal</th>
          <th>Arancel</th>
          <th>Coment.</th>
          <th>Ejecutado</th>
          <th>Operador</th>
        </tr>
      </thead>
      <tbody>    
            <?php tabla_grupo($_SESSION) ?>
      </tbody>
    </table>
