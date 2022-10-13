
<?php

require '../controlador/db.php';
error_reporting(0);
session_start();

/*username, password, rol,name, lastname*/

if(!empty($_POST["botonG"]))
{
  if(empty($_POST["username"]) or empty($_POST["password"])or empty($_POST["rol"])or empty($_POST["name"])or empty($_POST["lastname"])){
    echo '<div class="alerta">Uno de los campos esta vacio </div>';
  } else {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $rol=$_POST['rol'];
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $sql=$conn->query("INSERT INTO usuarios(username, password, rol, name, lastname)values('$username', '$password', '$rol','$name', '$lastname')");
    if ($sql==1) {
      echo '<div class="alerta2">Usuario Registrado correctamente</div>';
    }else {
      echo '<div class="alerta2">Error</div>';
    }
  }
}

?>
