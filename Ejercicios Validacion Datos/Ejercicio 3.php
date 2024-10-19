<?php
if (isset($_POST["enviar"])) {
    if (count($_POST) > 1) {
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ejercicio 3</title>
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
            <h1>DATOS PERSONALES 4 (RESULTADO)</h1>
            <?php
            if (isset($_POST["cine"])) {
                echo "<p>Le gusta: <b>el " . $_POST["cine"] . "</b></p>";
            }
            if (isset($_POST["literatura"])) {
                echo "<p>Le gusta: <b>la " . $_POST["literatura"] . "</b></p>";
            }
            if (isset($_POST["musica"])) {
                echo "<p>Le gusta: <b>la " . $_POST["musica"] . "</b></p>";
            }
            ?>
            <a href="Ejercicio 3.php">Volver al formulario</a>
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
            <title>Ejercicio 3</title>
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

                .no {
                    color: red;
                }
            </style>
        </head>

        <body>
            <h1>DATOS PERSONALES 4 (RESULTADO)</h1>
            <p class="no">No tiene niguna afición</p>
            <a href="Ejercicio 3.php">Volver al formulario</a>
            <br /><br />
            <hr />
            <p>Última modificación de esta página: 6 de octubre de 2016</p>
            <p>Este programa forma parte del Módulo Desarrollo Web en Entorno Servidor"</p>
            <p><b><em>Programación web en PHP</em></b></p>
        </body>

        </html>
        <?php
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
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

            fieldset {
                border: 2px solid #8686FF;
                background-color: #E6E6FF;
            }

            legend {
                border: 2px solid #8686FF;
                background-color: white;
            }
        </style>
    </head>

    <body>
        <h1>DATOS PERSONALES 4 (FORMULARIO)</h1>
        <form action="Ejercicio 3.php" method="post">
            <fieldset>
                <legend>Formulario</legend>
                <p>Indique sus aficiones:</p>
                <label><b>Aficiones:</b></label>
                <label for="cine">
                    <input type="checkbox" name="cine" id="cine" value="cine">
                    Cine
                </label>
                <label for="literatura">
                    <input type="checkbox" name="literatura" id="literatura" value="literatura">
                    Literatura
                </label>
                <label for="musica">
                    <input type="checkbox" name="musica" id="musica" value="música">
                    Música
                </label>
                <br /><br />
                <input type="submit" value="Enviar" name="enviar">
                <input type="reset" value="Borrar">
            </fieldset>
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