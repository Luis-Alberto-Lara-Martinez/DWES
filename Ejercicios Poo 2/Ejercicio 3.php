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
            <legend>Datos de la clase Tabla</legend>
            <label for="filas">Filas:
                <input type="number" name="filas" id="filas">
            </label>
            <label for="columnas">Columnas:
                <input type="number" name="columnas" id="columnas">
            </label>
            <label for="valorFijo">Valor fijo:
                <input type="text" name="valorFijo" id="valorFijo">
            </label>
            <br />
            <input type="submit" value="Enviar consulta" name="enviar">
        </fieldset>
    </form>
</body>

</html>

<?php
class Tabla
{
    private $filas, $columnas, $valorFijo;
    public function __construct($filas, $columnas)
    {
        $this->filas = $filas;
        $this->columnas = $columnas;
    }
    public function __set($propiedad, $valor)
    {
        if (property_exists("Tabla", $propiedad)) {
            $this->$propiedad = $valor;
        } else {
            echo "<p>La propiedad '" . $propiedad . "' no existe</p>";
        }
    }
    public function __get($propiedad)
    {
        if (property_exists("Tabla", $propiedad)) {
            return $this->$propiedad;
        } else {
            return null;
        }
    }
}

if (isset($_POST["enviar"])) {
    $tabla = new Tabla($_POST["filas"], $_POST["columnas"]);
    $tabla->__set("valorFijo", $_POST["valorFijo"]);
    echo "<table style='border: 1px solid black'>";
    for ($i = 0; $i < $tabla->__get("filas"); $i++) {
        echo "<tr>";
        for ($j = 0; $j < $tabla->__get("columnas"); $j++) {
            echo "<td style='border: 1px solid black'>" . $tabla->__get("valorFijo") . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>