<?php

if(!empty($_POST["botonGG"]))
{

    require '../controlador/db.php';
   
    $id = $_POST[''];
    $ubicación = $_POST['ubicación'];
	$fecha_muestreo = $_POST['fecha_muestreo'];
	$lugar_lote = $_POST['lugar_lote'];
	$area_sembrada = $_POST['area_sembrada'];
	$planta_especie = $_POST['planta_especie'];
	$nombre_cinetifico = $_POST['nombre_cinetifico'];
	$variedad = $_POST['variedad'];
	$fecha_implem_siembra = $_POST['fecha_implem_siembra'];
	$germina_prendimien = $_POST['germina_prendimien'];
	$altura = $_POST['altura'];
	$diametro = $_POST['diametro'];
	$nro_racimos = $_POST['nro_racimos'];
	$nro_flores_racimos = $_POST['nro_flores_racimos'];
	$nro_flores_totales = $_POST['nro_flores_totales'];
	$nro_frutos_racimos = $_POST['nro_frutos_racimos'];
	$nro_frutos_totales = $_POST['nro_frutos_totales'];
	$longitud_fruto = $_POST['longitud_fruto'];
	$diametro_fruto = $_POST['diametro_fruto'];
	$peso_fruto = $_POST['peso_fruto'];
	$produccion_planta = $_POST['produccion_planta'];
	$ph_suelo = $_POST['ph_suelo'];
	$mo = $_POST['mo'];
	$nitrogeno = $_POST['nitrogeno'];
	$fosforo = $_POST['fosforo'];
	$potasio = $_POST['potasio'];
	$otros_elementos = $_POST['otros_elementos'];
	$temperatura = $_POST['temperatura'];
	$humedad_relativa = $_POST['humedad_relativa'];
	$ruego_lluvia = $_POST['ruego_lluvia'];
	$fertiliza_abono = $_POST['fertiliza_abono'];
	$cantidad_fertiliza = $_POST['cantidad_fertiliza'];
	$fechas_aplic_fertiliza = $_POST['fechas_aplic_fertiliza'];
	$control_plag_enferm = $_POST['control_plag_enferm'];
	$cantidad_control_plag = $_POST['cantidad_control_plag'];
	$fecha_aplicación = $_POST['fecha_aplicación'];
	$observaciones = $_POST['observaciones'];
    $sql=$conn->query("INSERT INTO campo(
        id,
        ubicación,
        fecha_muestreo,
        lugar_lote,
        area_sembrada,
        planta_especie,
        nombre_cinetifico,
        variedad,
        fecha_implem_siembra,
        germina_prendimien,
        altura,
        diametro,
        nro_racimos,
        nro_flores_racimos,
        nro_flores_totales,
        nro_frutos_racimos,
        nro_frutos_totales,
        longitud_fruto,
        diametro_fruto,
        peso_fruto,
        produccion_planta,
        ph_suelo,
        mo,
        nitrogeno,
        fosforo,
        potasio,
        otros_elementos,
        temperatura,
        humedad_relativa,
        ruego_lluvia,
        fertiliza_abono,
        cantidad_fertiliza,
        fechas_aplic_fertiliza,
        control_plag_enferm,
        cantidad_control_plag,
        fecha_aplicación,
        observaciones
        )
        values('',
        '$ubicación',
        '$fecha_muestreo',
        '$lugar_lote',
        '$area_sembrada',
        '$planta_especie',
        '$nombre_cinetifico',
        '$variedad',
        '$fecha_implem_siembra',
        '$germina_prendimien',
        '$altura',
        '$diametro',
        '$nro_racimos',
        '$nro_flores_racimos',
        '$nro_flores_totales',
        '$nro_frutos_racimos',
        '$nro_frutos_totales',
        '$longitud_fruto',
        '$diametro_fruto',
        '$peso_fruto',
        '$produccion_planta',
        '$ph_suelo',
        '$mo',
        '$nitrogeno',
        '$fosforo',
        '$potasio',
        '$otros_elementos',
        '$temperatura',
        '$humedad_relativa',
        '$ruego_lluvia',
        '$fertiliza_abono',
        '$cantidad_fertiliza',
        '$fechas_aplic_fertiliza',
        '$control_plag_enferm',
        '$cantidad_control_plag',
        '$fecha_aplicación',
        '$observaciones')");

        if ($sql==1) {
            echo '<div class="alerta2">Usuario Registrado correctamente</div>';
            header("location:../vista/campo.php");
        }else {
            echo '<div class="alerta2">Error</div>';

        }
}else{
    if(!empty($_POST["botonGG1"])){
        header("location:../vista/campo.php");
    }

}
?>
