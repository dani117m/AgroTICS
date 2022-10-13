<?php 
error_reporting(0);
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
    <title>Formulario Campo</title>
    <link rel="stylesheet" href="../css/formulario_herramientas.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <div class="texto">
            <H3>Seccion de Campos</H3>
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
                include '../controlador/validacionCampo.php';

            ?>
            
            <div class="form-princ">
                <form action="" method="POST">
                    <!--------------------------------------PAGINA 1--------------------------------------------------->
                    <div class="pagina1 movPag">
                        <div class="titulo">Titulo</div>
                        <div class="campo">
                            <div class="label">ubicación:</div>
                            <input type="text" id="ubicación" name="ubicación" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Fecha muestreo:</div>
                            <input type="text" id="fecha_muestreo" name="fecha_muestreo" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Lugar ote</div>
                            <input type="text" id="lugar-lote" name="lugar-lote" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Area Sembrada</div>
                            <input type="text" id="area_sembrada" name="area_sembrada" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">planta-especie</div>
                            <input type="text" id="planta-especie" name="planta-especie" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">nombre_cinetifico</div>
                            <input type="text" id="nombre_cinetifico" name="nombre_cinetifico" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">variedad</div>
                            <input type="text" id="variedad" name="variedad" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">fecha_implem_siembra</div>
                            <input type="text" id="fecha_implem_siembra" name="fecha_implem_siembra" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">germina-prendimien</div>
                            <input type="text" id="germina-prendimien" name="germina-prendimien" placeholder="">
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
                            <input type="text" id="altura" name="altura" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">diametro</div>
                            <input type="text" id="diametro" name="diametro" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">nro_racimos</div>
                            <input type="text" id="nro_racimos" name="nro_racimos" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">nro_flores-racimos</div>
                            <input type="text" id="nro_flores-racimos" name="nro_flores-racimos" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">nro_flores_totales</div>
                            <input type="text" id="nro_flores_totales" name="ciclo_de_vida" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">nro_frutos-racimos</div>
                            <input type="text" id="nro_frutos-racimos" name="nro_frutos-racimos" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">nro_frutos_totales</div>
                            <input type="text" id="nro_frutos_totales" name="nro_frutos_totales" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">longitud_fruto</div>
                            <input type="text" id="longitud_fruto" name="longitud_fruto" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">diametro_fruto</div>
                            <input type="text" id="diametro_fruto" name="diametro_fruto" placeholder="">
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
                            <input type="text" id="peso_fruto" name="peso_fruto" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">produccion-planta</div>
                            <input type="text" id="produccion-planta" name="produccion-planta" placeholder="">
                        </div>

                        <div class="campo">
                            <div class="label">ph_suelo</div>
                            <input type="text" id="ph_suelo" name="ph_suelo" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">mo</div>
                            <input type="text" id="mo" name="mo" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">nitrogeno</div>
                            <input type="text" id="nitrogeno" name="nitrogeno" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">fosforo</div>
                            <input type="text" id="fosforo" name="fosforo" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">potasio</div>
                            <input type="text" id="potasio" name="potasio" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">otros_elementos</div>
                            <input type="text" id="otros_elementos" name="otros_elementos" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">temperatura</div>
                            <input type="text" id="temperatura" name="temperatura" placeholder="">
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
                            <input type="text" id="humedad_relativa" name="humedad_relativa" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">ruego-lluvia</div>
                            <input type="text" id="ruego-lluvia" name="ruego-lluvia" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">fertiliza-abono</div>
                            <input type="text" id="fertiliza-abono" name="fertiliza-abono" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">cantidad_fertiliza</div>
                            <input type="text" id="cantidad_fertiliza" name="cantidad_fertiliza" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">fechas_aplic_fertiliza</div>
                            <input type="text" id="fechas_aplic_fertiliza" name="fechas_aplic_fertiliza" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">control_plag_enferm</div>
                            <input type="text" id="control_plag_enferm" name="control_plag_enferm" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">cantidad_control_plag</div>
                            <input type="text" id="cantidad_control_plag" name="cantidad_control_plag" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">fecha-aplicación</div>
                            <input type="text" id="fecha-aplicación" name="fecha-aplicación" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">observaciones</div>
                            <input type="text" id="observaciones" name="observaciones" placeholder="">
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
