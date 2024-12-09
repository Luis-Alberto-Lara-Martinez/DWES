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
        } elseif (isset($_POST["ordenarApellidosDesc"])) {
            $consulta = $conexion->query("SELECT * FROM Persona ORDER BY apellidos DESC, nombre DESC");
        } else {
            if (isset($_POST["campo"])) {
                ?>
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Modificar</title>
                </head>

                <body>
                    <a href="inicio.php">Volver a la página principal</a>
                    <br /><br />
                    <a href="modificar.php">Cambiar otro registro</a>
                    <p>Modifique los datos que desee </p>
                    <form action="modificar.php" method="post">
                        <?php
                        $consulta = $conexion->query("SELECT * FROM Persona WHERE id=" . $_POST["campo"]);
                        foreach ($consulta as $fila) {
                            echo "<label for='nombre'>Nombre:</label>
                                    <input type='text' name='nombre' id='nombre' value='" . $fila["nombre"] . "'>
                                    <br /><br />
                                    <label for='apellidos'>Apellidos:</label>
                                    <input type='text' name='apellidos' id='apellidos' value='" . $fila["apellidos"] . "'>
                                    <br /><br />
                                    <input type='hidden' name='id' value='" . $fila["id"] . "'>";
                        }
                        ?>
                        <input type="submit" name="cambioRegistro" value="Actualizar">
                        <input type="reset" value="Reiniciar formulario">
                    </form>
                </body>

                </html>
                <?php
                exit;
            } else {
                header("Refresh: 5; url=modificar.php");
                exit("<p style='color: red'>No se ha seleccionado ningún registro</p>");
            }
        }
        cargarRegistros($consulta);
    } elseif (isset($_POST["cambioRegistro"])) {
        $consulta = $conexion->prepare("UPDATE Persona SET nombre = :nombre, apellidos = :apellidos WHERE id = :id");
        $consulta->bindParam(":nombre", $_POST["nombre"]);
        $consulta->bindParam(":apellidos", $_POST["apellidos"]);
        $consulta->bindParam(":id", $_POST["id"]);
        if ($consulta->execute()) {
            echo "<a href='inicio.php'>Volver a la página principal</a>
                <br /><br />
                <a href='modificar.php'>Cambiar otro registro</a>
                <p>Registro actualizado correctamente</p>";
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
        <title>Modificar</title>
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