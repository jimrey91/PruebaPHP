<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="procesaForm.php" method="GET">
            <table border="0">
                <tbody>
                    <tr>
                        <td>Nombre :</td>
                        <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>Apellido :</td>
                        <td><input type="text" name="apellido"></td>
                    </tr>
                    <tr>
                        <td>DNI :</td>
                        <td><input type="text" name="dni"></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                    </tr>
                </tbody>
            </table>          
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
