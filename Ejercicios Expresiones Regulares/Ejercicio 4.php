<?php
$numero = $_POST["numero"];
function esNumeroEspanol($numero)
{
    return preg_match('/^[+][3][4][69][[:digit:]]{8}$/', $numero);
}
if (esNumeroEspanol($numero) == 1) {
    print ("<p>El número es válido</p>");
} else {
    print ("<p>El número no es válido</p>");
}
?>