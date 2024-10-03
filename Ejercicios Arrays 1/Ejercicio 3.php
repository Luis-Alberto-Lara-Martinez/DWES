<?php
$paisCapital = array(
    "Italia" => "Roma",
    "Luxemburgo" => "Luxemburgo",
    "Bélgica" => "Bruselas",
    "Dinamarca" => "Copenhage",
    "Finlandia" => "Helsinki",
    "Francia" => "Paris",
    "Eslovaquia" => "Bratislava",
    "Eslovenia" => "Ljubljana",
    "Alemania" => "Berlin",
    "Grecia" => "Atenas",
    "Irlanda" => "Dublín",
    "Holanda" => "Amsterdam",
    "Portugal" => "Lisboa",
    "España" => "Madrid",
    "Suecia" => "Estocolmo",
    "Reino Unido" => "Londres",
    "Chipre" => "Nicosia",
    "República Checa" => "Praga",
    "Estonia" => "Tallin",
    "Hungria" => "Budapest",
    "Malta" => "Valetta",
    "Austria" => "Viena",
    "Polonia" => "Varsovia"
);
foreach ($paisCapital as $indice => $valor) {
    print("<p>La capital de $indice es $valor</p>");
}
?>