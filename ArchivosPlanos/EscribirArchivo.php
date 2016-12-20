<?php

$archivo = "archivo.txt";
$contenido = "Este texto sobrescribe al anterior texto--- saludos";

//$archivoa = fopen($archivo, 'a+');
$archivoa = fopen($archivo, 'w+');
fwrite($archivoa, $contenido);
?>
