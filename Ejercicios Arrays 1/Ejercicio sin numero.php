<?php
$rangoMin = $_POST["rangoMin"];
$rangoMax = $_POST["rangoMax"];
$valorMin = $_POST["valorMin"];
$valorMax = $_POST["valorMax"];
if ($rangoMax < $rangoMin || $valorMax < $valorMin || !($_POST["rangoMin"]) || !($_POST["rangoMax"]) || !($_POST["valorMin"]) || !($_POST["valorMax"])) {
    print ("<p>Valores inválidos </p>");
} else {
    $orden = $_POST["orden"] ?? 0;
    $array = [];
    $rango = rand($rangoMin, $rangoMax);
    print ("<h2>Datos iniciales</h2>");
    print ("<p>Número de valores en la matriz: $rango</p>");
    print ("<p>Valores elegidos al azar entre $valorMin y $valorMax</p>");
    print ("<h2>Matriz de valores</h2>");
    for ($i = 0; $i < $rango; $i++) {
        $array[] = rand($valorMin, $valorMax);
    }
    print ("<pre>");
    print_r($array);
    print ("</pre>");
    print ("<h2>Matriz ordenada de valores</h2>");
    if ($orden == "directo") {
        sort($array);
        print ("<pre>");
        print_r($array);
        print ("</pre>");
    } elseif ($orden == "inverso") {
        rsort($array);
        print ("<pre>");
        print_r($array);
        print ("</pre>");
    } else {
        print ("<p>No se ha solicitado ordenar la matriz</p>");
    }
}
print ("<form action='Ejercicio sin numero.html' method='post'>");
print ("<input type='submit' value='Volver al formulario'>");
print ("</form>");
?>