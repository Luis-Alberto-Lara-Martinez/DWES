<?php
include("funciones.php");
session_start();

if (isset($_SESSION["registrado"])) {
    $conexion = conectarBD("Agenda", "root", "");
    if (isset($_POST["enviar"])) {
        if (isset($_POST["ordenarNombreAsc"])) {
            $accion = "ordenarNombreAsc";
        } elseif (isset($_POST["ordenarNombreDesc"])) {
            $accion = "ordenarNombreDesc";
        } elseif (isset($_POST["ordenarApellidosAsc"])) {
            $accion = "ordenarApellidosAsc";
        } else {
            $accion = "ordenarApellidosDesc";
        }

        switch ($accion) {
            case "ordenarNombreAsc":
                $consulta = $conexion->query("SELECT nombre, apellidos FROM Persona ORDER BY nombre ASC, apellidos ASC");
                cargarFormulario($consulta);
                break;
            case "ordenarNombreDesc":
                $consulta = $conexion->query("SELECT nombre, apellidos FROM Persona ORDER BY nombre DESC, apellidos DESC");
                cargarFormulario($consulta);
                break;
            case "ordenarApellidosAsc":
                $consulta = $conexion->query("SELECT nombre, apellidos FROM Persona ORDER BY apellidos ASC, nombre ASC");
                cargarFormulario($consulta);
                break;
            default:
                $consulta = $conexion->query("SELECT nombre, apellidos FROM Persona ORDER BY apellidos DESC, nombre DESC");
                cargarFormulario($consulta);
                break;
        }
    } else {
        $consulta = $conexion->query("SELECT nombre, apellidos FROM Persona ORDER BY apellidos ASC, nombre ASC");
        cargarFormulario($consulta);
    }
} else {
    header("Refresh: 5, url=login.php");
    exit("<h1>No estás registrado. Accediendo a iniciar sesión...</h1>");
}

function cargarFormulario($consulta)
{
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
    </body>

    </html>
    <?php
}
?>