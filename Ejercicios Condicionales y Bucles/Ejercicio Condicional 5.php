<?php
print ("<h2>Juego: Tres dados más altos</h2>");
print ("<p>Actualice la página para mostrar una nueva tirada.</p>");
$dado1 = rand (1, 6);
$dado2 = rand (1, 6);
$dado3 = rand (1, 6);
$dado4 = rand (1, 6);
$dado5 = rand (1, 6);
$dado6 = rand (1, 6);
print ("<div style='display: flex;'>");
print ("<h3 style='margin-right: 400px; margin-left: 200px'>Jugador 1</h3>");
print ("<h3 style='margin-right: 245px'>Jugador 2</h3>");
print ("<h3>Resultado</h3>");
print ("</div>");
print ("<div style='display: flex; align-items: center'>");
print ("<img src='img/$dado1.svg' style='border: 10px solid red;'></img>");
print ("<img src='img/$dado2.svg' style='border: 10px solid red;'></img>");
print ("<img src='img/$dado3.svg' style='border: 10px solid red; margin-right: 10px'></img>");
print ("<img src='img/$dado4.svg' style='border: 10px solid blue;'></img>");
print ("<img src='img/$dado5.svg' style='border: 10px solid blue;'></img>");
print ("<img src='img/$dado6.svg' style='border: 10px solid blue; margin-right: 10px'></img>");
if ($dado1 == $dado2 && $dado1 == $dado3) {
    if ($dado4 == $dado5 && $dado4 == $dado6) {
        if ($dado1 > $dado4) {
            print ("<p>Ha ganado el jugador 1</p>");
        } elseif ($dado1 < $dado4) {
            print ("<p>Ha ganado el jugador 2</p>");
        } else {
            print ("<p>Han empatado</p>");
        }
    } else {
        print ("<p>Ha ganado el jugador 1</p>");
    }
} elseif ($dado1 == $dado2 || $dado1 == $dado3) {
    if ($dado4 == $dado5 && $dado4 == $dado6) {
        print ("<p>Ha ganado el jugador 2</p>");
    } elseif ($dado4 == $dado5 || $dado4 == $dado6) {
        if ($dado1 == $dado4) {
            if (($dado1 + $dado2 + $dado3) == ($dado4 + $dado5 + $dado6)) {
                print ("<p>Han empatado</p>");
            }elseif (($dado1 + $dado2 + $dado3) > ($dado4 + $dado5 + $dado6)) {
                print ("<p>Ha ganado el jugador 1</p>");
            }else {
                print ("<p>Ha ganado el jugador 2</p>");
            }
        } elseif ($dado1 > $dado4) {
            print ("<p>Ha ganado el jugador 1</p>");
        } else {
            print ("<p>Ha ganado el jugador 2</p>");
        }
    } elseif ($dado5 == $dado6) {
        if ($dado1 == $dado5) {
            if (($dado1 + $dado2 + $dado3) == ($dado4 + $dado5 + $dado6)) {
                print ("<p>Han empatado</p>");
            }elseif (($dado1 + $dado2 + $dado3) > ($dado4 + $dado5 + $dado6)) {
                print ("<p>Ha ganado el jugador 1</p>");
            }else {
                print ("<p>Ha ganado el jugador 2</p>");
            }
        } elseif ($dado1 > $dado5) {
            print ("<p>Ha ganado el jugador 1</p>");
        } else {
            print ("<p>Ha ganado el jugador 2</p>");
        }
    }else {
        print ("<p>Ha ganado el jugador 1</p>");
    }
} elseif ($dado2 == $dado3) {
    if ($dado4 == $dado5 && $dado4 == $dado6) {
        print ("<p>Ha ganado el jugador 2</p>");
    } elseif ($dado4 == $dado5 || $dado4 == $dado6) {
        if ($dado2 == $dado4) {
            if (($dado1 + $dado2 + $dado3) == ($dado4 + $dado5 + $dado6)) {
                print ("<p>Han empatado</p>");
            }elseif (($dado1 + $dado2 + $dado3) > ($dado4 + $dado5 + $dado6)) {
                print ("<p>Ha ganado el jugador 1</p>");
            }else {
                print ("<p>Ha ganado el jugador 2</p>");
            }
        } elseif ($dado2 > $dado4) {
            print ("<p>Ha ganado el jugador 1</p>");
        } else {
            print ("<p>Ha ganado el jugador 2</p>");
        }
    } elseif ($dado5 == $dado6) {
        if ($dado2 == $dado5) {
            if (($dado1 + $dado2 + $dado3) == ($dado4 + $dado5 + $dado6)) {
                print ("<p>Han empatado</p>");
            }elseif (($dado1 + $dado2 + $dado3) > ($dado4 + $dado5 + $dado6)) {
                print ("<p>Ha ganado el jugador 1</p>");
            }else {
                print ("<p>Ha ganado el jugador 2</p>");
            }
        } elseif ($dado2 > $dado5) {
            print ("<p>Ha ganado el jugador 1</p>");
        } else {
            print ("<p>Ha ganado el jugador 2</p>");
        }
    }else {
        print ("<p>Ha ganado el jugador 1</p>");
    }
} else {
    if ($dado4==$dado5 || $dado4==$dado6 || $dado5==$dado6) {
        print ("<p>Ha ganado el jugador 2</p>");
    } else {
        if (($dado1 + $dado2 + $dado3) == ($dado4 + $dado5 + $dado6)) {
            print ("<p>Han empatado</p>");
        }elseif (($dado1 + $dado2 + $dado3) > ($dado4 + $dado5 + $dado6)) {
            print ("<p>Ha ganado el jugador 1</p>");
        }else {
            print ("<p>Ha ganado el jugador 2</p>");
        }
    }
}
print ("</div>");
print ("<p>Última modificación de esta página: 23 de septiembre de 2017</p>");
print ("<p>Programación web en entorno servidor en PHP</p>");
print ("<p>2DAW IES EL CAÑAVERAL</p>");
?>