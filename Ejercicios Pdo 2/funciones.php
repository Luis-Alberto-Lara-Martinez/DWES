<?php
function crearYConectarBD($nombreBD, $user, $password)
{
    try {
        $conexion = new PDO("mysql:host=localhost;charset=utf8", $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $conexion->prepare("DROP DATABASE IF EXISTS " . $nombreBD);
        $consulta->execute();

        $consulta = $conexion->prepare("CREATE DATABASE " . $nombreBD);
        $consulta->execute();

        $consulta = $conexion->prepare("USE " . $nombreBD);
        $consulta->execute();

        return $conexion;
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

function conectarBD($nombreBD, $user, $password)
{
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=" . $nombreBD . "charset=utf8", $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>