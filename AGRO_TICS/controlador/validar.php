<?php

require '../controlador/db.php';

session_start();
if(!empty($_POST["botonRegistro"])){
  if (empty($_POST["username"]) and empty($_POST["password"])) {
    # alerta
    echo '<div class="alert alert-danger">Los campos estan vacios</div>';
  }else {
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql=$conn->query("SELECT * FROM usuarios WHERE username='$username' and password='$password'");

    if ($datos=$sql->fetch_object()) {
      $_SESSION["id"]=$datos->id;
      $_SESSION["username"]=$datos->username;
      # header pagina inicio
      header("location:../vista/home.php");
    } else{
      # Si las credenciales no estan en el Base de datos
      echo'<div class="alert alert-danger">ACCESO DENEGADO</div>';
    }
    
  }
}

?>