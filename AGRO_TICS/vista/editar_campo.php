<?php 

session_start();

if (empty($_SESSION["id"])){
    header("Location: index.php");
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Campo</title>
    <link rel="stylesheet" href="../css/formulario_herramientas.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <div class="texto">
            <H3>Editar de Campos</H3>
            <i id="informacion"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa fa-globe"></i>
            <h4>AGROTICS</h4>
        </div>

        <div class="options__menu">	

            <a href="home.php">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="Agregar_especie.php">
                <div class="option">
                    <i class="fa fa-pagelines" title="Especies"></i>
                    <h4>Especies</h4>
                </div>
            </a>
            
            <a href="Agregar_herramienta.php" >
                <div class="option">
                    <i class="fa fa-list-alt" title="Herramientas"></i>
                    <h4>Herramientas</h4>
                </div>
            </a>
            
            <a onclick="location.href='campo.php';" class="selected">
                <div class="option">
                    <i class="far fa-sticky-note" title="Campo"></i>
                    <h4>Campo</h4>
                </div>
            </a>

            <a onclick="location.href='listaestudiantes.php';">
                <div class="option">
                    <i class="far fa-id-badge" title="Estudiantes"></i>
                    <h4>Estudiantes</h4>
                </div>
            </a>
            
            <a onclick="location.href='../controlador/logout.php';">
                <div class="option">
                    <i class="fa fa-power-off" title="Nosotros"></i>
                    <h4>Cerrar sesion</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
  
        <div class="container">
            
            <?php 
            include '../controlador/modificar_campo.php';
            

            ?>
            
            <div class="form-princ">
                <form action="" method="POST">
                    <!--------------------------------------PAGINA 1--------------------------------------------------->
                    <div class="pagina1 movPag">
                        <div class="titulo">Titulo</div>
                        <div class="campo">
                            <div class="label">ubicación:</div>
                            <input type="text" id="ubicación" name="ubicación" placeholder="" value="<?= $row['ubicación'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Fecha muestreo:</div>
                            <input type="text" id="fecha_muestreo" name="fecha_muestreo" placeholder="" value="<?= $row['fecha_muestreo'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Lugar ote</div>
                            <input type="text" id="lugar_lote" name="lugar_lote" placeholder="" value="<?= $row['lugar_lote'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Area Sembrada</div>
                            <input type="text" id="area_sembrada" name="area_sembrada" placeholder="" value="<?= $row['area_sembrada'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">planta-especie</div>
                            <input type="text" id="planta_especie" name="planta_especie" placeholder="" value="<?= $row['planta_especie'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">nombre_cinetifico</div>
                            <input type="text" id="nombre_cinetifico" name="nombre_cinetifico" placeholder="" value="<?= $row['nombre_cinetifico'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">variedad</div>
                            <input type="text" id="variedad" name="variedad" placeholder="" value="<?= $row['variedad'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">fecha_implem_siembra</div>
                            <input type="text" id="fecha_implem_siembra" name="fecha_implem_siembra" placeholder="" value="<?= $row['fecha_implem_siembra'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">germina-prendimien</div>
                            <input type="text" id="germina_prendimien" name="germina_prendimien" placeholder="" value="<?= $row['germina_prendimien'] ?>">
                        </div>

                        <div class="campo btns">
                            <button id="botonGG1" name="botonGG1" type="submit" value="SALIR">Salir</button>  
                            <button class="sigPag">Siguiente</button>
  
                        </div>
 
                    </div> 
                    <!--------------------------------------PAGINA 2--------------------------------------------------->
                    <div class="pagina1">
                        <div class="titulo">Titulo</div>
                        <div class="campo">
                            <div class="label">altura</div>
                            <input type="text" id="altura" name="altura" placeholder="" value="<?= $row['altura'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">diametro</div>
                            <input type="text" id="diametro" name="diametro" placeholder="" value="<?= $row['diametro'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">nro_racimos</div>
                            <input type="text" id="nro_racimos" name="nro_racimos" placeholder="" value="<?= $row['nro_racimos'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">nro_flores_racimos</div>
                            <input type="text" id="nro_flores_racimos" name="nro_flores_racimos" placeholder="" value="<?= $row['nro_flores_racimos'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">nro_flores_totales</div>
                            <input type="text" id="nro_flores_totales" name="nro_flores_totales" placeholder="" value="<?= $row['nro_flores_totales'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">nro_frutos_racimos</div>
                            <input type="text" id="nro_frutos_racimos" name="nro_frutos_racimos" placeholder="" value="<?= $row['nro_frutos_racimos'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">nro_frutos_totales</div>
                            <input type="text" id="nro_frutos_totales" name="nro_frutos_totales" placeholder="" value="<?= $row['nro_frutos_totales'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">longitud_fruto</div>
                            <input type="text" id="longitud_fruto" name="longitud_fruto" placeholder="" value="<?= $row['longitud_fruto'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">diametro_fruto</div>
                            <input type="text" id="diametro_fruto" name="diametro_fruto" placeholder="" value="<?= $row['diametro_fruto'] ?>">
                        </div>
                        <div class="campo btns">
                            <button class="volver-pag1 volver">Atras</button>
                            <button class="adelante-pag3 adelante">Siguiente</button>
                        </div>
                    </div>
                    <!--------------------------------------PAGINA 3--------------------------------------------------->
                    <div class="pagina1">
                        <div class="titulo">Titulo</div>
                        <div class="campo">
                            <div class="label">peso_fruto</div>
                            <input type="text" id="peso_fruto" name="peso_fruto" placeholder="" value="<?= $row['peso_fruto'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">produccion_planta</div>
                            <input type="text" id="produccion_planta" name="produccion_planta" placeholder="" value="<?= $row['produccion_planta'] ?>">
                        </div>

                        <div class="campo">
                            <div class="label">ph_suelo</div>
                            <input type="text" id="ph_suelo" name="ph_suelo" placeholder="" value="<?= $row['ph_suelo'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">mo</div>
                            <input type="text" id="mo" name="mo" placeholder="" value="<?= $row['mo'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">nitrogeno</div>
                            <input type="text" id="nitrogeno" name="nitrogeno" placeholder="" value="<?= $row['nitrogeno'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">fosforo</div>
                            <input type="text" id="fosforo" name="fosforo" placeholder="" value="<?= $row['fosforo'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">potasio</div>
                            <input type="text" id="potasio" name="potasio" placeholder="" value="<?= $row['potasio'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">otros_elementos</div>
                            <input type="text" id="otros_elementos" name="otros_elementos" placeholder="" value="<?= $row['otros_elementos'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">temperatura</div>
                            <input type="text" id="temperatura" name="temperatura" placeholder="" value="<?= $row['temperatura'] ?>">
                        </div>
                        <div class="campo btns">
                            <button class="volver-pag2 volver">Atras</button>
                            <button class="adelante-pag4 adelante">Siguiente</button>
                        </div>
                        
                        
                    </div>
                    <!--------------------------------------PAGINA 4--------------------------------------------------->
                    <div class="pagina1">
                        <div class="titulo">Titulo</div>
                        <div class="campo">
                            <div class="label">humedad_relativa</div>
                            <input type="text" id="humedad_relativa" name="humedad_relativa" placeholder="" value="<?= $row['humedad_relativa'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">ruego_lluvia</div>
                            <input type="text" id="ruego_lluvia" name="ruego_lluvia" placeholder="" value="<?= $row['ruego_lluvia'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">fertiliza-abono</div>
                            <input type="text" id="fertiliza_abono" name="fertiliza_abono" placeholder="" value="<?= $row['fertiliza_abono'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">cantidad_fertiliza</div>
                            <input type="text" id="cantidad_fertiliza" name="cantidad_fertiliza" placeholder="" value="<?= $row['cantidad_fertiliza'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">fechas_aplic_fertiliza</div>
                            <input type="text" id="fechas_aplic_fertiliza" name="fechas_aplic_fertiliza" placeholder="" value="<?= $row['fechas_aplic_fertiliza'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">control_plag_enferm</div>
                            <input type="text" id="control_plag_enferm" name="control_plag_enferm" placeholder="" value="<?= $row['control_plag_enferm'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">cantidad_control_plag</div>
                            <input type="text" id="cantidad_control_plag" name="cantidad_control_plag" placeholder="" value="<?= $row['cantidad_control_plag'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">fecha_aplicación</div>
                            <input type="text" id="fecha_aplicación" name="fecha_aplicación" placeholder="" value="<?= $row['fecha_aplicación'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">observaciones</div>
                            <input type="text" id="observaciones" name="observaciones" placeholder="" value="<?= $row['observaciones'] ?>">
                        </div>
                        <div class="campo btns">
                            <button class="volver-pag3 volver">Atras</button>
                            <button name="botonGG" type="submit" value="REGISTRAR">Registrar</button>
                            <button name="botonGG1" type="submit" value="SALIR">Salir</button>    
                        </div>
                    </div>
                </form>
            </div>

     
        </div>

            
        </div>
        <br>
    </main>
    
    <script src="../controlador/movimiento_formulario2.js"></script>
</body>
</html>