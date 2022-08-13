<?php
    session_start();

    if(!$_SESSION["autorizado"]){
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitado</title>
</head>
<body>
    <h2>
        
        Bienvenido <?php echo $_SESSION["user"] ?> <br>
        Tipo de Usuario <?php echo $_SESSION["tipo"] ?>

    </h2>

    <a href="cerrar.php"> cerrar sesion</a>

</body>
</html>