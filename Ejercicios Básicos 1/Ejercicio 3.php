<?php
$num = rand(1, 10);
print "<h1>Ejemplo de ejercicio sin formulario 1</h1>";
print "<p>Actualice la página para mostrar un número nuevo y tamaño de su fuente</p>";
print "<p style='font-size: " . ((11 - $num) * 10) . "px'>$num</p>";
print "<p>Este programa forma parte del curso <b>Programación en entorno servidor</b></p>";
?>