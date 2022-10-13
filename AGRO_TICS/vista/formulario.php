
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario_crear</title>
    <link rel="stylesheet" href="../css/formulario_crear.css">
</head>
<body>
    <div class="formulario1"> 
        <form action="../vista/formulario.php" method="POST">
        <?php
            require '../controlador/db.php';
            include ("../controlador/signup.php");
        ?>

            <h1>FORMULARIO DE REGISTRO</h1>
            <p>Nombre Usuario</p>
            <p><input type="text" placeholder="Ingrese su nombre de Usuario " name="username"></p>
            <p>Contraseña</p>
            <p><input type="password" placeholder="Ingrese su Contraseña " name="password"></p>
            <p>Rol</p>
            <p><input type="text" placeholder="Ingrese su Rol " name="rol"></p>
            <p>Nombre</p>
            <p><input type="text" placeholder="Ingrese su Nombre " name="name"></p>
            <p>Apellido</p>
            <p><input type="text" placeholder="Ingrese su Apellido " name="lastname"></p>

            <input name="botonG" type="submit" value="REGISTRAR">

        </form>
        <form action="../vista/index.php">
            <input name="boton" type="submit" value="SALIR">
        </form>
       
        
    </div>
    
</body>
</html>