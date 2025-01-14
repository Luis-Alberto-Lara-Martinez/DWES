<?php
class Vehiculo
{
    protected $marca, $modelo, $color, $propietario, $planta;
    public function __construct($marca, $modelo, $color, $propietario, $planta)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->propietario = $propietario;
        $this->planta = $planta;
    }
    public function puedeAparcar()
    {
        return "Nadie puede aparcar";
    }
}
class Autobus extends Vehiculo
{
    protected $nombreEmpresa;
    public function __construct($marca, $modelo, $color, $propietario, $planta, $nombreEmpresa)
    {
        parent::__construct($marca, $modelo, $color, $propietario, $planta);
        $this->nombreEmpresa = $nombreEmpresa;
    }
    public function puedeAparcar()
    {
        if ($this->planta == 0) {
            return "<b>Sí</b>";
        } else {
            return "<b>No</b>";
        }
    }
    public function __get($propiedad)
    {
        if (property_exists("Autobus", $propiedad)) {
            return $this->$propiedad;
        } else {
            return null;
        }
    }
}
class Furgoneta extends Vehiculo
{
    protected $altura;
    public function __construct($marca, $modelo, $color, $propietario, $planta, $altura)
    {
        parent::__construct($marca, $modelo, $color, $propietario, $planta);
        $this->altura = $altura;
    }
    public function puedeAparcar()
    {
        if ($this->planta == -2) {
            return "<b>No</b>";
        } else {
            return "<b>Sí</b>";
        }
    }
}
class Coche extends Vehiculo
{
    public function puedeAparcar()
    {
        if ($this->planta < 0) {
            return "<b>Sí</b>";
        } else {
            return "<b>No</b>";
        }
    }
}

$coche = new Coche("Toyota", "Corolla", "Rojo", "Juan", 0);
echo "<p>¿Puedo aparcar el coche en la superficie? " . $coche->puedeAparcar() . "</p>";

$coche = new Coche("Toyota", "Corolla", "Rojo", "Juan", -2);
echo "<p>¿Puedo aparcar el coche en el subterráneo 2? " . $coche->puedeAparcar() . "</p>";

$furgoneta = new Furgoneta("Ford", "Transit", "Blanco", "Pedro", 0, 2.5);
echo "<p>¿Puedo aparcar la furgoneta en la superficie? " . $furgoneta->puedeAparcar() . "</p>";

$furgoneta = new Furgoneta("Ford", "Transit", "Blanco", "Pedro", -2, 2.5);
echo "<p>¿Puedo aparcar la furgoneta en el subterráneo 2? " . $furgoneta->puedeAparcar() . "</p>";

$autobus = new Autobus("Mercedes", "Sprinter", "Azul", "Empresa X", 0, "Desfufor");
echo "<p>¿Puedo aparcar el autobús en la superficie? " . $autobus->puedeAparcar() . "</p>";

$autobus = new Autobus("Mercedes", "Sprinter", "Azul", "Empresa X", -1, "Desfufor");
echo "<p>¿Puedo aparcar el autobús el subterráneo 1? " . $autobus->puedeAparcar() . "</p>";

echo "<p>¿A qué empresa pertenece el autobús? <b>" . $autobus->__get("nombreEmpresa") . "</b></p>";
?>