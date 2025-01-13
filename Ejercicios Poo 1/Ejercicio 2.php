<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <form action="Ejercicio 2.php" method="post">
        <fieldset>
            <legend>Datos personales</legend>
            <label for="nombre">Nombre:
                <input type="text" name="nombre" id="nombre">
            </label>
            <br /><br />
            <label for="sueldo">Sueldo:
                <input type="number" name="sueldo" id="sueldo">
            </label>
            <br /><br />
            <input type="submit" value="Enviar consulta" name="enviar">
            <input type="reset" value="Borrar">
        </fieldset>
    </form>
</body>

</html>
<?php
class Empleado
{
    public $nombre;
    public $sueldo;
    public function imprimirDatos()
    {
        if ($this->sueldo > 3000) {
            echo "El empleado " . $this->nombre . " paga impuestos";
        } else {
            echo "El empleado " . $this->nombre . " no paga impuestos";
        }
    }
    public function setDatos($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
}

if (isset($_POST["enviar"])) {
    $persona = new Empleado;
    $persona->setDatos($_POST["nombre"], $_POST["sueldo"]);
    $persona->imprimirDatos();
}
?>