<?php
$numero = intval($_POST["numero"]);
function factores($numero)
{
    $factor = array(1);
    print ("<p><b>$numero</b></p>");
    for ($i = 2; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $factor[] = $i;
            $numero /= $i;
            $i = 1;
        }
    }
    $factor = array_reverse($factor);
    foreach ($factor as $valor) {
        print ("<p>$valor</p>");
    }
}
factores($numero);
?>