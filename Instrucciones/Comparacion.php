<?php

$a = 2;
$b = 5;
$c = 3;
$d = 7;


if (($a > $b) and ($a > $c) and ($a > $d) ){
    echo  $a;
}else if (($b > $c) and ($b > $d) ) {
    echo  $b;
}else if (($c > $b) and ($c > $d)) {
    echo  $c;
}else{
    echo $d;
}
echo '<br>';



?>
