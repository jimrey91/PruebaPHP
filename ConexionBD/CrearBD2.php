<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$con =  mysql_connect("localhost", "daniel", "Reyes");
if (!$con) {
    die("No se ha podido realizar la conexion a la BD". mysql_error());
}
//if (mysql_query("CREATE DATABASE prueba", $con)){
//    
//    echo "Se creo correctamente la base de datos";
//}else{
//    echo "No se pudo crear la base de datos". mysql_error();
//}

mysql_select_db("prueba", $con);
$sql = "CREATE TABLE personas1(
        idnombre int not null auto_increment,
        nombre varchar(25),
        apellido varchar(25),
        tel int,
        email varchar(60),
        primary key (idnombre)
)";

mysql_query($sql, $con);
mysql_close($con);

?>

