<?php
session_start();
if (!isset($_SESSION["registrado"])) {
    header("Refresh: 5, url=login.php");
    exit("<h1>No estás registrado. Accediendo a iniciar sesión...</h1>");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <h1>BASE DE DATOS: INICIO</h1>
    <ol>
        <li><a href="insertar.php">Insertar registro</a></li>
        <li><a href="listar.php">Listar</a></li>
        <li><a href="borrar.php">Borrar</a></li>
        <li><a href="buscar.php">Buscar</a></li>
        <li><a href="modificar.php">Modificar</a></li>
        <li><a href="eliminar.php">Eliminar todo</a></li>
    </ol>
</body>

</html>