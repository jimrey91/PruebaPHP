<?php

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
mysql_query("INSERT INTO personas1 (nombre, apellido, tel, email) VALUES ('Daniel', 'Reyes', 
    78479261, 'danielreyes00@gmail.com')");

mysql_query("INSERT INTO personas1 (nombre, apellido, tel, email) VALUES ('Samuel', 'Reyes', 
    72478264, 'sam_my_mr@hotmail.com')");
mysql_close($con);
?>
