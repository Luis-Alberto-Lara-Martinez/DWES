<?php
$peso = $_POST["peso"];
$altura = $_POST["altura"];
if (!$peso || !$altura) {
    print ("Valores inválidos");
} else {
    print ("<p>Con un peso de <b>$peso kg</b> y una altura de <b>$altura cm</b>, su índice de masa corporal es <b>" . (intval($peso / pow(($altura / 100), 2))) . "</b></p>");
    print ("<p>Un imc muy alto indica obesidad. Los valores 'normales' de imc están entre 20 y 25, pero esos límites dependen de la edad, del sexo, de la constitución física, etc.</p>");
}
?>