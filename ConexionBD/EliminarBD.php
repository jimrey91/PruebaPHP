<?php
include 'ConexionMySql.php';

$sql = "DELETE FROM personas1 WHERE idnombre = 2";

mysql_query($sql);
echo 'Registro eliminado';
mysql_close($con);
?>
