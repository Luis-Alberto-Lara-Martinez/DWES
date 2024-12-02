<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Autenticación</h1>
    <form action="inicio.php" method="post">
        <label for="usario">Usuario:
            <input type="text" name="usuario" id="usuario">
        </label>
        <br />
        <br />
        <label for="contrasena">Contraseña
            <input type="password" name="contrasena" id="contrasena">
        </label>
        <?php
        include("funcionesConexion.php");
        $conexion = crearBD("Ciudadanos");
        $conexion->query("CREATE TABLE Usuario (
            nombre VARCHAR(50) PRIMARY KEY,
            contrasena VARCHAR(50)
        );");
        $conexion->query("INSERT INTO Usuario VALUES ('root', '1234');");
        $resultado = $conexion->query("SELECT * FROM Usuario;");
        $existeUsuario = false;
        foreach ($resultado as $fila) {
            ijofewjiorwijor
        }
        ?>
        <br />
        <br />
        <input type="submit" value="Iniciar Sesión" name="enviar">
    </form>
</body>

</html>