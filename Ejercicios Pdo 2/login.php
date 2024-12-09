<?php
include("funciones.php");
session_start();

if (isset($_SESSION["registrado"])) {
    header("Refresh: 5, url=inicio.php");
    exit("<h1>Ya estás registrado. Cargando app...</h1>");
}

$conexion = crearYConectarBD("Agenda", "root", "");
if (isset($_POST["enviar"])) {
    $usuario = sanearDato($_POST["usuario"]);
    $contrasena = sanearDato($_POST["contrasena"]);
    if ($usuario == "" || $contrasena == "") {
        cargarFormulario("Datos introducidos no válidos");
    } else {
        $existeUsuario = false;
        $consulta = $conexion->query("SELECT * FROM Usuarios");
        foreach ($consulta as $fila) {
            if ($fila["usuario"] == $usuario && $fila["contrasena"] == $contrasena) {
                $existeUsuario = true;
            }
        }
        if ($existeUsuario) {
            $_SESSION["registrado"] = "ok";
            header("Refresh: 5; url=inicio.php");
            exit("<h1>Usuario encontrado. Cargando aplicación...</h1>");
        } else {
            cargarFormulario("Usuario no existente");
        }
    }
} else {
    cargarFormulario("");
}

function cargarFormulario($error)
{
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="login.php" method="post">
            <label for="usuario">Usuario
                <input type="text" name="usuario" id="usuario">
            </label>
            <br /><br />
            <label for="contrasena">Contraseña
                <input type="password" name="contrasena" id="contrasena">
            </label>
            <br />
            <?php
            echo "<p style='color: red'>" . $error . "</p>";
            ?>
            <input type="submit" value="Iniciar Sesión" name="enviar">
        </form>
    </body>

    </html>
    <?php
}

function sanearDato($valor)
{
    return htmlspecialchars(strip_tags(trim($valor)), ENT_QUOTES, "utf-8");
}
?>