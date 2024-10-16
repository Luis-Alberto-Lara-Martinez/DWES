<?php
if (isset($_POST["enviar"])) {
    if ($_POST["nombre"] != "") {
        if ($_POST["apellidos"] != "") {
            ?>
            <!DOCTYPE html>
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Ejercicio 1</title>
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
                <h1>DATOS PERSONALES 2 (RESULTADO)</h1>
                <p>Su nombre es <b><?php echo $_POST["nombre"]; ?></b></p>
                <p>Sus apellidos son <b><?php echo $_POST["apellidos"]; ?></b></p>
                <a href="Ejercicio 1.php">Volver al formulario</a>
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
                <title>Ejercicio 1</title>
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
                <h1>DATOS PERSONALES 2 (RESULTADO)</h1>
                <p class="no">No ha escrito los apellidos</p>
                <a href="Ejercicio 1.php">Volver al formulario</a>
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
            <title>Ejercicio 1</title>
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
            <h1>DATOS PERSONALES 2 (RESULTADO)</h1>
            <p class="no">No ha escrito el nombre</p>
            <a href="Ejercicio 1.php">Volver al formulario</a>
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
        <title>Ejercicio 1</title>
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
        <h1>DATOS PERSONALES 2 (FORMULARIO)</h1>
        <form action="Ejercicio 1.php" method="post">
            <label for="nombre">Escriba su nombre:
                <input type="text" name="nombre" id="nombre">
            </label>
            <br /><br />
            <label for="apellidos">Escriba sus apellidos:
                <input type="text" name="apellidos" id="apellidos">
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