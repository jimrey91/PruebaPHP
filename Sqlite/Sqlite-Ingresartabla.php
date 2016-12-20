<?php
$conexion = new SQLite3('videoteca.db');
$consulta = $conexion->query('INSERT INTO Videos(titulo,actores,director)VALUES (
                            "Indiana Jones I", "Harrison Ford", "George Lucas")');

?>
