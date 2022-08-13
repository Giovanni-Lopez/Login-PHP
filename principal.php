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
    <title>Inicio</title>
</head>
<body>
    <h1>
        Pagina Principal
    </h1>

    <h3>
        Bienvenido <?php echo $_SESSION["user"] ?> <br>
        Tipo de usuario <?php echo $_SESSION["tipo"]?>
    </h3>

    <a href="cerrar.php"> cerrar sesion</a>
</body>
</html>