<?php
include 'ConexionMySql.php';

$seleccion = mysql_query("SELECT * FROM personas1");

while ($fila = mysql_fetch_array($seleccion)) {
    
    echo $fila['nombre']." ".$fila['apellido']." ".$fila['tel']." ".$fila['email'];
    echo "<br>";
}
mysql_close($con);
?>
