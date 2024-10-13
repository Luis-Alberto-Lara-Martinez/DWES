<?php
$fecha = $_POST["fecha"];
function validarFecha($fecha) {
    if (preg_match('/^([[:digit:]]{2}[\/]){2}[[:digit:]]{4}$/', $fecha)) {
        print("<p>La fecha es válida</p>");
    } else {
        print("<p>La fecha no es válida</p>");
    }
}
validarFecha($fecha);
?>