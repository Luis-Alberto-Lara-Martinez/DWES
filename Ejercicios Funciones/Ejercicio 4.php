<?php
$matriz = array(
    array(intval($_POST["p00"]), intval($_POST["p01"]), intval($_POST["p02"])),
    array(intval($_POST["p10"]), intval($_POST["p11"]), intval($_POST["p12"])),
    array(intval($_POST["p20"]), intval($_POST["p21"]), intval($_POST["p22"]))
);
function calculos($matriz)
{
    $suma0 = 0;
    $suma1 = 0;
    $suma2 = 0;
    foreach ($matriz as $fila => $columna) {
        foreach ($columna as $valor) {
            if ($fila == 0) {
                $suma0 += $valor;
            } elseif ($fila == 1) {
                $suma1 += $valor;
            } else {
                $suma2 += $valor;
            }
        }
    }
    print ("<h1>Programa que suma los elementos de las filas de una matriz</h1>");
    print ("<p>La suma de la fila 0 es: $suma0</p>");
    print ("<p>La suma de la fila 1 es: $suma1</p>");
    print ("<p>La suma de la fila 2 es: $suma2</p>");
    $maximo = max($suma0, $suma1, $suma2);
    if ($maximo == $suma0) {
        print ("<p>La fila mayor es $suma0 y pertenece a la fila 0</p>");
    } elseif ($maximo == $suma1) {
        print ("<p>La fila mayor es $suma1 y pertenece a la fila 1</p>");
    } else {
        print ("<p>La fila mayor es $suma2 y pertenece a la fila 2</p>");
    }
}
calculos($matriz);
?>