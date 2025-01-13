<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <form action="Ejercicio 1.php" method="post">
        <fieldset>
            <legend>Datos de usuario</legend>
            <label for="login">Login:
                <input type="text" name="login" id="login">
            </label>
            <label for="password">Password:
                <input type="password" name="password" id="password">
            </label>
            <br />
            <input type="submit" value="Enviar consulta" name="enviar">
        </fieldset>
    </form>
</body>

</html>

<?php
class Usuario
{
    protected $login, $password;
    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    public function __destruct()
    {
        echo "<p>He destruido el usuario '" . $this->__get("login") . "' y me voy</p>";
    }
    public function __set($propiedad, $valor)
    {
        if (property_exists("Usuario", $propiedad)) {
            $this->$propiedad = $valor;
        } else {
            echo $propiedad . " no existe";
        }

    }
    public function __get($propiedad)
    {
        if (property_exists("Usuario", $propiedad)) {
            return $this->$propiedad;
        } else {
            return null;
        }
    }
}

if (isset($_POST["enviar"])) {
    $usuario = new Usuario($_POST["login"], $_POST["password"]);
    echo "<p>El login del usuario 1 es: " . $usuario->__get("login") . "</p>";
    echo "<p>El password del usuario 1 es: " . $usuario->__get("password") . "</p>";
}
?>