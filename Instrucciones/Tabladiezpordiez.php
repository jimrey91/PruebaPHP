
<html>
    <table border ="1" cellspacing="0">
<?php


$numero=100;
 for($numero1=1; $numero1<=10; $numero1++){
     echo "<tr>";
     for ($numero2 = 1; $numero2 <= 10; $numero2++) {
         echo "<td>".$numero."</td>";
         $numero -= 1;
     }
     echo "</tr>";
 }

?>
    </table>
</html>