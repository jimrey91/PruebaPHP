<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Objeto4
 *
 * @author Reyes
 */
class vehiculo {
    function acelerar() {
        echo "Estas acelerando";
    }
    function frenar() {
        echo "Estas frenando";
    }
    
    
}
// Uso de Herencia
class maquinaria extends vehiculo{
    function bajarPala() {
        echo "Estas bajando la pala";
    }
}

$auto = new vehiculo();
$retro = new maquinaria();
$ins = $retro ->bajarPala();

?>
