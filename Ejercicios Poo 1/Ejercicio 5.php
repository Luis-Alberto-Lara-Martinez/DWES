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
            <legend>Datos De Estilo Para El Texto</legend>
            <label for="titulo">Título:
                <input type="text" name="titulo" id="titulo">
            </label>
            <br /><br />
            <label for="posicion">Posición:
                <input type="text" name="posicion" id="posicion">
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
    public $titulo, $posicion;
    public function imprimirTexto()
    {
        echo '<h1 style="text-align: ' . $this->posicion . '">' . $this->titulo . '</h1>';
    }
    public function set($titulo, $posicion)
    {
        $this->titulo = $titulo;
        $this->posicion = $posicion;
    }
}

if (isset($_POST["enviar"])) {
    $texto = new cabeceraPagina;
    $texto->set($_POST["titulo"], $_POST["posicion"]);
    $texto->imprimirTexto();
}
?>