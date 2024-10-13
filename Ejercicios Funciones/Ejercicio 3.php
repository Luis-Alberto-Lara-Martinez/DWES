<?php
$caracter = $_POST["caracter"];
function tipoCaracter($caracter)
{
    if (ctype_upper($caracter)) {
        print ("<p>$caracter es una mayúscula</p>");
    } elseif (ctype_lower($caracter)) {
        print ("<p>$caracter es una minúscula</p>");
    } elseif (ctype_digit($caracter)) {
        print ("<p>$caracter es un dígito</p>");
    } elseif (ctype_space($caracter)) {
        print ("<p>$caracter es un espacio en blanco</p>");
    } elseif (ctype_punct($caracter)) {
        print ("<p>$caracter es un carácter de puntuación</p>");
    } else {
        print ("<p>$caracter es cualquier otra cosa</p>");
    }
}
tipoCaracter($caracter);
?>