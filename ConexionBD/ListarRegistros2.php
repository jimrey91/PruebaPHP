<?php
include 'ConexionMySql.php';

$sql = "SELECT * FROM personas1 ORDER BY nombre DESC";
$consulta = mysql_query($sql);

while ($fila = mysql_fetch_array($consulta)) {
    
    echo $fila['nombre']." ".$fila['apellido']." ".$fila['tel']." ".$fila['email'];
    echo "<br>";
}
mysql_close($con);
?>
