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
    <title>Pantalla de Inicio</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    <script src="../assets/js/bootstrap.min.js"></script>
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <div class="texto">
            <H3>Sistema de registro AgroTICS</H3>
            <i id="informacion"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa fa-globe"></i>
            <h4>AGROTICS</h4>
        </div>

        <div class="options__menu">	

            <a onclick="location.href = 'home.php';" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a onclick="location.href = 'Agregar_especie.php';">
                <div class="option">
                    <i class="fa fa-pagelines" title="Especies"></i>
                    <h4>Especies</h4>
                </div>
            </a>
            
            <a onclick="location.href='Agregar_herramienta.php';">
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
        <h1>Title Exemple</h1><br>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam sapiente cumque dicta animi explicabo sequi. Ex amet et, dolor eligendi commodi consectetur quo voluptatibus, cum nemo porro veniam at blanditiis?</p> <br>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident adipisci beatae impedit quia, deleniti quasi sequi iusto exercitationem nihil nulla, laboriosam dolore corrupti fuga officiis? Odit a mollitia id magnam amet delectus quia blanditiis reprehenderit explicabo eveniet! Rem voluptatum explicabo ipsum quae, dolorum, laudantium doloribus a, illum saepe sapiente accusantium dicta reiciendis? Amet iure porro voluptatum error fugit odit voluptas?</p>
    </main>

    <script src="../css/script.js"></script>
</body>
</html>