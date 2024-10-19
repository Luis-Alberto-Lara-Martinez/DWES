<?php
if (isset($_POST["comprobar"])) {
    if (isset($_POST["enviar"])) {
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ejercicio 7</title>
            <style>
                body {
                    background-color: rgb(173, 216, 230);
                }

                h1 {
                    text-align: right;
                }
            </style>
        </head>

        <body>
            <h1>TU PÁGINA DE SOLICITUD ADMITIDA</h1>
            <h2>Tus Datos Han Sido Registrados...</h2>
        </body>

        </html>
        <?php
    } else {
        if ($_POST["nombre"] != "") {
            if ($_POST["apellidos"] != "") {
                if ($_POST["email"] != "") {
                    if ($_POST["contrasena"] != "") {
                        if (isset($_POST["sexo"])) {
                            if (isset($_POST["estudios"])) {
                                if ($_POST["diasSemana"] != "...") {
                                    ?>
                                    <!DOCTYPE html>
                                    <html lang="es">

                                    <head>
                                        <meta charset="UTF-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>Ejercicio 7</title>
                                        <style>
                                            body {
                                                background-color: rgb(173, 216, 230);
                                            }

                                            h1 {
                                                text-align: right;
                                            }
                                        </style>
                                    </head>

                                    <body>
                                        <h1>TUS DATOS DE SUSCRIPCIÓN:</h1>
                                        <p>Estos son los datos que nos has enviado:</p>
                                        <p>Nombre: <?php echo $_POST["nombre"]; ?></p>
                                        <p>Apellidos: <?php echo $_POST["apellidos"]; ?></p>
                                        <p>Email: <?php echo $_POST["email"]; ?></p>
                                        <p>Contraseña: <?php echo $_POST["contrasena"]; ?></p>
                                        <p>Sexo: <?php echo $_POST["sexo"]; ?></p>
                                        <p>Estudios: <?php echo $_POST["estudios"]; ?></p>
                                        <p>Aficiones: "on" seleccionado, "sin marcar" no seleccionado</p>
                                        <p>Música: <?php if (isset($_POST["musica"])) {
                                            echo $_POST["musica"];
                                        } else {
                                            echo "sin marcar";
                                        }
                                        ?></p>
                                        <p>Deportes: <?php if (isset($_POST["deportes"])) {
                                            echo $_POST["deportes"];
                                        } else {
                                            echo "sin marcar";
                                        }
                                        ?></p>
                                        <p>Cine: <?php if (isset($_POST["cine"])) {
                                            echo $_POST["cine"];
                                        } else {
                                            echo "sin marcar";
                                        }
                                        ?></p>
                                        <p>Libros: <?php if (isset($_POST["libros"])) {
                                            echo $_POST["libros"];
                                        } else {
                                            echo "sin marcar";
                                        }
                                        ?></p>
                                        <p>Ciencia: <?php if (isset($_POST["ciencia"])) {
                                            echo $_POST["ciencia"];
                                        } else {
                                            echo "sin marcar";
                                        }
                                        ?></p>
                                        <br />
                                        <p>Día de la semana: <?php echo $_POST["diasSemana"]; ?></p>
                                        <p>Tu comentario: <?php echo $_POST["comentario"]; ?></p>
                                        <p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos</p>
                                        <span>Los datos son correctos:</span>
                                        <a href="Ejercicio 7.php" onclick="document.getElementById('form').submit(); return false;">Enviar</a>
                                        <br /><br />
                                        <span>Los datos no son correctos:</span>
                                        <a href="Ejercicio 7.php">Volver a escribirlos</a>
                                        <form id="form" action="Ejercicio 7.php" method="post">
                                            <input type="hidden" name="comprobar">
                                            <input type="hidden" name="enviar">
                                        </form>
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
                                        <title>Ejercicio 7</title>
                                        <style>
                                            body {
                                                background-color: rgb(173, 216, 230);
                                            }

                                            h1 {
                                                text-align: right;
                                            }

                                            p {
                                                color: red;
                                            }
                                        </style>
                                    </head>

                                    <body>
                                        <h1>TUS DATOS DE SUSCRIPCIÓN:</h1>
                                        <p>No has seleccionado el día de la semana</p>
                                        <a href="Ejercicio 7.php">Volver a escribirlos</a>
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
                                    <title>Ejercicio 7</title>
                                    <style>
                                        body {
                                            background-color: rgb(173, 216, 230);
                                        }

                                        h1 {
                                            text-align: right;
                                        }

                                        p {
                                            color: red;
                                        }
                                    </style>
                                </head>

                                <body>
                                    <h1>TUS DATOS DE SUSCRIPCIÓN:</h1>
                                    <p>No has seleccionado el nivel de estudios</p>
                                    <a href="Ejercicio 7.php">Volver a escribirlos</a>
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
                                <title>Ejercicio 7</title>
                                <style>
                                    body {
                                        background-color: rgb(173, 216, 230);
                                    }

                                    h1 {
                                        text-align: right;
                                    }

                                    p {
                                        color: red;
                                    }
                                </style>
                            </head>

                            <body>
                                <h1>TUS DATOS DE SUSCRIPCIÓN:</h1>
                                <p>No has seleccionado el sexo</p>
                                <a href="Ejercicio 7.php">Volver a escribirlos</a>
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
                            <title>Ejercicio 7</title>
                            <style>
                                body {
                                    background-color: rgb(173, 216, 230);
                                }

                                h1 {
                                    text-align: right;
                                }

                                p {
                                    color: red;
                                }
                            </style>
                        </head>

                        <body>
                            <h1>TUS DATOS DE SUSCRIPCIÓN:</h1>
                            <p>No has escrito la contraseña</p>
                            <a href="Ejercicio 7.php">Volver a escribirlos</a>
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
                        <title>Ejercicio 7</title>
                        <style>
                            body {
                                background-color: rgb(173, 216, 230);
                            }

                            h1 {
                                text-align: right;
                            }

                            p {
                                color: red;
                            }
                        </style>
                    </head>

                    <body>
                        <h1>TUS DATOS DE SUSCRIPCIÓN:</h1>
                        <p>No has escrito el email</p>
                        <a href="Ejercicio 7.php">Volver a escribirlos</a>
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
                    <title>Ejercicio 7</title>
                    <style>
                        body {
                            background-color: rgb(173, 216, 230);
                        }

                        h1 {
                            text-align: right;
                        }

                        p {
                            color: red;
                        }
                    </style>
                </head>

                <body>
                    <h1>TUS DATOS DE SUSCRIPCIÓN:</h1>
                    <p>No has escrito los apellidos</p>
                    <a href="Ejercicio 7.php">Volver a escribirlos</a>
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
                <title>Ejercicio 7</title>
                <style>
                    body {
                        background-color: rgb(173, 216, 230);
                    }

                    h1 {
                        text-align: right;
                    }

                    p {
                        color: red;
                    }
                </style>
            </head>

            <body>
                <h1>TUS DATOS DE SUSCRIPCIÓN:</h1>
                <p>No has escrito el nombre</p>
                <a href="Ejercicio 7.php">Volver a escribirlos</a>
            </body>

            </html>
            <?php
        }
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 7</title>
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

            .centrado {
                display: flex;
                align-items: center;
            }

            textarea {
                width: 300px;
                height: 100px;
            }
        </style>
    </head>

    <body>
        <h1>SUSCRIPCIÓN ELECTRÓNICA A NUESTRO BOLETÍN</h1>
        <p>Nota: Este formulario de ejemplo en el que los datos aquí escritos se trasladan a otra página.</p>
        <form action="Ejercicio 7.php" method="post">
            <label for="nombre">Nombre:
                <input type="text" name="nombre" id="nombre">
            </label>
            <label for="apellidos">Apellidos:
                <input type="text" name="apellidos" id="apellidos">
            </label>
            <label for="email">E-mail:
                <input type="email" name="email" id="email">
            </label>
            <br /><br />
            <label for="contrasena">Contraseña:
                <input type="password" name="contrasena" id="contrasena">
            </label>
            <br /><br />
            <div class="centrado">
                <div>
                    <span>Sexo</span>
                    <br />
                    <label for="varon">
                        <input type="radio" name="sexo" id="varon" value="varón">
                        Varón
                    </label>
                    <br />
                    <label for="mujer">
                        <input type="radio" name="sexo" id="mujer" value="mujer">
                        Mujer
                    </label>
                </div>
                <div>
                    <span>Nivel de estudios</span>
                    <br />
                    <label for="certificadoEscolar">
                        <input type="radio" name="estudios" id="certificadoEscolar" value="certificadoEscolar">
                        Certificado escolar
                    </label>
                    <br />
                    <label for="eso">
                        <input type="radio" name="estudios" id="eso" value="eso">
                        Graduado en E.S.0
                    </label>
                    <br />
                    <label for="bachilleratoFP">
                        <input type="radio" name="estudios" id="bachilleratoFP" value="bachilleratoFP">
                        Bachiller - Formación Profesional
                    </label>
                    <br />
                    <label for="diplomado">
                        <input type="radio" name="estudios" id="diplomado" value="diplomado">
                        Diplomado
                    </label>
                    <br />
                    <label for="licenciadoDoctorado">
                        <input type="radio" name="estudios" id="licenciadoDoctorado" value="licenciadoDoctorado">
                        Licenciado o Doctorado
                    </label>
                </div>
                <div>
                    <span>Interesado en los siguientes temas:</span>
                    <br />
                    <label for="musica">
                        <input type="checkbox" name="musica" id="musica">
                        Música
                    </label>
                    <br />
                    <label for="deportes">
                        <input type="checkbox" name="deportes" id="deportes">
                        Deportes
                    </label>
                    <br />
                    <label for="cine">
                        <input type="checkbox" name="cine" id="cine">
                        Cine
                    </label>
                    <br />
                    <label for="libros">
                        <input type="checkbox" name="libros" id="libros">
                        Libros
                    </label>
                    <br />
                    <label for="ciencia">
                        <input type="checkbox" name="ciencia" id="ciencia">
                        Ciencia
                    </label>
                </div>
            </div>
            <p>Día de la semana que le interesa recibirlo</p>
            <select name="diasSemana" id="diasSemana" value="hola">
                <option value="...">...</option>
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miércoles">Miércoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sábado">Sábado</option>
                <option value="Domingo">Domingo</option>
            </select>
            <br />
            <label for="comentario">Su opinión
                <br />
                <textarea name="comentario" id="comentario">Comentario:</textarea>
            </label>
            <br /><br />
            <input type="submit" value="Comprobar el formulario" name="comprobar">
            <input type="reset" value="Borrar todo">
        </form>
    </body>

    </html>
    <?php
}
?>