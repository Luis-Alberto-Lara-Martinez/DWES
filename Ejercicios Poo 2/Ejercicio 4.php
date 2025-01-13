<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <form action="Ejercicio 4.php" method="post">
        <fieldset>
            <legend>Datos de los coches</legend>
            <label for="coche1">Velocidad del coche 1 (km/h):
                <input type="number" name="coche1" id="coche1">
            </label>
            <label for="coche2">Velocidad del coche 2 (km/h):
                <input type="number" name="coche2" id="coche2">
            </label>
            <br />
            <input type="submit" value="Enviar consulta" name="enviar">
        </fieldset>
    </form>
</body>

</html>

<?php
class Coche
{
    private $velocidad;

    public function __construct($velocidad)
    {
        $this->velocidad = $velocidad;
    }
    public function __get($propiedad)
    {
        if (property_exists("Coche", $propiedad)) {
            return $this->$propiedad;
        } else {
            return null;
        }
    }
}

if (isset($_POST["enviar"])) {
    $coche1 = new Coche($_POST["coche1"]);
    $coche2 = new Coche($_POST["coche2"]);
    if ($coche1->__get("velocidad") > $coche2->__get("velocidad")) {
        echo "<p>Ganará el coche 1</p>";
    } elseif ($coche1->__get("velocidad") < $coche2->__get("velocidad")) {
        echo "<p>Ganará el coche 2</p>";
    } else {
        echo "<p>Empate</p>";
    }
}
?>