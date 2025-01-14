<?php
class Persona
{
    protected $nombre, $edad;
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function __tostring()
    {
        return "<p>Nombre: " . $this->nombre . "</p>
            <p>Edad: " . $this->edad . "</p>";
    }
}
class Empleado extends Persona
{
    protected $sueldo;
    public function __construct($nombre, $edad, $sueldo)
    {
        parent::__construct($nombre, $edad);
        $this->sueldo = $sueldo;
    }
    public function __tostring()
    {
        return parent::__tostring() . " <p>Sueldo: " . $this->sueldo . "</p>";
    }
}

$empleado = new Empleado("Pedro", 21, 2500);
echo $empleado;
?>