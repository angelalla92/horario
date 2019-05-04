<?PHP

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <FORM method="post" action="reporte">
        <h1>Hola</h1>
        <input id="apellido" name="apellido" value="<?php echo $_GET["nombre"] ?>"><br><br>
        <input id="apellidomaterno" name="apellidomaterno" value="<?php echo $_GET["apellido1"]?>"><br><br>
        <input id="apellidopaterno" name="apellidopaterno" value="<?php echo $_GET["apellido2"]?>"><br><br>
        <input type="date" name="fech" id="fech"><br><br>
        <textarea id="texto" name="texto" cols="30" rows="10"></textarea><br><br>
       <input type="submit" value="Generar"><br>   
    </FORM><BR><BR>
    
    <table BORDER="1">
    <tr>
    <td>DNI</td>
    <td>HORA</td>
    </tr>
    
    <?php
    /*
    forech( $value){
      
        echo'<tr>';
        echo'<td></td>';
        echo'<td></td>';
        echo'</tr>';
        echo'</table>';
    
    }
*/
    ?>
    
    </TABLE>
</body>
</html>