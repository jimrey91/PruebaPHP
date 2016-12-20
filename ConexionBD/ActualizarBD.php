<?php
include 'ConexionMySql.php';

$sql = "UPDATE personas1 SET email='jimmy_melendez@hotmail.com' WHERE nombre ='Daniel'
    AND apellido = 'Reyes'";

mysql_query($sql);
echo 'Registro actualizado';
mysql_close($con);

?>
