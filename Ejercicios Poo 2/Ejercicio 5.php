<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <form action="Ejercicio 5.php" method="post">
        <fieldset>
            <legend>Datos del viaje</legend>
            <label for="planeta">Planeta:
                <input type="text" name="planeta" id="planeta">
            </label>
            <label for="vehiculo">Vehículo:
                <input type="text" name="vehiculo" id="vehiculo">
            </label>
            <br />
            <input type="submit" value="Enviar consulta" name="enviar">
        </fieldset>
    </form>
</body>

</html>

<?php
class Planeta
{
    private $nombre, $distancia;
    public function __construct($nombre, $distancia)
    {
        $this->nombre = $nombre;
        $this->distancia = $distancia;
    }
    public function __get($propiedad)
    {
        if (property_exists("Planeta", $propiedad)) {
            return $this->$propiedad;
        } else {
            return null;
        }
    }
}

class Vehiculo
{
    private $nombre, $velocidad;
    public function __construct($nombre, $velocidad)
    {
        $this->nombre = $nombre;
        $this->velocidad = $velocidad;
    }
    public function __get($propiedad)
    {
        if (property_exists("Vehiculo", $propiedad)) {
            return $this->$propiedad;
        } else {
            return null;
        }
    }
}
class Relacion
{
    private $planeta, $vehiculo, $tiempoLlegada;
    public function __construct($planeta, $vehiculo, $tiempoLlegada)
    {
        $this->planeta = $planeta;
        $this->vehiculo = $vehiculo;
        $this->tiempoLlegada = $tiempoLlegada;
    }
    public function __get($propiedad)
    {
        if (property_exists("Relacion", $propiedad)) {
            return $this->$propiedad;
        } else {
            return null;
        }
    }
}

if (isset($_POST["enviar"])) {
    switch ($_POST["planeta"]) {
        case "Venus":
            $planeta = new Planeta("Venus", 108200000);
            break;
        case "Saturno":
            $planeta = new Planeta("Saturno", 1429400000);
            break;
        case "Urano":
            $planeta = new Planeta("Urano", 2870990000);
            break;
        case "Neptuno":
            $planeta = new Planeta("Neptuno", 4504300000);
            break;
        case "Plutón":
            $planeta = new Planeta("Plutón", 5913520000);
            break;
        default:
            exit("<p style='color: red'>Planeta no existente</p>");
    }
    switch ($_POST["vehiculo"]) {
        case "Monopatín":
            $vehiculo = new Vehiculo("Monopatín", 2);
            break;
        case "Bicicleta":
            $vehiculo = new Vehiculo("Bicicleta", 20);
            break;
        case "Dirigible":
            $vehiculo = new Vehiculo("Dirigible", 16);
            break;
        case "Submarino":
            $vehiculo = new Vehiculo("Submarino", 98);
            break;
        default:
            exit("<p style='color: red'>Vehículo no existente</p>");
    }
    $tiempoLlegada = $planeta->__get("distancia") / $vehiculo->__get("velocidad") / 24;
    $relacion = new Relacion($planeta, $vehiculo, $tiempoLlegada);
    echo "<p>El planeta es " . ($relacion->__get("planeta"))->__get("nombre") . "</p>";
    echo "<p>El vehículo es " . ($relacion->__get("vehiculo"))->__get("nombre") . "</p>";
    echo "<p>Por lo tanto, vas a tardar " . $relacion->__get("tiempoLlegada") . " días</p>";
}
?>