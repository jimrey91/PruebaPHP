<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function traductor($palabra){
    
    switch ($palabra){
        case ('Hello'):
            echo 'Hola';
            break;
        case ('Teacher'):
            echo 'Profesor';
            break;
    }    
}
$palabraInglesa = 'Hello';

traductor($palabraInglesa);
?>
