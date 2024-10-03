<?php
$cantidad = $_POST["cantidad"];
if (isset($_POST["moneda"])) {
    if ($_POST["moneda"] == "dolares") {
        print ("<p>$cantidad dolares son $cantidad euros.</p>");
    } elseif ($_POST["moneda"] == "pesos") {
        print ("<p>$cantidad pesos son " . ($cantidad / 20.08) . "euros.</p>");
    } elseif ($_POST["moneda"] == "yenes") {
        print ("<p>$cantidad yenes son " . ($cantidad / 143.05) . "euros.</p>");
    } else {
        print ("<p>$cantidad pesetas son " . ($cantidad / 166.386) . "euros.</p>");
    }
    print ("<p>Gracias por utilizar este convertidor</p>");
} else {
    print ("<p>Error, selecciona una moneda para el cambio</p>");
}
?>