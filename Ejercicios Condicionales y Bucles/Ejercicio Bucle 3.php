<?php
print ("<h1 style='text-align: center'>CÍRCULOS DE COLORES NUMERADOS</h1>");
$num = rand(1, 10);
print ("<p>Actualice la página para mostrar un nuevo dibujo</p>");
print ("<p><b>$num círculos</b></p>");
print ("<table style='border: 1px solid black'><tr style='border: 1px solid black'>");
for ($i = 0; $i < $num; $i++) {
    $color = rand(0, 360);
    $number = rand(1, 10);
    print ("<td style='border: 1px solid black'>
        <svg width=100 height=100>
            <circle cx=50 cy=50 r=40 fill='hsl($color, 100%, 50%)'></circle>
            <text x=50 y=65 font-size='50' text-anchor='middle' fill='black'>$number</text>
        </svg>
        </td>");
}
print ("</tr></table>");
?>