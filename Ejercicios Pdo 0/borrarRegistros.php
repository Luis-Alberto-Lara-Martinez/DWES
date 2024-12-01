<?php
include("funcionesConexion.php");
$conexion = usarConexion();
$listaDBs = $conexion->query("SHOW DATABASES LIKE 'Ciudadanos';");

if ($listaDBs->rowCount() != 0) {
    $conexion->query("USE Ciudadanos;");
    echo "<a href='inicio.php'>Volver a la página inicial</a>";
    echo "<p>Marque los registros que quiera borrar</p>";

    if (isset($_POST["borrar"])) {
        if (isset($_POST["listaIDs"])) {
            foreach ($_POST["listaIDs"] as $nombre) {
                $consulta = $conexion->prepare("DELETE FROM Persona WHERE nombre = :nombre");
                $consulta->bindParam(":nombre", $nombre);
                $consulta->execute();
            }
        } else {
            echo "<p>No se seleccionaron registros para borrar</p>";
        }
    }

    $resultado = $conexion->query("SELECT * FROM Persona;");
    echo "<form action='borrarRegistros.php' method='post'>";
    echo "<table>
        <tr>
            <th>Borrar</th>
            <th>Nombre</th>
            <th>Localidad</th>
        </tr>";
    foreach ($resultado as $indice => $valor) {
        echo "<tr>
            <td><input type='checkbox' name='listaIDs[]' value='" . $valor["nombre"] . "'></td>
            <td>" . $valor["nombre"] . "</td>
            <td>" . $valor["localidad"] . "</td>
        </tr>";
    }
    echo "</table>";
    echo "<input type='submit' value='Borrar Registro' name='borrar'>
    </form>";
    echo "<form action='inicio.php' method='post'>
        <input type='submit' value='Reiniciar formulario' name='reiniciar'>
    </form>";
} else {
    header("Refresh: 5; url=inicio.php");
    echo "<p>Error, la base de datos no existe</p>";
    echo "<p>Estás siendo redirigido...</p>";
}
?>