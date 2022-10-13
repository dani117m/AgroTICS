<?php
include "../controlador/editar.php";
include "../controlador/eliminar.php";
include "../controlador/db.php";
include "../controlador/visualizarformulario.php";
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
    <title>ESPECIES</title>
    <link rel="stylesheet" href="../css/agregar_especie.css">

    
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <div class="texto">
            <H3>Agregar Especies</H3>
            <i id="informacion"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa fa-globe"></i>
            <h4>AGROTICS</h4>
        </div>

        <div class="options__menu">	

            <a onclick="location.href = 'home.php';">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a onclick="location.href = 'Agregar_especie.php';" class="selected">
                <div class="option">
                    <i class="fa fa-pagelines" title="Especies"></i>
                    <h4>Especies</h4>
                </div>
            </a>
            
            <a onclick="location.href = 'Agregar_herramienta.php';">
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

            <a href="../controlador/logout.php">
                <div class="option">
                    <i class="fa fa-power-off" title="Nosotros"></i>
                    <h4>Cerrar sesion</h4>
                </div>
            </a>

        </div>    

    </div>
    
    <main>
    <h3 class="titulocuerpo">OPCIONES</h3><br>
        <div class="cuerpo1">
            <a onclick="location.href = 'formulario_especies2.php';"><button class="boton"><span>AGREGAR</span></button></a>

        </div>
        <br>
        <h3 class="titulocuerpo">ARCHIVOS</h3>
     
        <div class="cuerpo2">
        <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Nombre Cientifico</th>
                    <th>Familia</th>
                    <th>Taxonomia</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                    <th><?php echo $row['id'] ?></th>
                    <th><?php echo $row['nombre'] ?></th>
                    <th><?php echo $row['nombrecientifico'] ?></th>
                    <th><?php echo $row['familia'] ?></th>
                    <th><?php echo $row['taxonomia'] ?></th>
                    <th><a href="../controlador/editar.php?id=<?php echo $row['id'] ?>" class="boto" name="botonE">Editar</a></th>
                    <th><a href="../controlador/eliminar.php?id=<?php echo $row['id'] ?>" class="boto">Eliminar</a></th>
                    <th><a href="../controlador/editar.php?id=<?php echo $row['id'] ?>" class="boto">Comentar</a></th>
                    </tr>
                <?php
                    }
                ?>   
            </tbody>
        </table>

        </div>
    </main>
    <!------->
    <script src="../css/script.js"></script>
</body>
</html>