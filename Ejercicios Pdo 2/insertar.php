<?php
include("funciones.php");
session_start();

if (isset($_SESSION["registrado"])) {
    if (isset($_POST["enviar"])) {
        $nombre = sanearDato($_POST["nombre"]);
        $apellidos = sanearDato($_POST["apellidos"]);
        if ($nombre == "" && $apellidos == "") {
            header("Refresh: 5; url=insertar.php");
            exit("<p style='color: red'>Hay que rellenar al menos uno de los campos</p>
                <p style='color: red'>No se ha insertado el registro</p>");
        } else {
            $existePersona = false;
            $conexion = conectarBD("Agenda", "root", "");
            $consulta = $conexion->query("SELECT * FROM Persona");
            foreach ($consulta as $fila) {
                if ($fila["nombre"] == $nombre && $fila["apellidos"] == $apellidos) {
                    $existePersona = true;
                }
            }
            if ($existePersona) {
                header("Refresh: 5; url=insertar.php");
                exit("<p style='color: red'>El registro ya existe</p>");
            } else {
                $insercion = $conexion->prepare("INSERT INTO Persona (nombre, apellidos) VALUES (:nombre, :apellidos)");
                $insercion->bindParam(":nombre", $nombre);
                $insercion->bindParam(":apellidos", $apellidos);
                if ($insercion->execute()) {
                    header("Refresh: 5; url=insertar.php");
                    exit("<p>Registro <b>" . $nombre . " " . $apellidos . "</b> creado correctamente</p>");
                } else {
                    header("Refresh: 5; url=insertar.php");
                    exit("<p>Error, no se ha podido registar correctamente</p>");
                }
            }
        }
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Insertar</title>
        </head>

        <body>
            <a href="inicio.php">Volver a la página principal</a>
            <form action="insertar.php" method="post">
                <p>Escriba los datos del nuevo registro</p>
                <label for="nombre">Nombre
                    <input type="text" name="nombre" id="nombre">
                </label>
                <br /><br />
                <label for="apellidos">Apellidos
                    <input type="text" name="apellidos" id="apellidos">
                </label>
                <br /><br />
                <input type="submit" value="Añadir" name="enviar">
                <input type="reset" value="Reiniciar formulario">
            </form>
        </body>

        </html>
        <?php
    }
} else {
    header("Refresh: 5, url=login.php");
    exit("<h1>No estás registrado. Accediendo a iniciar sesión...</h1>");
}

function sanearDato($valor)
{
    return htmlspecialchars(strip_tags(trim($valor)), ENT_QUOTES, "utf-8");
}
?>