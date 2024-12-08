<?php
include("funciones.php");
session_start();

if (isset($_SESSION["registrado"])) {
    $conexion = conectarBD("Agenda", "root", "");
    if (isset($_POST["buscar"])) {
        $nombre = sanearDato($_POST["nombre"]);
        $apellidos = sanearDato($_POST["apellidos"]);
        $query = "SELECT * FROM Persona";
        $condiciones = [];

        if ($nombre != "") {
            $condiciones[] = "nombre='" . $nombre . "'";
        }
        if ($apellidos != "") {
            $condiciones[] = "apellidos='" . $apellidos . "'";
        }
        if (count($condiciones) > 0) {
            $query .= " WHERE " . implode(' AND ', $condiciones);
        }

        $consulta = $conexion->query($query);
        cargarRegistros($consulta, $query);
    } else {
        if (isset($_POST["enviar"])) {
            $queryBase = preg_replace("/ORDER BY .*/", "", $_POST["query"]);

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
                    $query = $queryBase . " ORDER BY nombre ASC, apellidos ASC";
                    break;
                case "ordenarNombreDesc":
                    $query = $queryBase . " ORDER BY nombre DESC, apellidos DESC";
                    break;
                case "ordenarApellidosAsc":
                    $query = $queryBase . " ORDER BY apellidos ASC, nombre ASC";
                    break;
                default:
                    $query = $queryBase . " ORDER BY apellidos DESC, nombre DESC";
                    break;
            }

            $consulta = $conexion->query($query);
            cargarRegistros($consulta, $query);
        } else {
            ?>
            <!DOCTYPE html>
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Buscar</title>
            </head>

            <body>
                <a href="inicio.php">Volver a la página principal</a>
                <form action="buscar.php" method="post">
                    <p>Escriba el criterio de búsqueda (caracteres o números):</p>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                    <br /><br />
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos">
                    <br /><br />
                    <input type="submit" name="buscar" value="Buscar">
                    <input type="reset" value="Reiniciar formulario">
                </form>
            </body>

            </html>
            <?php
        }
    }
} else {
    header("Refresh: 5; url=login.php");
    exit("<h1>No estás registrado. Accediendo a iniciar sesión...</h1>");
}

function cargarRegistros($consulta, $query)
{
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultados de la búsqueda</title>
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
        <br /><br />
        <a href="buscar.php">Realizar otra búsqueda</a>
        <?php
        if ($consulta->rowCount() > 0) {
            ?>
            <p>Registros encontrados:</p>
            <form action="buscar.php" method="post">
                <table>
                    <tr>
                        <th>
                            <input type="submit" name="ordenarNombreAsc" value="↑">
                            Nombre
                            <input type="submit" name="ordenarNombreDesc" value="↓">
                        </th>
                        <th>
                            <input type="submit" name="ordenarApellidosAsc" value="↑">
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
                <input type="hidden" name="query" value="<?php echo $query ?>">
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
}

function sanearDato($valor)
{
    return htmlspecialchars(strip_tags(trim($valor)), ENT_QUOTES, "utf-8");
}