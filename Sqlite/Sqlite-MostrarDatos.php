<table border="1">
    <tr>
        <td>Titulo</td>
        <td>Actores</td>
        <td>Directores</td>
    </tr>
<?php

$conexion = new SQLite3('videoteca.db');
$consulta = $conexion->query('SELECT * FROM Videos');
//$res = $conexion->

while ($fila = $consulta->fetchArray()) {
    echo "<tr>";
        echo "<td>".$fila['titulo']."</td>";
        echo "<td>".$fila['actores']."</td>";
        echo "<td>".$fila['director']."</td>";
    echo "</tr>";
}
?>
</table>
