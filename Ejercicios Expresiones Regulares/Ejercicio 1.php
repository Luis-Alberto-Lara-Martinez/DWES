<?php
$texto = $_POST["texto"];
function validarTexto($texto)
{
    if ($texto == "") {
        print ('<p>1. La cadena <b>"' . $texto . '"</b> está vacía</p>');
    } else {
        print ('<p>1. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> está vacía</p>');
    }

    if (preg_match('/^[[:alpha:]]+$/u', $texto)) {
        print ('<p>2. La cadena <b>"' . $texto . '"</b> es una única palabra</p>');
    } else {
        print ('<p>2. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es una única palabra</p>');
    }

    if (preg_match('/^[[:alpha:]]+[[:space:]]+[[:alpha:]]+$/', $texto)) {
        print ('<p>3. La cadena <b>"' . $texto . '"</b> son dos palabras</p>');
    } else {
        print ('<p>3. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> son dos palabras</p>');
    }

    if (preg_match('/^[[:alpha:]]+$/', $texto)) {
        print ('<p>4. La cadena <b>"' . $texto . '"</b> es una única palabra que contiene solamente caracteres ingleses</p>');
    } else {
        print ('<p>4. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es una única palabra que contiene solamente caracteres ingleses</p>');
    }

    if (preg_match('/^[a]*[e]*[i]*[o]*[u]*$/', $texto)) {
        print ('<p>5. La cadena <b>"' . $texto . '"</b> es una cadena de vocales minúsculas sin acentuar en orden alfabético</p>');
    } else {
        print ('<p>5. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es una cadena de vocales minúsculas sin acentuar en orden alfabético</p>');
    }

    if (preg_match('/^[[:digit:]]+$/', $texto)) {
        print ('<p>6. La cadena <b>"' . $texto . '"</b> es un único número');
        if (intval($texto) % 2 == 0) {
            print ('<p>7. La cadena <b>"' . $texto . '"</b> es un único número par');
        } else {
            print ('<p>7. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es un único número par');
        }
    } else {
        print ('<p>6. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es un único número</p>');
        print ('<p>7. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es un único número par');
    }

    if (preg_match('/^[69][[:digit:]]{8}$/', $texto)) {
        print ('<p>8. La cadena <b>"' . $texto . '"</b> es un teléfono de 9 cifras que empieza por 6 o 9</p>');
    } else {
        print ('<p>8. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es un es un teléfono de 9 cifras que empieza por 6 o 9</p>');
    }

    if (preg_match('/^[[:digit:]]{8}[[:upper:]]?$/', $texto)) {
        print ('<p>9. La cadena <b>"' . $texto . '"</b> es un único número del DNI (de 1 a 8 números, con letra inglesa final mayúscula o sin ella)</p>');
    } else {
        print ('<p>9. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es un único número del DNI (de 1 a 8 números, con letra inglesa final mayúscula o sin ella)</p>');
    }

    if (preg_match('/^[0-4][[:digit:]]{4}$/', $texto)) {
        print ('<p>10. La cadena <b>"' . $texto . '"</b> es un código postal</p>');
    } else {
        print ('<p>10. La cadena <b>"' . $texto . '"</b> <span style="color: red">no</span> es un código postal</p>');
    }

}
print ('<p>Ha escrito <b>"' . $texto . '"</b></p>');
validarTexto($texto);
print ("<p><a href='Ejercicio 1.html'>Volver al formulario</a></p>");
?>