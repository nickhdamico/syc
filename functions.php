<?php
function login($datos){
  $db_server = "localhost";
  $db_username = "root";
  $db_password = "root";
  $db_database = "syc";
$usuario = $datos['usuario'];
$password =$datos['password'];
$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $conn->query("Select * from Usuarios where usuario = '$usuario'");
$count = $query->rowcount();
$row = $query->fetch();
if ($count > 0)
	{
    if (password_verify($password,$row["password"])) {
      session_start();
    	$_SESSION['id'] = $row['id'];
      $_SESSION['type'] = $row["tipo"];
      if (!is_null($row["group"])) {
      $_SESSION["group"] = $row["group"];
      }
      if ($row["tipo"]=="comercial") {
        header('location:comercial.php');
      }elseif ($row["tipo"]=="operador") {
        header('location:operador.php');
      }

    }
	}
  else
	{
      echo "<script>alert('No concuerdan el usuario y/o contraseña'); </script>";
	}
}
function orden($datos,$usuario){
  $db_server = "localhost";
  $db_username = "root";
  $db_password = "root";
  $db_database = "syc";
  if ($datos["individual"]) {
    $comitente_id= $datos["comitente_nro"];
    $tipo = $datos["operacion"];
    $instrumento = $datos["instrumento"];
    $especie= $datos["especie"];
    $plazo= $datos["plazo"];
    $moneda= $datos["moneda"];
    $monto_bruto= $datos["monto_bruto"];
    $precio_limite= $datos["precio_limite"];
    $comentario= $datos["comentario"];
    $operador = $usuario["id"];
    $fecha_hora= date('Y-m-d H:i:s');
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Ordenes (fecha_hora_carga, Tipo, Instrumento,Especie,Plazo,Moneda,Monto_bruto,Precio_limite,Comitente_id,Comercial_id,Estado)
    VALUES ('$fecha_hora','$tipo','$instrumento','$especie','$plazo','$moneda','$monto_bruto','$precio_limite','$comitente_id','$operador','Nuevo')";
    $conn->exec($sql);
  }
}
function tabla_grupo($usuario){
  if (!isset($usuario["group"])){
  $db_server = "localhost";
  $db_username = "root";
  $db_password = "root";
  $db_database = "syc";
$id = $usuario['id'];
$conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $conn->query("Select * from Ordenes where Comercial_id = '$id'");
$row = $query->fetchall();
foreach ($row as $value) {
  //estado 0= pedido, 1= ejecutado, 2= problema
  if ($value["Estado"]==0) {
    echo "<tr class='warning'><td>".$value['id']."</td>"
    ."<td>".$value['Comercial_id']."</td>"
    ."<td>".$value['fecha_hora_carga']."</td>"
    ."<td>".$value['Comitente_id']."</td>"
    ."<td>".$value['Tipo']."</td>"
    ."<td>".$value['Instrumento']."</td>"
    ."<td>".$value['Especie']."</td>"
    ."<td>".$value['Plazo']."</td>"
    ."<td>".$value['Moneda']."</td>"
    ."<td>".$value['Monto_bruto']."</td>"
    ."<td>".$value['Monto_neto']."</td>"
    ."<td>".$value['Precio']."</td>"
    ."<td>".$value['Precio_limite']."</td>"
    ."<td>".$value['Valor_Nominal']."</td>"
    ."<td>".$value['Arancel']."</td>"
    ."<td>".$value['Comentarios']."</td>"
    ."<td>".$value['fecha_hora_exe']."</td>"
    ."<td>".$value['Operador_id']."</td></tr>";
  }elseif ($value["Estado"]==1) {
    echo "<tr class='success'><td>".$value['id']."</td>"
    ."<td>".$value['Comercial_id']."</td>"
    ."<td>".$value['fecha_hora_carga']."</td>"
    ."<td>".$value['Comitente_id']."</td>"
    ."<td>".$value['Tipo']."</td>"
    ."<td>".$value['Instrumento']."</td>"
    ."<td>".$value['Especie']."</td>"
    ."<td>".$value['Plazo']."</td>"
    ."<td>".$value['Moneda']."</td>"
    ."<td>".$value['Monto_bruto']."</td>"
    ."<td>".$value['Monto_neto']."</td>"
    ."<td>".$value['Precio']."</td>"
    ."<td>".$value['Precio_limite']."</td>"
    ."<td>".$value['Valor_Nominal']."</td>"
    ."<td>".$value['Arancel']."</td>"
    ."<td>".$value['Comentarios']."</td>"
    ."<td>".$value['fecha_hora_exe']."</td>"
    ."<td>".$value['Operador_id']."</td></tr>";
  }elseif ($value["Estado"]==2) {
    echo "<tr class='danger'><td>".$value['id']."</td>"
    ."<td>".$value['Comercial_id']."</td>"
    ."<td>".$value['fecha_hora_carga']."</td>"
    ."<td>".$value['Comitente_id']."</td>"
    ."<td>".$value['Tipo']."</td>"
    ."<td>".$value['Instrumento']."</td>"
    ."<td>".$value['Especie']."</td>"
    ."<td>".$value['Plazo']."</td>"
    ."<td>".$value['Moneda']."</td>"
    ."<td>".$value['Monto_bruto']."</td>"
    ."<td>".$value['Monto_neto']."</td>"
    ."<td>".$value['Precio']."</td>"
    ."<td>".$value['Precio_limite']."</td>"
    ."<td>".$value['Valor_Nominal']."</td>"
    ."<td>".$value['Arancel']."</td>"
    ."<td>".$value['Comentarios']."</td>"
    ."<td>".$value['fecha_hora_exe']."</td>"
    ."<td>".$value['Operador_id']."</td></tr>";
  }

}
      }elseif (isset($usuario["group"])) {
        $db_server = "localhost";
        $db_username = "root";
        $db_password = "root";
        $db_database = "syc";
      $id = $usuario["group"];
      $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query = $conn->query("Select * from Ordenes where Grupo_id = '$id'");
      $row = $query->fetchall();
              foreach ($row as $value) {
                var_dump($value["estado"]);
                if ($value["estado"]==0) {
                  echo "<tr class='warning'><td>".$value['id']."</td>"
                  ."<td>".$value['Comercial_id']."</td>"
                  ."<td>".$value['fecha_hora_carga']."</td>"
                  ."<td>".$value['Comitente_id']."</td>"
                  ."<td>".$value['Tipo']."</td>"
                  ."<td>".$value['Instrumento']."</td>"
                  ."<td>".$value['Especie']."</td>"
                  ."<td>".$value['Plazo']."</td>"
                  ."<td>".$value['Moneda']."</td>"
                  ."<td>".$value['Monto_bruto']."</td>"
                  ."<td>".$value['Monto_neto']."</td>"
                  ."<td>".$value['Precio']."</td>"
                  ."<td>".$value['Precio_limite']."</td>"
                  ."<td>".$value['Valor_Nominal']."</td>"
                  ."<td>".$value['Arancel']."</td>"
                  ."<td>".$value['Comentarios']."</td>"
                  ."<td>".$value['fecha_hora_exe']."</td>"
                  ."<td>".$value['Operador_id']."</td></tr>";
                }elseif ($value["estado"]==1) {
                  echo "<tr><td>".$value['id']."</td>"
                  ."<td>".$value['Comercial_id']."</td>"
                  ."<td>".$value['fecha_hora_carga']."</td>"
                  ."<td>".$value['Comitente_id']."</td>"
                  ."<td>".$value['Tipo']."</td>"
                  ."<td>".$value['Instrumento']."</td>"
                  ."<td>".$value['Especie']."</td>"
                  ."<td>".$value['Plazo']."</td>"
                  ."<td>".$value['Moneda']."</td>"
                  ."<td>".$value['Monto_bruto']."</td>"
                  ."<td>".$value['Monto_neto']."</td>"
                  ."<td>".$value['Precio']."</td>"
                  ."<td>".$value['Precio_limite']."</td>"
                  ."<td>".$value['Valor_Nominal']."</td>"
                  ."<td>".$value['Arancel']."</td>"
                  ."<td>".$value['Comentarios']."</td>"
                  ."<td>".$value['fecha_hora_exe']."</td>"
                  ."<td>".$value['Operador_id']."</td></tr>";
                }elseif ($value["estado"]==2) {
                  echo "<tr class='danger'><td>".$value['id']."</td>"
                  ."<td>".$value['Comercial_id']."</td>"
                  ."<td>".$value['fecha_hora_carga']."</td>"
                  ."<td>".$value['Comitente_id']."</td>"
                  ."<td>".$value['Tipo']."</td>"
                  ."<td>".$value['Instrumento']."</td>"
                  ."<td>".$value['Especie']."</td>"
                  ."<td>".$value['Plazo']."</td>"
                  ."<td>".$value['Moneda']."</td>"
                  ."<td>".$value['Monto_bruto']."</td>"
                  ."<td>".$value['Monto_neto']."</td>"
                  ."<td>".$value['Precio']."</td>"
                  ."<td>".$value['Precio_limite']."</td>"
                  ."<td>".$value['Valor_Nominal']."</td>"
                  ."<td>".$value['Arancel']."</td>"
                  ."<td>".$value['Comentarios']."</td>"
                  ."<td>".$value['fecha_hora_exe']."</td>"
                  ."<td>".$value['Operador_id']."</td></tr>";
                }

      }
}}

?>
