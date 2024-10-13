<?php
$n = intval($_POST["n"]);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario 2: Rellenar la Matriz</title>
</head>

<body>
    <form action="Ejercicio 5 pantalla 2.php" method="post">
        <input type="hidden" name="n" value="<?php print ("$n"); ?>">
        <?php
        print ("<p>Introduzca los elementos de la matriz</p>");
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                print ("<input type='number' id='a{$i}{$j}' name='a{$i}{$j}' required>");
            }
            print ("<br>");
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>