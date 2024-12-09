<?php
include("funciones.php");
session_start();

if (isset($_SESSION["registrado"])) {
    $conexion = conectarBD("Agenda", "root", "");
    if (isset($_POST["enviar"])) {
        if (isset($_POST["ordenarNombreAsc"])) {
            $consulta = $conexion->query("SELECT * FROM Persona ORDER BY nombre ASC, apellidos ASC");
        } elseif (isset($_POST["ordenarNombreDesc"])) {
            $consulta = $conexion->query("SELECT * FROM Persona ORDER BY nombre DESC, apellidos DESC");
        } elseif (isset($_POST["ordenarApellidosAsc"])) {
            $consulta = $conexion->query("SELECT * FROM Persona ORDER BY apellidos ASC, nombre ASC");
        } else {
            $consulta = $conexion->query("SELECT * FROM Persona ORDER BY apellidos DESC, nombre DESC");
        }
    } else {
        $consulta = $conexion->query("SELECT * FROM Persona ORDER BY apellidos ASC, nombre ASC");
    }
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insertar</title>
        <style>
            input[type="submit"] {
                border: none;
                background: none;
                cursor: pointer;
            }

            table,
            tr,
            th,
            td {
                border: 2px solid blue;
                border-collapse: collapse;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <a href="inicio.php">Volver a la página principal</a>
        <?php
        if ($consulta->rowCount() > 0) {
            ?>
            <p>Listado completo de registros:</p>
            <form action="listar.php" method="post">
                <table>
                    <tr>
                        <th><input type="submit" name="ordenarNombreAsc" value="↑">
                            Nombre
                            <input type="submit" name="ordenarNombreDesc" value="↓">
                        </th>
                        <th><input type="submit" name="ordenarApellidosAsc" value="↑">
                            Apellidos
                            <input type="submit" name="ordenarApellidosDesc" value="↓">
                        </th>
                    </tr>
                    <?php
                    foreach ($consulta as $fila) {
                        echo "<tr>
                        <td>" . $fila["nombre"] . "</td>
                        <td>" . $fila["apellidos"] . "</td>
                        </tr>";
                    }
                    ?>
                </table>
                <input type="hidden" name="enviar">
            </form>
            <?php
        } else {
            ?>
            <p>No existe ningún registro</p>
            <?php
        }
        ?>
    </body>

    </html>
    <?php
} else {
    header("Refresh: 5, url=login.php");
    exit("<h1>No estás registrado. Accediendo a iniciar sesión...</h1>");
}