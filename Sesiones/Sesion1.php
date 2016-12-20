<?php

session_start();
$variable = 'valor de sesion1.php';
$_SESSION["variabledesesion"]= $variable;
echo "<a href='Sesion2.php'>Link a Sesion2.php</a>";




?>
