<?php
$texto = $_POST["texto"];
function validarTexto($texto)
{
    if (preg_match('/^[[:alpha:]]([[:space:]]+[[:alpha:]])*$/u', $texto)) {
        print ('<p>1. La cadena <b>"' . $texto . '"</b> es uno o más caracteres sueltos separados por espacios</p>');
    } else {
        print ('<p>1. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es uno o más caracteres sueltos separados por espacios</p>');
    }

    if (preg_match('/^[[:alpha:]][[:space:]]+[[:alpha:]]([[:space:]]+[[:alpha:]])*$/u', $texto)) {
        print ('<p>2. La cadena <b>"' . $texto . '"</b> es dos o más caracteres sueltos separados por espacios</p>');
    } else {
        print ('<p>2. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es dos o más caracteres sueltos separados por espacios</p>');
    }

    if (preg_match('/^[[:lower:]]+([[:space:]]+[[:lower:]]+)*$/', $texto)) {
        print ('<p>3. La cadena <b>"' . $texto . '"</b> es una o más palabras con caracteres ingleses</p>');
    } else {
        print ('<p>3. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es una o más palabras con caracteres ingleses</p>');
    }

    if (preg_match('/^[[:upper:]]+$/', $texto)) {
        print ('<p>4. La cadena <b>"' . $texto . '"</b> es una única palabra en mayúsculas</p>');
    } else {
        print ('<p>4. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es una única palabra en mayúsculas</p>');
    }

    if (preg_match('/^[[:digit:]]{2}[\/][[:digit:]]{2}[\/][[:digit:]]{4}$/', $texto)) {
        print ('<p>5. La cadena <b>"' . $texto . '"</b> es una fecha con el formato dd/mm/aaaa</p>');
    } else {
        print ('<p>5. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es una fecha con el formato dd/mm/aaaa</p>');
    }

    if (preg_match('/^[[:digit:]]+([.,][[:digit:]]{1,2})?$/', $texto)) {
        print ('<p>6. La cadena <b>"' . $texto . '"</b> es un número sin signo y puede que hasta dos decimales</p>');
    } else {
        print ('<p>6. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es un número sin signo y puede que hasta dos decimales</p>');
    }

    if (preg_match('/^[+-][[:digit:]]+([.,][[:digit:]]+)?$/', $texto)) {
        print ('<p>7. La cadena <b>"' . $texto . '"</b> es un número con signo y puede que parte decimal</p>');
    } else {
        print ('<p>7. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es un número con signo y puede que parte decimal</p>');
    }

    if (preg_match('/^([[:alnum:]]|[\*\+\.\-\_]){6,}$/', $texto)) {
        print ('<p>8. La cadena <b>"' . $texto . '"</b> es una contraseña</p>');
    } else {
        print ('<p>8. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es una contraseña</p>');
    }
}
print ('<p>Ha escrito <b>"' . $texto . '"</b></p>');
validarTexto($texto);
print ("<p><a href='Ejercicio 2.html'>Volver al formulario</a></p>");
?>