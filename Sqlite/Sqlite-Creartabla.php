<?php

$conexion = new SQLite3('videoteca.db');
$consulta = $conexion->query('CREATE TABLE Videos(
                               id integer primary key,
                               titulo varchar(200),
                               actores text,
                               director varchar(100)
                               )');
?>
