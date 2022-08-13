<?php

session_start();

$mensaje = "";

if (isset($_POST["iniciar"])) {
    $usuario = $_POST["usuario"];
    $clave  = $_POST["clave"];
    $tipo = $_POST["tipoUsuario"];

    if ($usuario == "admin" && $clave == "123") {

        //Variable de sesion
        $_SESSION["user"] = "Giovanni";
        $_SESSION["autorizado"] = true;
        header("location: principal.php");

        //Tipo Usuario    
        $_SESSION["tipo"] = $tipo;
    } else {
        $mensaje = "Usuario y/0 contraseña Incorrecto";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>

    <form method="post">
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="clave" id="clave">
        </div>

        <div class="mb-3">
            <select name="tipoUsuario" class="form-select" aria-label="Default select example">
                <Option selected>Seleccione Tipo Usuario</Option>
                <Option value="Administrador">Administrador</Option>
                <Option value="Invitado">Invitado</Option>
            </select>
        </div>
        <button type="submit" name="iniciar" class="btn btn-primary">Iniciar</button>
    </form>    

        <?php $mensaje ?>
    </form>
</body>

</html>