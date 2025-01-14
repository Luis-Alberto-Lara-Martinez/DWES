<?php
class Operacion
{
    protected $valor1, $valor2, $resultado;
    public function cargar1($valor1)
    {
        $this->valor1 = $valor1;
    }
    public function cargar2($valor2)
    {
        $this->valor2 = $valor2;
    }
    public function mostrarResultado()
    {
        echo "<p>El resultado es " . $this->resultado . "</p>";
    }
}

class Suma extends Operacion
{
    public function sumarValores()
    {
        $this->resultado = $this->valor1 + $this->valor2;
    }
}
class Resta extends Operacion
{
    public function restarValores()
    {
        $this->resultado = $this->valor1 - $this->valor2;
    }
}

$suma = new Suma;
$suma->cargar1(10);
$suma->cargar2(3);
$suma->sumarValores();
$suma->mostrarResultado();

$resta = new Resta;
$resta->cargar1(10);
$resta->cargar2(3);
$resta->restarValores();
$resta->mostrarResultado();
?>