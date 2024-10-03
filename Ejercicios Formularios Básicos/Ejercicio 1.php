<?php
$segundos = $_POST["segundos"];
if ($segundos) {
    print ("<p>$segundos segundos son " . (intval($segundos / 60)) . " minutos y " . ($segundos % 60) . " segundos</p>");
} else {
    print ("<p>Error, elija valores válidos</p>");
}
?>