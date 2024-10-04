<?php
$pais = array(
    "España" => array("Castellano", "Peseta"),
    "Francia" => array("Francés", "Franco"),
    "Reino Unido" => array("Inglés", "Libra"),
    "Alemania" => array("Alemán", "Marco"),
);
print ("<style>body{background-color: rgb(173, 216, 230);}table, tr, th, td{border: 1px solid black; padding: 5px; text-align: center}</style>");
print ("<table><tr><th colspan='3'>PAISES, MONEDAS E IDIOMA OFICIAL</th></tr>");
print ("<tr><th>Nombre</th><th>Lengua</th><th>Moneda</th></tr>");
foreach ($pais as $indice => $valor) {
    print ("<tr><td>$indice</td>");
    foreach ($valor as $valor2) {
        print ("<td>$valor2</td>");
    }
    print ("</tr>");
}
?>