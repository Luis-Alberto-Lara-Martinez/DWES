<?php
$numInicial = $_REQUEST["numInicial"];
$incremento = $_REQUEST["incremento"];
$numValores = $_REQUEST["numValores"];
$contValores = 0;
print ("<p>Sucesión correspondiente:</p>");
print ("<p>");
do {
    print ("$numInicial ");
    $numInicial += $incremento;
    $contValores++;
} while ($contValores < $numValores);
print ("</p>");
?>