<?php
include("funciones.php");
session_start();

if (isset($_SESSION["registrado"])) {
    if (isset($_POST["si"])) {
        $conexion = crearYConectarBD("Agenda", "root", "");
        header("Refresh: 5; url=inicio.php");
        exit("<p>Base de datos borrada correctamente</p>
            <p>Base de datos creada correctamente</p>
            <p>Tablas Usuario y Persona creadas correctamente</p>");
    } elseif (isset($_POST["no"])) {
        header("Location: inicio.php");
        exit;
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Eliminar</title>
        </head>

        <body>
            <form action="eliminar.php" method="post">
                <p>¿Está seguro?</p>
                <input type="submit" name="si" value="Sí">
                <input type="submit" name="no" value="No">
            </form>
        </body>

        </html>
        <?php
    }
} else {
    header("Refresh: 5, url=login.php");
    exit("<h1>No estás registrado. Accediendo a iniciar sesión...</h1>");
}