<?php
session_start();

if (isset($_SESSION["usuario"])) {
    include("funcionesConexion.php");
    $conexion = usarConexion();
    $conexion->query("USE Ciudadanos;");
    $resultado = $conexion->query("SELECT * FROM Agenda");

    if (isset($_POST["enviar"])) {
        if (isset($_POST["borrar"])) {
            foreach ($_POST['borrar'] as $id) {
                $consulta = $conexion->prepare("DELETE FROM Agenda WHERE id = :id");
                $consulta->bindParam(":id", $id);
                $consulta->execute();
            }
            header("Location: borrar.php");
            exit;
        }
    }
    echo "<a href='index.php'>Página Principal</a>";
    if ($resultado->rowCount() != 0) {
        echo "<p>Listado completo de registros:</p>
            <form action='borrar.php' method='post'>
                <table>
                    <tr>
                        <th>Borrar</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                    </tr>";
        foreach ($resultado as $fila) {
            echo "<tr>
                <td><input type='checkbox' name='borrar[]' value='" . $fila["id"] . "'></td>
                <td>" . $fila["nombre"] . "</td>
                <td>" . $fila["apellidos"] . "</td>
            </tr>";
        }
        echo "</table>
                <input type='submit' value='Borrar registro' name='enviar'>
                <input type='reset' value='Reiniciar formulario'>
            </form>";
    } else {
        echo "<p>No hay ningún registro</p>";
    }
} else {
    header("Refresh: 5; url=login.php");
    exit("<h1>Usuario no encontrado. Redirigiendo...</h1>");
}
?>