<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <form action="Ejercicio 6.php" method="post">
        <fieldset>
            <legend>Datos De Estilo Para El Texto</legend>
            <label for="titulo">Título:
                <input type="text" name="titulo" id="titulo">
            </label>
            <br /><br />
            <label for="posicion">Posición:
                <input type="text" name="posicion" id="posicion">
            </label>
            <br /><br />
            <label for="colorLetra">Color Letra:
                <input type="text" name="colorLetra" id="colorLetra">
            </label>
            <br /><br />
            <label for="colorFondo">Color Fondo:
                <input type="text" name="colorFondo" id="colorFondo">
            </label>
            <br /><br />
            <input type="submit" value="Enviar consulta" name="enviar">
            <input type="reset" value="Borrar">
        </fieldset>
    </form>
</body>

</html>

<?php
class cabeceraPagina
{
    public $titulo, $posicion, $colorLetra, $colorFondo;
    public function imprimirTexto()
    {
        echo '<h1 style="text-align: ' . $this->posicion . ';
            background-color: ' . $this->colorFondo . ';
            color: ' . $this->colorLetra . '">' . $this->titulo . '</h1>';
    }
    public function set($titulo, $posicion, $colorLetra, $colorFondo)
    {
        $this->titulo = $titulo;
        $this->posicion = $posicion;
        $this->colorLetra = $colorLetra;
        $this->colorFondo = $colorFondo;
    }
}

if (isset($_POST["enviar"])) {
    $texto = new cabeceraPagina;
    $texto->set($_POST["titulo"], $_POST["posicion"], $_POST["colorLetra"], $_POST["colorFondo"]);
    $texto->imprimirTexto();
}
?>