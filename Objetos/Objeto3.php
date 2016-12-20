<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Objeto3
 *
 * @author Reyes
 */
class muestraTexto {
    var $atributo;
    function muestraTexto($texto) {
        $this->atributo = $texto;
        echo $this->atributo;
    }
}
$texto = new muestraTexto("Curso de programacion de PHP");
?>
