

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$texto = 'daniel';
function hola(){
    global $texto;
    echo 'hola ' . $texto;
}
hola();

?>
