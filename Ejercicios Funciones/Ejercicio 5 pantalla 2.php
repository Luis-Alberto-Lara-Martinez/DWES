<?php
function invertirFilas($matriz) {
    return array_reverse($matriz);
}

$n = intval($_POST['n']);
$matriz = [];
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $matriz[$i][$j] = intval($_POST["a{$i}{$j}"]);
    }
}

$matrizInvertida = invertirFilas($matriz);

echo "<h2>Matriz Original</h2><pre>";
foreach ($matriz as $fila) {
    echo implode(" ", $fila) . "<br>";
}
echo "</pre>";

echo "<h2>Matriz Invertida</h2><pre>";
foreach ($matrizInvertida as $fila) {
    echo implode(" ", $fila) . "<br>";
}
echo "</pre>";
?>
