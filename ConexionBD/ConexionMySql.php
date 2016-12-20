<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$con =  mysql_connect("localhost", "daniel", "Sql11");
if (!$con) {
    die("No se ha podido realizar la conexion a la BD". mysql_error());
}
mysql_select_db("prueba", $con);
//echo "Se conecto correctamente";

?>
