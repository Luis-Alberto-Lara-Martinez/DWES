<?php
print ("<h2>Juego: Dado más alto</h2>");
print ("<p>Actualice la página para mostrar una nueva tirada.</p>");
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
print ("<div style='display: flex;'>");
print ("<h3 style='margin-right: 80px; margin-left: 40px'>Jugador 1</h3>");
print ("<h3 style='margin-right: 70px'>Jugador 2</h3>");
print ("<h3>Resultado</h3>");
print ("</div>");
print ("<div style='display: flex; align-items: center'>");
print ("<img src='img/$dado1.svg' style='border: 10px solid red; margin-right: 5px'></img>");
print ("<img src='img/$dado2.svg' style='border: 10px solid blue; margin-right: 5px'></img>");
if ($dado1 == $dado2) {
    print ("<p>Han empatado</p>");
} elseif ($dado1 > $dado2) {
    print ("<p>Ha ganado el jugador 1</p>");
} else {
    print ("<p>Ha ganado el jugador 2</p>");
}
print ("</div>");
print ("<p>Última modificación de esta página: 23 de septiembre de 2017</p>");
print ("<p>Programación web en entorno servidor en PHP</p>");
print ("<p>2DAW IES EL CAÑAVERAL</p>");
?>