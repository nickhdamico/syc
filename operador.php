<?php
session_start();
if (isset($_SESSION["type"]) && $_SESSION["type"]=="operador") {

}else{
    header('location:login.php');
}
 ?>
