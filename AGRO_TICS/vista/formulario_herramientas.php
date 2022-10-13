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
    <title>Formulario Herramientas</title>
    <link rel="stylesheet" href="../css/formulario_herramientas.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <div class="texto">
            <H3>Solicitud Herramienta</H3>
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
            
            <a href="Agregar_herramienta.php" class="selected">
                <div class="option">
                    <i class="fa fa-list-alt" title="Herramientas"></i>
                    <h4>Herramientas</h4>
                </div>
            </a>

            <a onclick="location.href='campo.php';">
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
                include '../controlador/validacionHerramientas.php';

            ?>
            <div class="form-princ">
                <form action="" method="POST">
                <div class="pagina1 movPag">
                        <div class="titulo">Titulo</div>
                        <div class="campo">
                            <div class="label">Herramienta:</div>
                            <input type="text" id="herramienta" name="herramienta" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Disponibilidad:</div>
                            <input type="text" id="disponibilidad" name="disponibilidad" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Fecha Salida</div>
                            <input type="text" id="fecha_alta" name="fecha_alta" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Fecha entrada</div>
                            <input type="text" id="fecha_baja" name="fecha_baja" placeholder="">
                        </div>
                        <div class="campo">
                            <div class="label">Estado de herramienta</div>
                            <input type="text" id="estado_herramienta" name="estado_herramienta" placeholder="">
                        </div>
                        <div class="campo btns">
                            <button input name="botonGG" type="submit" value="REGISTRAR">Registrar</button>
                            <button input name="botonGG1" type="submit" value="Volver">Salir</button>
                        </div>
                    </div> 
                </form>
            </div>

        </div>
        <br>
    </main>
</body>
</html>
