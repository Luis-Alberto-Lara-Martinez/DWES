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
        } elseif (isset($_POST["ordenarApellidosDesc"])) {
            $accion = "ordenarApellidosDesc";
        } else {
            $accion = "modificar";
        }

        switch ($accion) {
            case "ordenarNombreAsc":
                $consulta = $conexion->query("SELECT * FROM Persona ORDER BY nombre ASC, apellidos ASC");
                cargarRegistros($consulta);
                break;
            case "ordenarNombreDesc":
                $consulta = $conexion->query("SELECT * FROM Persona ORDER BY nombre DESC, apellidos DESC");
                cargarRegistros($consulta);
                break;
            case "ordenarApellidosAsc":
                $consulta = $conexion->query("SELECT * FROM Persona ORDER BY apellidos ASC, nombre ASC");
                cargarRegistros($consulta);
                break;
            case "ordenarApellidosDesc":
                $consulta = $conexion->query("SELECT * FROM Persona ORDER BY apellidos DESC, nombre DESC");
                cargarRegistros($consulta);
                break;
            default:
                if (isset($_POST["campo"])) {
                    dejuijrij
                } else {
                    header("Refresh: 5; url=modificar.php");
                    exit("<p style='color: red'>No se ha seleccionado ningún registro</p>");
                }
        }
    } else {
        $consulta = $conexion->query("SELECT * FROM Persona ORDER BY apellidos ASC, nombre ASC");
        cargarRegistros($consulta);
    }
} else {
    header("Refresh: 5, url=login.php");
    exit("<h1>No estás registrado. Accediendo a iniciar sesión...</h1>");
}

function cargarRegistros($consulta)
{
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Borrar</title>
        <style>
            input[name*="ordenar"] {
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
            <p>Indique el registro que quiere modificar:</p>
            <form action="modificar.php" method="post">
                <table>
                    <tr>
                        <th>Modificar</th>
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
                        <td><input type='radio' name='campo' value='" . $fila["id"] . "'></td>
                        <td>" . $fila["nombre"] . "</td>
                        <td>" . $fila["apellidos"] . "</td>
                        </tr>";
                    }
                    ?>
                </table>
                <input type="hidden" name="enviar">
                <br />
                <input type="submit" value="Modificar registro" name="modificar">
                <input type="reset" value="Reiniciar formulario">
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
}