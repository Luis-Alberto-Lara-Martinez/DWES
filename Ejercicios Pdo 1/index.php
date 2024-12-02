<?php
session_start();
if (isset($_SESSION["usuario"])) {
    include("funcionesConexion.php");
    $conexion = usarConexion();
    $conexion->query("USE Ciudadanos;");
    $conexion->query("CREATE TABLE IF NOT EXISTS Agenda(
        id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(15) NOT NULL,
        apellidos VARCHAR(25) NOT NULL,
        direccion VARCHAR(25) NOT NULL,
        telefono INT(9) NOT NULL
    );");
    ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
    </head>

    <body>
        <h1>Aplicación de una base de datos</h1>
        <a href="insertar.php">Insertar registros</a>
        <br />
        <a href="listar.php">Listado</a>
        <br />
        <a href="borrar.php">Borrar registros</a>
    </body>

    </html>
    <?php
} else {
    header("Refresh: 5; url=login.php");
    exit("<h1>Usuario no encontrado. Redirigiendo...</h1>");
}
?>