<?php
$colores = array(
    "Colores fuertes:" => array("rojo:" => "FF0000", "verde:" => "00FF00", "azul" => "0000FF"),
    "Colores suaves:" => array("rosa:" => "FE9ABC", "amarillo:" => "FDF189", "malva" => "BC8F8F")
);
print ("<table>");
foreach ($colores as $indice => $valor) {
    print ("<tr><td>$indice</td>");
    foreach ($valor as $indice2 => $valor2) {
        print ("<td style='background-color: #$valor2'>$indice2$valor2</td>");
    }
    print ("</tr>");
}
print ("</table>");
?>