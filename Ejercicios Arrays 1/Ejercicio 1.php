<?php
$dias = array(1 => "Lunes", 2 => "Martes", 3 => "Miércoles", 4 => "Jueves", 5 => "Viernes", 6 => "Sábado", 7 => "Domingo");
print("<p>Bucle foreach</p>");
foreach ($dias as $indice => $valor) {
    print("<p>$indice: $valor</p>");
}
print("<p>Bucle for</p>");
for ($i=1; $i <= count($dias); $i++) { 
    print("<p>$i: ".$dias[$i]."</p>");
}
?>