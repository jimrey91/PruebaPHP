<?php

$num1 = 16;
$num2 = 4;

echo $num1 + $num2 . '<br>';
echo $num1 - $num2 . '<br>';
echo $num1 * $num2 . '<br>';
echo $num1 / $num2 . '<br>';

$num1 += 3;
echo $num1 . '<br>';

$num3 = 3;
$num4 = 4;

if($num3 == $num4){    

    echo 'Son iguales';
}else{
    echo 'No son iguales';
}
 echo '<br>';

$num5 = 16;
$num6 = 16;
$num7 = 16;

if(($num5 <= $num6) || ($num5 == $num7)) {    

    echo 'Se cumple la condicion';
}else{
    echo 'No se cumple la condicion';
}

?>
