<?php
class Menu
{
    public $google, $yahoo, $msn;
    public function imprimirVertical()
    {
        echo '<a href="' . $this->google . '">Google</a>
            <br />
            <a href="' . $this->yahoo . '">Yahoo</a>
            <br />
            <a href="' . $this->msn . '">MSN</a>';
    }
    public function imprimirHorizontal()
    {
        echo '<a href="' . $this->google . '">Google</a> - <a href="' . $this->yahoo . '">Yahoo</a> - <a href="' . $this->msn . '">MSN</a>';
    }
}

if (isset($_POST["enviar"])) {
    $menu = new Menu;
    if (isset($_POST["vertical"])) {
        $menu->imprimirVertical();
    } else {
        $menu->imprimirHorizontal();
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
    </head>

    <body>
        <form action="Ejercicio 4.php" method="post">
            <input type="submit" value="Menú Horizontal" name="horizontal">
            <input type="submit" value="Menú Vertical" name="vertical">
            <input type="hidden" name="enviar">
        </form>
    </body>

    </html>
    <?php
}
?>