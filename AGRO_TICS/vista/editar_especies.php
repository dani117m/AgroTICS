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
    <title>Formulario Especies</title>
    <link rel="stylesheet" href="../css/formulario_especies.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet2" href="../assets/css/bootstrap.min.css">
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <div class="texto">
            <H3>Formulario Especie</H3>
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

            <a href="Agregar_especie.php" class="selected">
                <div class="option">
                    <i class="fa fa-pagelines" title="Especies"></i>
                    <h4>Especies</h4>
                </div>
            </a>
            
            <a href="Agregar_herramienta.php">
                <div class="option">
                    <i class="fa fa-list-alt" title="Herramientas"></i>
                    <h4>Herramientas</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Quienes"></i>
                    <h4>Sincronizacion</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Contacto</h4>
                </div>
            </a>

            <a href="../controlador/logout.php">
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
                include '../controlador/validacionEspecies.php';
                include '../controlador/db.php';

            ?>
            <!-----<header>Formulario</header>----------->
            
            <div class="form-princ">
                <form action="" method="POST">
                    <!--------------------------------------PAGINA 1--------------------------------------------------->
                    <div class="pagina1 movPag">
                        <div class="titulo">Titulo</div>
                        <div class="campo">
                            <div class="label">Nombre:</div>
                            <input type="text" id="nombre" name="nombre" placeholder="" value="<?= $row['herramienta'] ?>" >
                        </div>
                        <div class="campo">
                            <div class="label">Nombre Cientifico:</div>
                            <input type="text" id="nombrecientifico" name="nombrecientifico" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Familia</div>
                            <input type="text" id="familia" name="familia" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Genero</div>
                            <input type="text" id="genero" name="genero" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Especie</div>
                            <input type="text" id="especie" name="especie" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Origen</div>
                            <input type="text" id="origen" name="origen" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Taxonomia</div>
                            <input type="text" id="taxonomia" name="taxonomia" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Raiz</div>
                            <input type="text" id="raiz" name="raiz" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Hojas</div>
                            <input type="text" id="hojas" name="hojas" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Tallo</div>
                            <input type="text" id="tallo" name="tallo" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo">
                            <div class="label">Inflorescencia</div>
                            <input type="text" id="inflorescencia" name="inflorescencia" placeholder="" value="<?= $row['herramienta'] ?>">
                        </div>
                        <div class="campo btns">
                            <button input id="botonGG1" name="botonGG1" type="submit" value="SALIR">Salir</button>  
                            <button class="sigPag">Siguiente</button>
  
                        </div>
 
                    </div> 
                    <!--------------------------------------PAGINA 2--------------------------------------------------->
                    <div class="pagina1">
                        <div class="titulo">Titulo</div>
                        <div class="campo">
                            <div class="label">Semillas</div>
                            <input type="text" id="semillas" name="semillas" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Material Vegetal</div>
                            <input type="text" id="material_vegetal" name="material_vegetal" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Ciclo de vida</div>
                            <input type="text" id="ciclo_de_vida" name="ciclo_de_vida" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Altura</div>
                            <input type="text" id="altura" name="altura" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Diametro</div>
                            <input type="text" id="diametro" name="diametro" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Clima</div>
                            <input type="text" id="clima" name="clima" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Optima</div>
                            <input type="text" id="optima" name="optima" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Tiempo germinacion</div>
                            <input type="text" id="temp_germinacion" name="temp_germinacion" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">temp_min_crecimiento</div>
                            <input type="text" id="temp_min_crecimiento" name="temp_min_crecimiento" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">temperaturas</div>
                            <input type="text" id="temperaturas" name="temperaturas" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">humedad</div>
                            <input type="text" id="humedad" name="humedad" placeholder="">
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
                            <div class="label">humendad_porcentaje</div>
                            <input type="text" id="humendad_porcentaje" name="humendad_porcentaje" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">suelo</div>
                            <input type="text" id="suelo" name="suelo" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">textura_suelo</div>
                            <input type="text" id="textura_suelo" name="textura_suelo" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">ph_textura</div>
                            <input type="text" id="ph_textura" name="ph_textura" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">zona_produccion</div>
                            <input type="text" id="zona_produccion" name="zona_produccion" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">epoca_siembra</div>
                            <input type="text" id="epoca_siembra" name="epoca_siembra" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">riesgo_epoca</div>
                            <input type="text" id="riesgo_epoca" name="riesgo_epoca" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">labores_cultivo</div>
                            <input type="text" id="labores_cultivo" name="labores_cultivo" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">semillero</div>
                            <input type="text" id="semillero" name="semillero" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">cantidad_semillero</div>
                            <input type="text" id="cantidad_semillero" name="cantidad_semillero" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">preparacion_terreno</div>
                            <input type="text" id="preparacion_terreno" name="preparacion_terreno" placeholder="">
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
                            <div class="label">profun_preparacion</div>
                            <input type="text" id="profun_preparacion" name="profun_preparacion" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">recom_preparacion</div>
                            <input type="text" id="recom_preparacion" name="recom_preparacion" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">plantacion</div>
                            <input type="text" id="plantacion" name="plantacion" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">distancia</div>
                            <input type="text" id="distancia" name="distancia" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">surcos</div>
                            <input type="text" id="surcos" name="surcos" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">plantas</div>
                            <input type="text" id="plantas" name="plantas" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">hileras</div>
                            <input type="text" id="hileras" name="hileras" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">buena_asosacion</div>
                            <input type="text" id="buena_asosacion" name="buena_asosacion" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">mala_asocsacion</div>
                            <input type="text" id="mala_asocsacion" name="mala_asocsacion" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">riesgo</div>
                            <input type="text" id="riesgo" name="riesgo" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">abon_y_fertilizant</div>
                            <input type="text" id="abon_y_fertilizant" name="abon_y_fertilizant" placeholder="">
                        </div>
                        <div class="campo btns">
                            <button class="volver-pag3 volver">Atras</button>
                            <button class="adelante-pag5 adelante">Siguiente</button>
                        </div>
                        
                    </div>
                    <!--------------------------------------PAGINA 5--------------------------------------------------->
                    <div class="pagina1">
                        <div class="titulo">Titulo</div>
                        <div class="campo">
                            <div class="label">mineral_quimico</div>
                            <input type="text" id="mineral_quimico" name="mineral_quimico" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">contr_malas_hierbas</div>
                            <input type="text" id="contr_malas_hierbas" name="contr_malas_hierbas" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">plagas_enfermedades</div>
                            <input type="text" id="plagas_enfermedades" name="plagas_enfermedades" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">recol_almacen_dias</div>
                            <input type="text" id="recol_almacen_dias" name="recol_almacen_dias" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">recol_almacen_temp</div>
                            <input type="text" id="recol_almacen_temp" name="recol_almacen_temp" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">produc_promedia</div>
                            <input type="text" id="produc_promedia" name="produc_promedia" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">valor_nutricional</div>
                            <input type="text" id="valor_nutricional" name="valor_nutricional" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">uso_y_aplicacion</div>
                            <input type="text" id="uso_y_aplicacion" name="uso_y_aplicacion" placeholder="">
                        </div>
                        <div class="campo btns">
                            <button class="volver-pag4 volver">Atras</button>
                            <button input name="botonGG" type="submit" value="REGISTRAR">Registrar</button>
                            <button input name="botonGG1" type="submit" value="SALIR">Salir</button>    
                        </div>
                    </div>
                </form>
            </div>

     
        </div>

        <div class="cuerpo2">

            

        </div>
    </main>
    <script src="../controlador/movimiento_formulario.js"></script>
    <!-- <script src="../css/script.js"></script>----->
</body>
</html>