<?php
if (isset($_POST["enviar"])) {
    if ($_POST["nombre"] != "") {
        if ($_POST["apellidos"] != "") {
            if ($_POST["edad"] != "...") {
                if ($_POST["peso"] != "" && intval($_POST["peso"]) >= 1) {
                    if (isset($_POST["sexo"])) {
                        if (isset($_POST["estadoCivil"])) {
                            ?>
                            <html lang="es">

                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Ejercicio 6</title>
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
                                <h1>DATOS PERSONALES 6 (RESULTADO)</h1>
                                <p>Su nombre es <b><?php echo $_POST["nombre"]; ?></b></p>
                                <p>Sus apellidos son <b><?php echo $_POST["apellidos"]; ?></b></p>
                                <p>Tiene <b><?php echo strtolower($_POST["edad"]); ?></b></p>
                                <p>Su peso es de <b><?php echo $_POST["peso"]; ?></b> kg</p>
                                <p>Es un<?php if ($_POST["sexo"] == "hombre") {
                                    echo " <b>" . $_POST["sexo"] . "</b>";
                                } else {
                                    echo "a <b>" . $_POST["sexo"] . "</b>";
                                }
                                ?></p>
                                <p>Su estado civil es <b><?php echo $_POST["estadoCivil"]; ?></b></p>
                                <p>Le gusta:<b><?php if (isset($_POST["cine"])) {
                                    echo " el " . $_POST["cine"] . ",";
                                }
                                if (isset($_POST["literatura"])) {
                                    echo " la " . $_POST["literatura"] . ",";
                                }
                                if (isset($_POST["tebeos"])) {
                                    echo " los " . $_POST["tebeos"] . ",";
                                }
                                if (isset($_POST["deporte"])) {
                                    echo " el " . $_POST["deporte"] . ",";
                                }
                                if (isset($_POST["musica"])) {
                                    echo " la " . $_POST["musica"] . ",";
                                }
                                if (isset($_POST["television"])) {
                                    echo " la " . $_POST["television"] . ",";
                                }
                                ?></b></p>
                                <a href="Ejercicio 6.php">Volver al formulario</a>
                                <br />
                                <hr />
                                <p>Última modificación de esta página: 6 de octubre de 2016</p>
                                <p>Este programa forma parte del Módulo Desarrollo Web en Entorno Servidor"</p>
                                <p><b><em>Programación web en PHP</em></b></p>
                            </body>

                            </html>
                            <?php
                        } else {
                            ?>
                            <html lang="es">

                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Ejercicio 6</title>
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
                                <h1>DATOS PERSONALES 6 (RESULTADO)</h1>
                                <p class="no">No has introducido ningún estado civil</p>
                                <a href="Ejercicio 6.php">Volver al formulario</a>
                                <br />
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
                        <html lang="es">

                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Ejercicio 6</title>
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
                            <h1>DATOS PERSONALES 6 (RESULTADO)</h1>
                            <p class="no">No has introducido ningún sexo</p>
                            <a href="Ejercicio 6.php">Volver al formulario</a>
                            <br />
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
                    <html lang="es">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Ejercicio 6</title>
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
                        <h1>DATOS PERSONALES 6 (RESULTADO)</h1>
                        <p class="no">No has introducido ningún peso válido</p>
                        <a href="Ejercicio 6.php">Volver al formulario</a>
                        <br />
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
                <html lang="es">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Ejercicio 6</title>
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
                    <h1>DATOS PERSONALES 6 (RESULTADO)</h1>
                    <p class="no">No has introducido ningún rango de edad</p>
                    <a href="Ejercicio 6.php">Volver al formulario</a>
                    <br />
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
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Ejercicio 6</title>
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
                <h1>DATOS PERSONALES 6 (RESULTADO)</h1>
                <p class="no">No has introducido los apellidos</p>
                <a href="Ejercicio 6.php">Volver al formulario</a>
                <br />
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
            <title>Ejercicio 6</title>
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
            <h1>DATOS PERSONALES 6 (RESULTADO)</h1>
            <p class="no">No has introducido el nombre</p>
            <a href="Ejercicio 6.php">Volver al formulario</a>
            <br />
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
        <title>Ejercicio 6</title>
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

            table {
                text-align: left;
            }
        </style>
    </head>

    <body>
        <h1>DATOS PERSONALES 6 (FORMULARIO)</h1>
        <form action="Ejercicio 6.php" method="post">
            <fieldset>
                <legend>Formulario</legend>
                <p>Escriba los datos siguientes:</p>
                <table>
                    <tr>
                        <th><label for="nombre">Nombre:</label></th>
                        <th><label for="apellidos">Apellidos:</label></th>
                        <th><label for="edad">Edad:</label></th>
                    </tr>
                    <tr>
                        <td><input type="text" name="nombre" id="nombre"></td>
                        <td><input type="text" name="apellidos" id="apellidos"></td>
                        <td><select name="edad" id="edad">
                                <option value="...">...</option>
                                <option value="Menos de 20 años">Menos de 20 años</option>
                                <option value="Entre 20 y 39 años">Entre 20 y 39 años</option>
                                <option value="Entre 40 y 59 años">Entre 40 y 59 años</option>
                                <option value="60 años o más">60 años o más</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="peso">Peso:</label></th>
                        <th>Sexo:</th>
                        <th>Estado Civil:</th>
                    </tr>
                    <tr>
                        <td><input type="number" name="peso" id="peso"> kg</td>
                        <td><label for="hombre">
                                <input type="radio" name="sexo" id="hombre" value="hombre">
                                Hombre
                            </label>
                            <label for="mujer">
                                <input type="radio" name="sexo" id="mujer" value="mujer">
                                Mujer
                            </label>
                        </td>
                        <td><label for="soltero">
                                <input type="radio" name="estadoCivil" id="soltero" value="soltero">
                                Soltero
                            </label>
                            <label for="casado">
                                <input type="radio" name="estadoCivil" id="casado" value="casado">
                                Casado
                            </label>
                            <label for="otro">
                                <input type="radio" name="estadoCivil" id="otro" value="otro">
                                Otro
                            </label>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th rowspan="2">Aficiones:</th>
                        <td><label for="cine">
                                <input type="checkbox" name="cine" id="cine" value="cine">
                                Cine
                            </label>
                        </td>
                        <td><label for="literatura">
                                <input type="checkbox" name="literatura" id="literatura" value="literatura">
                                Literatura
                            </label>
                        </td>
                        <td><label for="tebeos">
                                <input type="checkbox" name="tebeos" id="tebeos" value="tebeos">
                                Tebeos
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="deporte">
                                <input type="checkbox" name="deporte" id="deporte" value="deporte">
                                Deporte
                            </label>
                        </td>
                        <td><label for="musica">
                                <input type="checkbox" name="musica" id="musica" value="música">
                                Música
                            </label>
                        </td>
                        <td><label for="television">
                                <input type="checkbox" name="television" id="television" value="televisión">
                                Televisión
                            </label>
                        </td>
                    </tr>
                </table>
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