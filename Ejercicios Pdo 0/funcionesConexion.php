<?php
function crearBD($nombreDB)
{
    try {
        $conexion = new PDO("mysql:host=localhost;charset=utf8", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->query("DROP DATABASE IF EXISTS $nombreDB;");
        $conexion->query("CREATE DATABASE $nombreDB;");
        $conexion->query("USE $nombreDB;");
        return $conexion;
    } catch (PDOException $error) {
        echo "<p>Error encontrado:</p>";
        echo "<p>" . $error->getMessage() . "</p>";
    }
}
function usarConexion()
{
    try {
        $conexion = new PDO("mysql:host=localhost;charset=utf8", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $error) {
        echo "<p>Error encontrado:</p>";
        echo "<p>" . $error->getMessage() . "</p>";
    }
}
?>