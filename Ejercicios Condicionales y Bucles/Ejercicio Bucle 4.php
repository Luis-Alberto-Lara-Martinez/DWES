<?php
print ("<h1 style='text-align: center'>CONTAR PARES E IMPARES</h1>");
print ("<p>Actualice la página para mostrar una nueva tirada</p>");
$tirada = rand(1, 10);
print ("<p><b>$tirada dados</b></p>");
$contPares = 0;
$contImpares = 0;
for ($i = 0; $i < $tirada; $i++) {
    $dado = rand(1, 6);
    print ("<img src='img/$dado.svg'></img>");
    if ($dado % 2 == 0) {
        $contPares++;
    } else {
        $contImpares++;
    }
}
print ("<p>Han salido $contPares números pares y $contImpares números impares</p>");
?>