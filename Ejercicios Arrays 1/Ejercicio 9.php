<?php
print ("<style>body{background-color: rgb(173, 216, 230);}</style>");
print ("<h1 style='text-align: right'>ESTADIOS DE FÚTBOL</h1>");
$futbol = array(
    "Barcelona" => "Camp Nou",
    "Real Madrid" => "Santiago Bernabeu",
    "Valencia" => "Mestalla",
    "Real Sociedad" => "Anoeta",
);
$contador = 0;
foreach ($futbol as $indice => $valor) {
    $contador++;
    print ("<p>$contador. El equipo $indice tiene el estadio $valor</p>");
}
unset($futbol["Real Madrid"]);
$contador = 0;
foreach ($futbol as $indice => $valor) {
    $contador++;
    print ("<p>$contador. El equipo $indice tiene el estadio $valor</p>");
}
?>