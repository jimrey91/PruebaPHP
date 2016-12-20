<?php

/*Matrices Asociativas y multidimensionales
 * 
 */
$cliente[0]['nombre']= 'Daniel';
$cliente[0]['telefono']= '78479261';
$cliente[0]['correo']= 'daniel@hotmail.com';

$cliente[1]['nombre']= 'Jaime';
$cliente[1]['telefono']= '78303715';
$cliente[1]['correo']= 'jaime@hotmail.com';

$cliente[2]['nombre']= 'Arnoldo';
$cliente[2]['telefono']= '78569261';
$cliente[2]['correo']= 'arnoldo@gmail.com';

//recorrer arreglo con for y foreach
for ($i= 0; $i <=2; $i++) {
    
$lista = array($cliente[$i]['nombre']);
foreach ($lista as $lista1);

$lista01 = array($cliente[$i]['telefono']);
foreach ($lista01 as $lista2);

$lista02 = array($cliente[$i]['correo']);
foreach ($lista02 as $lista3);

echo "$lista1 <br> $lista2 <br> $lista3 <br>";

}

//echo $cliente[1]['nombre'].' <br> '.$cliente[1]['telefono'].' <br> '.$cliente[1]['correo'];

?>
