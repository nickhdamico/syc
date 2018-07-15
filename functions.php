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
    var_dump($row);
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
?>
