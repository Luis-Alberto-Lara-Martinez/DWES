<?php
print ("<h1 style='text-align: center'>Matrices 1</h1>");
print ("<h2>Datos iniciales</h2>");
$numValores = rand(5, 15);
print ("<p>Número de valores en la matriz: $numValores</p>");
print ("<p>Valores elegidos al azar entre 0 y 10</p>");
$array = [];
for ($i = 0; $i < $numValores; $i++) {
    $array[] = rand(0, 10);
}
print ("<h2>Matriz de valores</h2>");
print ("<pre>");
print_r($array);
print ("</pre>");
?>