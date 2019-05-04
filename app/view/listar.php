<?php
require_once 'app/controller/listar_c.php';

//print_r($resultauo);

setlocale(LC_ALL,'es_ES.UTF-8');
$fecha1=new DateTime();
$fecha= strftime("%A, %d de %B del %Y", $fecha1->getTimestamp());

// print_r($fecha);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="public/assets/js/asistencia.js"></script> -->
    <title>Document</title>
</head>
    

<body>
<style>
    body{
        /* background: #617de8; */
    }
</style>
    <div class="container-fluid">
    <h3>listado de alumnos</h3>
    <div class="table-responsive">
    <table class="table table-striped"">   
    <thead class="thead-dark">
    <tr>
        <th>select</th>
        <th>DNI</th>
        <th>APE. PATERNO</th>
        <th>APE. MATERNO</th>
        <th>NOMBRES</th>
        <th>FECHA</th>
        <th>SEXO</th>
        <th>CODTORNO</th>
        <th>DESCRIPCION</th>
        <th>ELIMINAR</th>
        <th>REPORTAR</th>
        <th>ACTUALIZAR</th>
    </tr>
   </thead>
    <?php 
        foreach ($resultauo as $value) {        
        $dn=$value['dni'];
        $nom=$value['nombres'];
        $apa=$value['apePAterno'];
        $ama=$value['apeMaterno'];
        echo "<tr id='$dn'>";
        echo '<td> <input type="checkbox"></td>';
        echo '<td>' . $value['dni'] . '</td>';
        echo '<td>' . $value['apePAterno'] . '</td>';
        echo '<td>' . $value['apeMaterno'] . '</td>';
        echo '<td >' . $value['nombres'] . '</td>';
        echo '<td width="10%">' . $value['fecNacimiento'] . '</td>';
        echo '<td>' . $value['sexo'] . '</td>';
        echo '<td>' . $value['codTurno_fk'] . '</td>';
        echo '<td>' . $value['descripcion'] . '</td>';

        // echo $dn;
        // echo '<td><a href="eliminar?dni='.$dn.'">eliminar</a></td>';
        echo '<td><button class="" id="botonactualizar" data-dnid="'.$dn.'" data-toggle="modal" data-target="#exampleModal">Actualizar</button></td>';
        echo '<td><button class="btn btn-info" id="btn-eliminar" data-dnid="'.$dn.'">Eliminar</button></td>';
        echo '<td><a href="fprmularioreporte?nombre='.$nom.'&apellido1='.$apa.'&apellido2='.$ama.'">reportar</a></td>';
        //echo '<td><a id="cclinico" href="tarjeta.php?dni=' . $dni . '">eliminar</a></td>';
                
        echo "</tr>";         
        
    }
    //print_r($tardanza);
    ?>

    </table>

<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>


    </div>
    </div>
    <script src="public/assets/js/eliminar.js"></script>
</body>
</html>