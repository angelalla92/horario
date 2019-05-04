<?php
require_once __DIR__.'/../../vendor/autoload.php';
require_once 'app/controller/listar_c.php';
//print_r($resultauo);
ob_start();
setlocale(LC_ALL,'es_ES.UTF-8');
$fecha1=new DateTime();
$fecha= strftime("%A, %d de %B del %Y", $fecha1->getTimestamp());

$falta=  new DateTime($_POST["fech"]);
$dia= strftime("%A, %d de %B del %Y", $falta->getTimestamp());
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
<style>
        b{
            font-weight: normal;
            font-family: Calibri;
            font-size:13px;
            
        }
        h4{
            text-align: right;
            font-family: Calibri;
            font-size: 16px;
            
        }
       
       
        span{
            font-family: Calibri;
            font-size: 13px;
        }
        p{
            font-family: Calibri;
            font-size: 13px;
        }


    </style>
    <h4>Justificación de inasistencia</h4>
    <br><br><br>
    <span>Lima, <?php echo $fecha;?></span><BR><br><br><br><br>
    <b>SEÑOR INGENIERO</b><br><br>
    <b>MÁXIMO OBREGÓN RAMOS</b><br><br>
    <b>JEFE OERAAE FIM</b><BR><br>
    <span>Presente.- <?php echo $_POST["apellido"],"; ", $_POST["apellidomaterno"]," ", $_POST["apellidopaterno"]?></span><br><br> 
    <p>Me dirijo a usted para saludarlo y a la vez hacer de su conocimiento que el día <?php echo $dia?>, no pude asistir a la OERAAE <?php echo $_POST["texto"]; ?>, para lo cual adjunto a la presente los documento para justificar mi inasistencia.  <p><br>
    <span>Sin otro particular, quedo de usted.</span><br><br><br>
    <span>Atentamente.</span><BR><br><br><br><br>
    <div style="width:500px; padding:3px; align:center;">
    <div style="width:245px; float:left;">
    <span>............................................................<br>
    </span><span>APELLIDOS Y NOMBRES</span></div>
    <div style="width:245px; float:right;"><span>............................................................<br></span><span>
        FIRMA</span></div><BR>
    </div>
</body>
<!-- composer -> gestor de librerias,-->
</html>

<?php
$html=ob_get_clean();
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

?>