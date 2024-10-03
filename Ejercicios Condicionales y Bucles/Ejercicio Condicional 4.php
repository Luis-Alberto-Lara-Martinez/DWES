<?php
print ("<h2 style='text-align: right'>TRES DADOS</h2>");
print ("<p>Actualice la página para mostrar una nueva tirada.</p>");
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
$dado3 = rand(1, 6);
print ("<img src='img/$dado1.svg'></img>");
print ("<img src='img/$dado2.svg'></img>");
print ("<img src='img/$dado3.svg'></img>");
if ($dado1 == $dado2) {
    if ($dado1 == $dado3) {
        print ("<p>Ha salido un trío de $dado1</p>");
    } else {
        print ("<p>Ha salido una pareja de $dado1</p>");
    }
} elseif ($dado1 == $dado3) {
    print ("<p>Ha salido una pareja de $dado1</p>");
} elseif ($dado2 == $dado3) {
    print ("<p>Ha salido una pareja de $dado2</p>");
} else {
    if ($dado1 > $dado2) {
        if ($dado1 > $dado3) {
            print ("<p>El mayor es $dado1</p>");
        }else {
            print ("<p>El mayor es $dado3</p>");
        }
    }else {
        if ($dado2 > $dado3) {
            print ("<p>El mayor es $dado2</p>");
        }else {
            print ("<p>El mayor es $dado3</p>");
        }
    }
}
print ("<br></br><hr></hr>");
print ("<p>Última modificación de esta página: 23 de septiembre de 2017</p>");
print ("<p>Programación web en entorno servidor en PHP</p>");
print ("<p>2DAW IES EL CAÑAVERAL</p>");
?>