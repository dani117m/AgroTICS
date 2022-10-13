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
    <title>Formulario Estudiantes</title>
    <link rel="stylesheet" href="../css/formulario_herramientas.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <div class="texto">
            <H3>Seccion Estudiantes</H3>
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

            <a onclick="location.href='campo.php';">
                <div class="option">
                    <i class="far fa-sticky-note" title="Campo"></i>
                    <h4>Campo</h4>
                </div>
            </a>

            <a onclick="location.href='listaestudiantes.php';" class="selected">
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
  
        <div class="cuerpo1">
            <form action="" method="POST">
            <?php 
                include '';

            ?>
                <table>
                    <h3 class="titulocuerpo">Formulario</h3>
                    <br>
                    <tr>
                        <td>Herramienta:</td>
                        <td><input type="text" name="herramienta"></td>
                    </tr>
                    <tr>
                        <td>Disponibilidad:</td>
                        <td><input type="text" name="disponibilidad"></td>
                    </tr>
                    <tr>
                        <td>Fecha Salida:</td>
                        <td><input type="text" name="fecha_alta"></td>
                    </tr>
                    <tr>
                        <td>Fecha Vuelta:</td>
                        <td><input type="text" name="fecha_baja"></td>
                    </tr>
                    <tr>
                        <td>Estado:</td>
                        <td><input type="text" name="estado_herramienta"></td>
                    </tr>
                </table>
                <br>
                <button class="boton"> <input name="botonGG" type="submit" value="REGISTRAR"></button>
                <button class="boton"><input name="botonGG1" type="submit" value="Volver"></button>

                
            </form>
            
        </div>
        <br>
    </main>
    
    <script src="../css/script.js"></script>
</body>
</html>
