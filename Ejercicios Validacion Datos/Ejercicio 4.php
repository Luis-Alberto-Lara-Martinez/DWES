<?php
if (isset($_POST["enviar"])) {
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
        <style>
            body {
                background-color: <?php echo $_POST["fondo"]?>;
                color: <?php echo $_POST["letra"]?>;
            }

            h1 {
                text-align: right;
            }

            hr {
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <h1>COLORES 3 (RESULTADO)</h1>
        <p>Se han cambiado los colores elegidos.</p>
        <a href="Ejercicio 4.php">Volver al formulario</a>
        <br /><br />
        <hr />
        <p>Última modificación de esta página: 6 de octubre de 2016</p>
        <p>Este programa forma parte del Módulo Desarrollo Web en Entorno Servidor"</p>
        <p><b><em>Programación web en PHP</em></b></p>
    </body>

    </html>
    <?php
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
        <style>
            body {
                background-color: rgb(173, 216, 230);
            }

            h1 {
                text-align: right;
            }

            hr {
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <h1>COLORES 3 (FORMULARIO)</h1>
        <form action="Ejercicio 4.php" method="post">
            <p>Elija los colores a cambiar:</p>
            <label for="fondo">Color de fondo de la página:
                <input type="color" name="fondo" id="fondo">
            </label>
            <br />
            <label for="letra">Color de la letra de la página:
                <input type="color" name="letra" id="letra">
            </label>
            <br /><br />
            <input type="submit" value="Enviar" name="enviar">
            <input type="reset" value="Borrar">
        </form>
        <br /><br />
        <hr />
        <p>Última modificación de esta página: 6 de octubre de 2016</p>
        <p>Este programa forma parte del Módulo Desarrollo Web en Entorno Servidor"</p>
        <p><b><em>Programación web en PHP</em></b></p>
    </body>

    </html>
    <?php
}
?>