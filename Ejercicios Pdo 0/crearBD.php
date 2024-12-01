<?php
include("funcionesConexion.php");
$conexion = crearBD("Ciudadanos");
$conexion->query("CREATE TABLE Persona (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    localidad VARCHAR(50)
);");
$conexion->query("INSERT INTO Persona (nombre, localidad) VALUES
    ('juan', 'móstoles'),
    ('maría', 'villaviciosa');");
echo "<a href='inicio.php'>Volver a la página inicial</a>";
echo "<p>Seleccionada la BD: Ciudadanos</p>";
echo "<p>Creada la tabla Persona con los siguientes campos y registros:</p>";
$resultado = $conexion->query("SELECT * FROM Persona;");
echo "<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Localidad</th>
    </tr>";
foreach ($resultado as $valor) {
    echo "<tr>
        <td>" . $valor["id"] . "</td>
        <td>" . $valor["nombre"] . "</td>
        <td>" . $valor["localidad"] . "</td>
    </tr>";
}
echo "</table>";
?>