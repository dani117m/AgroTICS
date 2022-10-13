<?php

if(!empty($_POST["botonGG"]))
{

    require '../controlador/db.php';
   
    $id = $_POST[''];
    $herramienta = $_POST['herramienta'];
	$disponibilidad = $_POST['disponibilidad'];
	$fecha_alta = $_POST['fecha_alta'];
	$fecha_baja = $_POST['fecha_baja'];
	$estado_herramienta = $_POST['estado_herramienta'];
    $sql=$conn->query("INSERT INTO herramientas(
        id,
        herramienta,
        disponibilidad,
        fecha_alta,
        fecha_baja,
        estado_herramienta
        )
        values('',
        '$herramienta',
        '$disponibilidad',
        '$fecha_alta',
        '$fecha_baja',
        '$estado_herramienta')");

        if ($sql==1) {
            echo '<div class="alerta2">Usuario Registrado correctamente</div>';
            header("location:../vista/Agregar_herramienta.php");
        }else {
            echo '<div class="alerta2">Error</div>';

        }
}else{
    if(!empty($_POST["botonGG1"])){
        header("location:../vista/Agregar_herramienta.php");
    }

}
?>
