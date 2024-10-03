<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
if (!$a || !$b || !$c) {
    print ("<p>Valores inválidos</p>");
} else {
    if (pow($b, 2) - 4 * $a * $c > 0) {
        $solucion1 = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
        $solucion2 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
        print ("<p>La ecuación <b>$a.x<sup>2</sup> + $b.x + $c = 0</b> tiene dos soluciones:</p>");
        print ("<p>Solución 1: $solucion1</p>");
        print ("<p>Solución 2: $solucion2</p>");
    }elseif (pow($b, 2) - 4 * $a * $c == 0) {
        $solucion=(-$b)/(2*$a);
        print ("<p>La ecuación <b>$a.x<sup>2</sup> + $b.x + $c = 0</b> tiene una única solución:</p>");
        print ("<p>Solución: $solucion</p>");
    }else {
        print ("<p>La ecuación <b>$a.x<sup>2</sup> + $b.x + $c = 0</b> no tiene ninguna solución real</p>");
    }
}
?>