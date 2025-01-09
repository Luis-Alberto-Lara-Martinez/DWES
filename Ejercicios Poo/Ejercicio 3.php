<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <form action="Ejercicio 3.php" method="post">
        <fieldset>
            <legend>Datos</legend>
            <label for="dia">Día
                <input type="number" name="dia" id="dia">
            </label>
            <label for="mes">Mes
                <input type="number" name="mes" id="mes">
            </label>
            <label for="year">Año
                <input type="number" name="year" id="year">
            </label>
            <br /><br />
            <input type="submit" value="Enviar consulta" name="enviar">
            <input type="reset" value="Borrar">
        </fieldset>
    </form>
</body>

</html>

<?php
class Fecha
{
    public $dia, $mes, $year;
    public function verFecha()
    {
        echo "La fecha es " . $this->dia . " / " . $this->mes . " / " . $this->year;
    }
    public function crearFecha($dia, $mes, $year)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->year = $year;
    }
}

if (isset($_POST["enviar"])) {
    $fecha = new Fecha;
    $fecha->crearFecha($_POST["dia"], $_POST["mes"], $_POST["year"]);
    $fecha->verFecha();
}
?>