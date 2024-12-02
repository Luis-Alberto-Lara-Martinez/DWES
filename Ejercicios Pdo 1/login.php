<?php
session_start();
include("funcionesConexion.php");
if (isset($_POST["enviar"])) {
    $existeUsuario = false;
    $nombre = sanearDato($_POST["usuario"]);
    $contrasena = sanearDato($_POST["contrasena"]);

    $conexion = crearBD("Ciudadanos");
    $conexion->query("CREATE TABLE Usuario (
        nombre VARCHAR(50) PRIMARY KEY,
        contrasena VARCHAR(50)
    );");
    $conexion->query("INSERT INTO Usuario VALUES ('root', '1234');");

    $resultado = $conexion->query("SELECT * FROM Usuario;");
    foreach ($resultado as $fila) {
        if ($fila["nombre"] == $nombre && $fila["contrasena"] == $contrasena) {
            $existeUsuario = true;
        }
    }

    if ($existeUsuario) {
        $_SESSION["usuario"] = $nombre;
        header("Refresh: 5; url=index.php");
        exit("<h1>Cargando aplicación...</h1>");
    } else {
        cargarFormulario(true);
    }
} else {
    cargarFormulario(false);
}

function sanearDato($valor)
{
    $valor = htmlspecialchars(strip_tags(trim($valor)), ENT_QUOTES, "utf-8");
    return $valor;
}

function cargarFormulario($hayError)
{
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>

    <body>
        <h1>Autenticación</h1>
        <form action="login.php" method="post">
            <label for="usario">Usuario:
                <input type="text" name="usuario" id="usuario">
            </label>
            <br />
            <br />
            <label for="contrasena">Contraseña
                <input type="password" name="contrasena" id="contrasena">
            </label>
            <?php
            if ($hayError) {
                echo "<p style='color: red'>Datos incorrectos</p>";
            } else {
                echo "<br /><br />";
            }
            ?>
            <input type="submit" value="Iniciar Sesión" name="enviar">
        </form>
    </body>

    </html>
    <?php
}
?>