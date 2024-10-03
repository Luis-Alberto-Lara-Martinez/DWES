<?php
print ("<h2>Dos dados</h2>");
print ("<p>Actualice la página para mostrar una nueva tirada.</p>");
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
print ("<img src='img/$dado1.svg'></img>");
print ("<img src='img/$dado2.svg'></img>");
if ($dado1 == $dado2) {
    print ("<p>Ha salido una pareja de $dado1</p>");
} elseif ($dado1 > $dado2) {
    print ("<p>No ha salido pareja. El valor más alto es $dado1</p>");
} else {
    print ("<p>No ha salido pareja. El valor más alto es $dado2</p>");
}
print ("<p>Última modificación de esta página: 23 de septiembre de 2017</p>");
print ("<p>Programación web en entorno servidor en PHP</p>");
?>