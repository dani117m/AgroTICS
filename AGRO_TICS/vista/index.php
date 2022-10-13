

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="../css/login.css">

    
</head>
<body>    
    <div class="titulo-login">
        <h1>Estación Agropecuaria UTPL </h1>
    </div>

    <div class="login-box">
        <h1>Iniciar Sessión</h1>
        <?php
            include '../controlador/db.php';
            include '../controlador/validar.php';
        ?>
        <form action="" method="POST">
        <label>Ingrese su Usuario</label>
        <input type="text" placeholder="Correo " name="username">
        <label>Contraseña</label>
        <input type="password" placeholder="Contraseña " name="password" >
        <input type="submit" href="" value="Ingresar" name="botonRegistro">
        <a href="#">Recuperar contraseña</a>
        <p></p>
        <a href="../vista/formulario.php">Crear una cuenta</a>

        
    </div>
    </form>
</body>
</html>