<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <form action="Ejercicio 7.php" method="post">
        <fieldset>
            <legend>Datos</legend>
            <label for="nombre">Nombre:
                <input type="text" name="nombre" id="nombre">
            </label>
            <br /><br />
            <label for="apellidos">Apellidos:
                <input type="text" name="apellidos" id="apellidos">
            </label>
            <br /><br />
            <label for="edad">Edad:
                <input type="text" name="edad" id="edad">
            </label>
            <br /><br />
            <input type="submit" value="Enviar" name="enviar">
            <input type="reset" value="borrar">
        </fieldset>
    </form>
</body>

</html>

<?php
class Persona
{
    public $nombre, $apellidos, $edad;
    public function asignar($nombre, $apellidos, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }
    public function mayorEdad()
    {
        if ($this->edad > 18) {
            echo "es mayor de edad";
        } else {
            echo "no es mayor de edad";
        }
    }
    public function nombreCompleto()
    {
        echo $this->nombre . " " . $this->apellidos;
    }
}
if (isset($_POST["enviar"])) {
    $persona = new Persona;
    $persona->asignar($_POST["nombre"], $_POST["apellidos"], $_POST["edad"]);
    $persona->nombreCompleto();
    echo " ";
    $persona->mayorEdad();
}
?>