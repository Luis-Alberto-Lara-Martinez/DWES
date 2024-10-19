<?php

if (isset($_POST["enviar"])) {
    if (isset($_POST["sexo"])) {
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ejercicio 2</title>
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
            <h1>DATOS PERSONALES 3 (RESULTADO)</h1>
            <p>Es un<?php if ($_POST["sexo"] == "hombre") {
                echo " <b>" . $_POST["sexo"] . "</b>";
            } else {
                echo "a <b>" . $_POST["sexo"] . "</b>";
            } ?></p>
            <a href="Ejercicio 2.php">Volver al formulario</a>
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
            <title>Ejercicio 2</title>
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
            <h1>DATOS PERSONALES 3 (RESULTADO)</h1>
            <p class="no">No ha indicado ningún sexo</p>
            <a href="Ejercicio 2.php">Volver al formulario</a>
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
        <title>Ejercicio 2</title>
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
        <h1>DATOS PERSONALES 3 (FORMULARIO)</h1>
        <form action="Ejercicio 2.php" method="post">
            <p>Indique su sexo:</p>
            <label><b>Sexo:</b></label>
            <label for="hombre">
                <input type="radio" name="sexo" id="hombre" value="hombre">
                Hombre
            </label>
            <label for="mujer">
                <input type="radio" name="sexo" id="mujer" value="mujer">
                Mujer
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