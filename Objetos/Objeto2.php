<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Objeto2
 *
 * @author Reyes
 */
class muestraTexto {
    
    function muestraTexto($texto) {
        echo "El texto pasado por parametro es: ". $texto;
    
        
    } 
    
    function suma($valor1,$valor2){
        echo $valor1 + $valor2;
    }
}
    $texto1 = "Curso de PHP";
    $texto = new muestraTexto($texto1);
    echo '<br/>';
    $val1=2;
    $val2=2;
    $texto->suma($val1, $val2);
?>
