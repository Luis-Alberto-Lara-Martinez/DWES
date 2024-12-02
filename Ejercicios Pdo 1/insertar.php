<?php
session_start();
if (isset($_SESSION["usuario"])) {
    include("funcionesConexion.php");
    if (isset($_POST["enviar"])) {
        $nombre = sanearValidarDato($_POST["nombre"]);
        $apellidos = sanearValidarDato($_POST["apellidos"]);
        $errorNombre = "";
        $errorApellidos = "";

        if (!$nombre) {
            $errorNombre = "Nombre inválido";
        }
        if (!$apellidos) {
            $errorApellidos = "Apellidos inválidos";
        }

        if ($nombre == "" || $apellidos == "") {
            cargarFormulario($errorNombre, $errorApellidos);
        } else {
            $existeRegistro = false;
            $conexion = usarConexion();
            $conexion->query("USE Ciudadanos;");
            $resultado = $conexion->query("SELECT * FROM Agenda;");
            foreach ($resultado as $fila) {
                if ($fila["nombre"] == $nombre && $fila["apellidos"] == $apellidos) {
                    $existeRegistro = true;
                }
            }
            if ($existeRegistro) {
                echo "<a href='index.php'>Volver a la página inicial</a>
                <p>El registro ya existe.</p>";
            } else {
                $ps = $conexion->prepare("INSERT INTO Agenda (nombre, apellidos, direccion, telefono)
                VALUES (:nombre, :apellidos, '', 000000000)");
                $ps->bindParam(":nombre", $nombre);
                $ps->bindParam(":apellidos", $apellidos);
                if ($ps->execute()) {
                    echo "<a href='index.php'>Volver a la página inicial</a>
                    <p>Registro <b>$nombre $apellidos</b> creado correctamente</p>";
                } else {
                    echo "<p>Error en la inserción</p>";
                }
            }

        }
    } else {
        cargarFormulario("", "");
    }
} else {
    header("Refresh: 5; url=login.php");
    exit("<h1>Usuario no encontrado. Redirigiendo...</h1>");
}

function sanearValidarDato($valor)
{
    $valor = htmlspecialchars(strip_tags(trim($valor)), ENT_QUOTES, "utf-8");
    return $valor == "" ? false : $valor;
}

function cargarFormulario($errorNombre, $errorApellidos)
{
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insertar</title>
    </head>

    <body>
        <a href="index.php">Volver a la página principal</a>
        <h1>Insertar nuevo registro</h1>
        <p>Escriba los datos del nuevo registro:</p>
        <form action="insertar.php" method="post">
            <label for="nombre">Nombre:
                <input type="text" name="nombre" id="nombre">
            </label>
            <br />
            <?php
            if ($errorNombre != "") {
                echo "<p style='color: red'>$errorNombre</p>";
            } else {
                echo "<br />";
            }
            ?>
            <label for="apellidos">Apellidos:
                <input type="text" name="apellidos" id="apellidos">
            </label>
            <br />
            <?php
            if ($errorApellidos != "") {
                echo "<p style='color: red'>$errorApellidos</p>";
            } else {
                echo "<br />";
            }
            ?>
            <input type="submit" value="Añadir" name="enviar">
            <input type="reset" value="Reiniciar Formulario">
        </form>
    </body>

    </html>
    <?php
}
?>