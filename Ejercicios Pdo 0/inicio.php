<?php
include("funcionesConexion.php");
if (isset($_POST["reiniciar"])) {
    $conexion = usarConexion();
    $conexion->query("DROP DATABASE IF EXISTS Ciudadanos;");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>

<body>
    <h1>Gestión de la Base de Datos</h1>
    <ul>
        <li><a href="crearBD.php">Crear Base de Datos</a></li>
        <li><a href="borrarRegistros.php">Borrar Registros</a></li>
    </ul>
</body>

</html>