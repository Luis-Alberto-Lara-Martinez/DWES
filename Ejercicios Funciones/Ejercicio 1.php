<?php
$numero = intval($_POST["numero"]);
function saberSiEsPrimo($numero)
{
    if ($numero > 0) {
        $contadorDivisibles = 0;
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $contadorDivisibles++;
            }
        }
        if ($contadorDivisibles > 2) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}
if (saberSiEsPrimo($numero)) {
    print ("<p>$numero es primo</p>");
} else {
    print ("<p>$numero no es primo</p>");
}
?>