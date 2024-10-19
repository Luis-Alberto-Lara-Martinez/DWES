<?php
if (isset($_POST["enviar"])) {
    if ($_POST["edad"] != "...") {
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ejercicio 5</title>
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
            <h1>DATOS PERSONALES 5 (RESULTADO)</h1>
            <p>Tiene <?php echo strtolower($_POST["edad"]); ?></p>
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
            <title>Ejercicio 5</title>
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
            <h1>DATOS PERSONALES 5 (RESULTADO)</h1>
            <p>No se ha selecionado ninguna edad</p>
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
        <title>Ejercicio 5</title>
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
        <h1>DATOS PERSONALES 5 (FORMULARIO)</h1>
        <form action="Ejercicio 5.php" method="post">
            <fieldset>
                <legend>Formulario</legend>
                <p>Indique su edad:</p>
                <label><b>Aficiones:</b></label>
                <select name="edad" id="edad">
                    <option value="...">...</option>
                    <option value="Menos de 20 años">Menos de 20 años</option>
                    <option value="Entre 20 y 39 años">Entre 20 y 39 años</option>
                    <option value="Entre 40 y 59 años">Entre 40 y 59 años</option>
                    <option value="60 años o más">60 años o más</option>
                </select>
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