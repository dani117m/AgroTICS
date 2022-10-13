<?php

if(!empty($_POST["botonGG"]))
{

    require '../controlador/db.php';
   
    $id = $_POST[''];
    $nombre = $_POST['nombre'];
	$nombrecientifico = $_POST['nombrecientifico'];
	$familia = $_POST['familia'];
	$genero = $_POST['genero'];
	$especie = $_POST['especie'];
	$origen = $_POST['origen'];
	$taxonomia = $_POST['taxonomia'];
	$raiz = $_POST['raiz'];
	$hojas = $_POST['hojas'];
	$tallo = $_POST['tallo'];
	$inflorescencia = $_POST['inflorescencia'];
	$semillas = $_POST['semillas'];
	$material_vegetal = $_POST['material_vegetal'];
	$ciclo_de_vida = $_POST['ciclo_de_vida'];
	$altura = $_POST['altura'];
	$diametro = $_POST['diametro'];
	$clima = $_POST['clima'];
	$optima = $_POST['optima'];
	$temp_germinacion = $_POST['temp_germinacion'];
	$temp_min_crecimiento = $_POST['temp_min_crecimiento'];
	$temperaturas = $_POST['temperaturas'];
	$humedad = $_POST['humedad'];
	$humendad_porcentaje = $_POST['humendad_porcentaje'];
	$suelo = $_POST['suelo'];
	$textura_suelo = $_POST['textura_suelo'];
	$ph_textura = $_POST['ph_textura'];
	$zona_produccion = $_POST['zona_produccion'];
	$epoca_siembra = $_POST['epoca_siembra'];
	$riesgo_epoca = $_POST['riesgo_epoca'];
	$labores_cultivo = $_POST['labores_cultivo'];
	$semillero = $_POST['semillero'];
	$cantidad_semillero = $_POST['cantidad_semillero'];
	$preparacion_terreno = $_POST['preparacion_terreno'];
	$profun_preparacion = $_POST['profun_preparacion'];
	$recom_preparacion = $_POST['recom_preparacion'];
	$plantacion = $_POST['plantacion'];
	$distancia = $_POST['distancia'];
	$surcos = $_POST['surcos'];
	$plantas = $_POST['plantas'];
	$hileras = $_POST['hileras'];
	$buena_asosacion = $_POST['buena_asosacion'];
	$mala_asocsacion = $_POST['mala_asocsacion'];
	$riesgo = $_POST['riesgo'];
	$abon_y_fertilizant = $_POST['abon_y_fertilizant'];
	$mineral_quimico = $_POST['mineral_quimico'];
	$contr_malas_hierbas = $_POST['contr_malas_hierbas'];
	$plagas_enfermedades = $_POST['plagas_enfermedades'];
	$recol_almacen_dias = $_POST['recol_almacen_dias'];
	$recol_almacen_temp = $_POST['recol_almacen_temp'];
	$produc_promedia = $_POST['produc_promedia'];
	$valor_nutricional = $_POST['valor_nutricional'];
	$uso_y_aplicacion = $_POST['uso_y_aplicacion'];
    $sql=$conn->query("INSERT INTO especies(
        id,
        nombre,
        nombrecientifico,
        familia,
        genero,
        especie,
        origen,
        taxonomia,
        raiz,
        hojas,
        tallo,
        inflorescencia,
        semillas,
        material_vegetal,
        ciclo_de_vida,
        altura,
        diametro,
        clima,
        optima,
        temp_germinacion,
        temp_min_crecimiento,
        temperaturas,
        humedad,
        humendad_porcentaje,
        suelo,
        textura_suelo,
        ph_textura,
        zona_produccion,
        epoca_siembra,
        riesgo_epoca,
        labores_cultivo,
        semillero,
        cantidad_semillero,
        preparacion_terreno,
        profun_preparacion,
        recom_preparacion,
        plantacion,
        distancia,
        surcos,
        plantas,
        hileras,
        buena_asosacion,
        mala_asocsacion,
        riesgo,
        abon_y_fertilizant,
        mineral_quimico,
        contr_malas_hierbas,
        plagas_enfermedades,
        recol_almacen_dias,
        recol_almacen_temp,
        produc_promedia,
        valor_nutricional,
        uso_y_aplicacion
        )
        values('',
        '$nombre',
        '$nombrecientifico',
        '$familia',
        '$genero',
        '$especie',
        '$origen',
        '$taxonomia',
        '$raiz',
        '$hojas',
        '$tallo',
        '$inflorescencia',
        '$semillas',
        '$material_vegetal',
        '$ciclo_de_vida',
        '$altura',
        '$diametro',
        '$clima',
        '$optima',
        '$temp_germinacion',
        '$temp_min_crecimiento',
        '$temperaturas',
        '$humedad',
        '$humendad_porcentaje',
        '$suelo',
        '$textura_suelo',
        '$ph_textura',
        '$zona_produccion',
        '$epoca_siembra',
        '$riesgo_epoca',
        '$labores_cultivo',
        '$semillero',
        '$cantidad_semillero',
        '$preparacion_terreno',
        '$profun_preparacion',
        '$recom_preparacion',
        '$plantacion',
        '$distancia',
        '$surcos',
        '$plantas',
        '$hileras',
        '$buena_asosacion',
        '$mala_asocsacion',
        '$riesgo',
        '$abon_y_fertilizant',
        '$mineral_quimico',
        '$contr_malas_hierbas',
        '$plagas_enfermedades',
        '$recol_almacen_dias',
        '$recol_almacen_temp',
        '$produc_promedia',
        '$valor_nutricional',
        '$uso_y_aplicacion')");

        if ($sql==1) {
            echo '<div class="alerta2">Usuario Registrado correctamente</div>';
            header("location:../vista/Agregar_especie.php");
        }else {
            echo '<div class="alerta2">Error</div>';

        }
}else{
    if(!empty($_POST["botonGG1"])){
        header("location:../vista/Agregar_especie.php");
    }

}
?>
