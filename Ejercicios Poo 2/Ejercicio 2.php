<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <form action="Ejercicio 2.php" method="post">
        <fieldset>
            <legend>Datos de usuario</legend>
            <label for="nombre">Nombre:
                <input type="text" name="nombre" id="nombre">
            </label>
            <label for="edad">Edad:
                <input type="number" name="edad" id="edad">
            </label>
            <label for="altura">Altura:
                <input type="number" name="altura" id="altura">
            </label>
            <br />
            <input type="submit" value="Enviar consulta" name="enviar">
        </fieldset>
    </form>
</body>

</html>

<?php
class Persona
{
    private $nombre, $edad, $altura;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function __set($propiedad, $valor)
    {
        if (property_exists("Persona", $propiedad)) {
            $this->$propiedad = $valor;
        } else {
            echo "<p>" . $propiedad . " no existe</p>";
        }
    }
    public function __get($propiedad)
    {
        if (property_exists("Persona", $propiedad)) {
            return $this->$propiedad;
        } else {
            return null;
        }
    }
}

if (isset($_POST["enviar"])) {
    $usuario = new Persona($_POST["nombre"]);
    $usuario->__set("edad", $_POST["edad"]);
    $usuario->__set("altura", $_POST["altura"]);
    echo "<p>Mi nombre es " . $usuario->__get("nombre") . "</p>";
    echo "<p>Tengo " . $usuario->__get("edad") . " años</p>";
    echo "<p>y mido " . $usuario->__get("altura") . " cm</p>";
}
?>