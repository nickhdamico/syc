<!DOCTYPE html>
<?php
if (isset($_POST["tipo"])) {
  $status= true;
  if ($_POST['usuario'] == "") {
    echo "<script>alert('Ingresa tu mail como usuario');</script>";
    $status= false;
  }else {
    $status= true;
    if ($_POST['password'] !== $_POST['confirmar']) {
      echo "<script>alert('No concuerdan las contraseñas'); </script>";
      $status= false;
    }else {
      $status= true;
      if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pwd)) {
        echo "<script>alert('Ingrese una contraseña de 8 a 20 caracteres con al menos una letra mayuscula y un numero'); </script>";
        $status= false;
      }else {
        $status= true;
      }
    }
  }
  if ($status) {
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_database = "syc";

    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $tipo= $_POST['tipo'];

    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Usuarios (usuario, password, tipo)
    VALUES ('$usuario','$hashed_password','$tipo')";

    $conn->exec($sql);
    echo "<script>alert('Registio Exitoso!'); window.location='login.php'</script>";
  }
}

?>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Registro de Operador</title>
  </head>

  <body class="bg-dark">
    <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4">Registro de Operador</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-body">
                            <form class="form" action="" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Usuario</label>
                                    <input type="email" class="form-control form-control-lg rounded-0" name="usuario" id="uname1" required="">
                                    <div class="invalid-feedback">Ingresa tu usuario</div>
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" name="password" required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Ingresa tu contraseña</div>
                                </div>
                                <div class="form-group">
                                    <label>Confirmar Contraseña</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" name="confirmar" required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Ingresa tu contraseña</div>
                                </div>
                                <input type="hidden" name="tipo" value="operador">

                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Registrar</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->


</body></html>
