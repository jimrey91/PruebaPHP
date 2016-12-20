<?php

$archivo = "archivo2.txt";
$manejador = fopen($archivo, "r");

echo "<table width=100% border=1px>";
while ($datos = fgetcsv($manejador, 1000000, "|")) {
    
    $nombre = $datos[0];
    $edad = $datos[1];
    $dui = $datos[2];
    echo '
        <tr>
            <td border=1>'.$nombre.'</td>
            <td border=1>'.$edad.'</td>
            <td border=1>'.$dui.'</td>
        </tr>     

    ';
}

echo '</table>';
fclose($manejador);

?>
