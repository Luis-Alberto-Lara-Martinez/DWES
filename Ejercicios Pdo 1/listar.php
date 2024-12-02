<?php
session_start();

if (isset($_SESSION["usuario"])) {
    include("funcionesConexion.php");
    $conexion = usarConexion();
    $conexion->query("USE Ciudadanos;");
    $resultado = $conexion->query("SELECT * FROM Agenda");
    echo "<a href='index.php'>Página Principal</a>";
    if ($resultado->rowCount() != 0) {
        echo "<p>Listado completo de registros:</p>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>";
        foreach ($resultado as $fila) {
            echo "<tr>
                <td>" . $fila["nombre"] . "</td>
                <td>" . $fila["apellidos"] . "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay ningún registro</p>";
    }
} else {
    header("Refresh: 5; url=login.php");
    exit("<h1>Usuario no encontrado. Redirigiendo...</h1>");
}
?>