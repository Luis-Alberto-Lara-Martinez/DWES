<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <form action="Ejercicio 1.php" method="post">
        <fieldset>
            <legend>Datos personales</legend>
            <label for="nombre">Nombre:
                <input type="text" name="nombre" id="nombre">
            </label>
            <br /><br />
            <input type="submit" value="Enviar consulta" name="enviar">
            <input type="reset" value="Borrar">
        </fieldset>
    </form>
</body>

</html>
<?php
class Persona
{
    public $nombre;
    public function imprimirNombre()
    {
        echo $this->nombre . " es el nombre que ha sido introducido";
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}

if (isset($_POST["enviar"])) {
    $persona = new Persona;
    $persona->setNombre($_POST["nombre"]);
    $persona->imprimirNombre();
}
?>