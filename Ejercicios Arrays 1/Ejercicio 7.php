<?php
$dni = intval($_POST["dni"]);
$listaLetras = "TRWAGMYFPDXBNJZSQVHLCKE";
$letra = $dni % 23;
print ("<h1 style='text-align: right'>RESPUESTA (MATRICES Y FORMULARIO BÁSICO)</h1>");
print ("<p>La letra del DNI $dni es ".$listaLetras[$letra]."</p>");
?>