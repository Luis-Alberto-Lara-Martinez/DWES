<?php
$rangoMin = $_POST["rangoMin"];
$rangoMax = $_POST["rangoMax"];
$valorMin = $_POST["valorMin"];
$valorMax = $_POST["valorMax"];
$valorEliminar = $_POST["valorEliminar"];
if ($rangoMax < $rangoMin || $valorMax < $valorMin || !($_POST["rangoMin"]) || !($_POST["rangoMax"]) || !($_POST["valorMin"]) || !($_POST["valorMax"]) || !($_POST["valorEliminar"])) {
    print ("<p>Valores inválidos </p>");
} else {
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
    print ("<h2>Matriz con valor eliminado</h2>");
    print ("<p>Valor a eliminar: $valorEliminar</p>");
    $existeValorEliminar = false;
    foreach ($array as $indice => $valor) {
        if ($valor == $valorEliminar) {
            unset($array[$indice]);
            $existeValorEliminar = true;
        }
    }
    if ($existeValorEliminar) {
        $array = array_values($array);
        print ("<pre>");
        print_r($array);
        print ("</pre>");
    } else {
        print ("<p>El valor indicado no se encuentra en la matriz</p>");
    }
}
print ("<form action='Ejercicio 6.html' method='post'>");
print ("<input type='submit' value='Volver al formulario'>");
print ("</form>");
?>