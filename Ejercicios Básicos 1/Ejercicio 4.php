<?php
$color1 = rand(0, 360);
$color2 = rand(0, 360);
print "<h1>Ejemplo de ejercicio sin formulario 1</h1>";
print "<p><b>Color: hsl($color1, 100%, 50%) Color: hsl($color2, 100%, 50%)</b></p>";
print "<p style='width: 190px; height: 50px; background-color: hsl($color1, 100%, 50%); display: inline-block; margin-right: 5px'></p>";
print "<p style='width: 190px; height: 50px; background-color: hsl($color2, 100%, 50%); display: inline-block'></p>";
print "<p>Este programa forma parte del curso <b>>Programación en entorno servidor</b></p>";
?>