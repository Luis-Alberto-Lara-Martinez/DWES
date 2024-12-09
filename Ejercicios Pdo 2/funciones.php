<?php
function crearYConectarBD($nombreBD, $user, $password)
{
    try {
        $conexion = new PDO("mysql:host=localhost;charset=utf8", $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->query("DROP DATABASE IF EXISTS " . $nombreBD);
        $conexion->query("CREATE DATABASE " . $nombreBD);
        $conexion->query("USE " . $nombreBD);
        $conexion->query("CREATE TABLE Persona(
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(50) NOT NULL,
            apellidos VARCHAR(50) NOT NULL
        );");
        $conexion->query("CREATE TABLE Usuarios(
            usuario VARCHAR(50) PRIMARY KEY,
            contrasena VARCHAR(50) NOT NULL
        );");
        $conexion->query("INSERT INTO Usuarios VALUES ('admin', 'admin')");
        return $conexion;
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

function conectarBD($nombreBD, $user, $password)
{
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=" . $nombreBD . ";charset=utf8", $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>