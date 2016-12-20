<html>
<link type="text/css" rel="stylesheet" href="../css/bootstrap.css"/>
<?php


/*Listar Arreglo
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

function listarArreglo($cliente){

for ($i=0; $i<=2; $i++){
    
echo '<table border="1" class="table ">


<tr>
    <td>Nombre: </td>
    <td>'. $cliente[$i]['nombre']. '</td>
</tr>
<tr>
    <td>Telefono: </td>
    <td>'. $cliente[$i]['telefono'].'</td>
</tr>
<tr>
    <td>Correo: </td>
    <td>'. $cliente[$i]['correo'].'</td>
</tr>

</table>
';
}
}
listarArreglo($cliente);
?>
</html>