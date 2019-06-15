<?php
require_once 'app/controller/listar_c.php';

//print_r($resultauo);

setlocale(LC_ALL,'es_ES.UTF-8');
$fecha1=new DateTime();
$fecha= strftime("%A, %d de %B del %Y", $fecha1->getTimestamp());

print_r($fecha);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- estilos del select2 -->
    <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- codigo javascript de la libreria -->
    <script src="vendor/select2/dist/js/select2.min.js"></script>
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
    <input type="text" id="identificador">
    <div class="table-responsive">
    <table id="idtabla" class="table table-hover">   
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
   <tbody>

    <!-- <?php 
        foreach ($resultauo as $value) {        
        $dn=$value['dni'];
        $nom=$value['nombres'];
        $apa=$value['apePaterno'];
        $ama=$value['apeMaterno'];
        echo "<tr id='$dn'>";
        echo '<td> <input type="checkbox"></td>';
        echo '<td>' . $value['dni'] . '</td>';
        echo '<td>' . $value['apePaterno'] . '</td>';
        echo '<td>' . $value['apeMaterno'] . '</td>';
        echo '<td >' . $value['nombres'] . '</td>';
        echo '<td width="10%">' . $value['fecNacimiento'] . '</td>';
        echo '<td>' . $value['sexo'] . '</td>';
        echo '<td>' . $value['codTurno_fk'] . '</td>';
        echo '<td>' . $value['descripcion'] . '</td>';

        // echo $dn;
        // echo '<td><a href="eliminar?dni='.$dn.'">eliminar</a></td>';
        echo '<td><button class="" id="botonactualizar" data-dnid="'.$dn.'" data-toggle="modal" data-target="#exampleModal">Actualizar</button></td>';
        echo '<td><button class="btn btn-info" id="btn-eliminar" data-dni="'.$dn.'">Eliminar</button></td>';
        echo '<td><a href="fprmularioreporte?nombre='.$nom.'&apellido1='.$apa.'&apellido2='.$ama.'">reportar</a></td>';
        //echo '<td><a id="cclinico" href="tarjeta.php?dni=' . $dni . '">eliminar</a></td>';
                
        echo "</tr>";         
        
    }
    //print_r($tardanza);
    ?> -->
   </tbody>
    </table>
        <label for="">Alumno:</label>
            <select name="alumn" id="alumi">
                <option value="">seleccione un Alumno</option>
            </select>
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Formulario de Registro de practicantes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div class="container"  >
            <div class="row justify-content-around" >                 
                  
    <!-- <form autocomplete="off" method="POST" action="registrar" name="form" id="form" >     -->
    <form autocomplete="off" name="formactuallizar" id="formactuallizar" >           
        <div class="form-row">           
            <div class="form-group col-md-6">
                <label>Dni:</label>
                <input type="text" class="form-control" name="dni" id="dni"  placeholder="Escriba dni...">
            </div>
            <div class="form-group col-md-6">
                <label>A. Paterno:</label>
                <input type="text" class="form-control" name="apePa" id="apePa" placeholder="Escriba su apellido Paterno...">
            </div>            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>A. Materno:</label>
                <input type="text" class="form-control" name="apeMa" id="apeMa" placeholder="Escriba su apellido Materno...">
            </div>
            <div class="form-group col-md-6">
                <label>Nombres:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba su Nombres...">
            </div>        
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6"> 
                <label>Fecha de Nacimiento:</label>              
               <input type="date" class="form-control"  name="fech" id="fech" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Género:</label>
                <select type="text" class="form-control" name="s" id="s1" placeholder="Seleccione género...">
                    <option>Seleccione su género</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>            
        </div>
        <div class="form-row">            
            <div class="form-group col-md-6">
                <label>CodTurno:</label>
                <select type="text" class="form-control" name="ct" id="ct" placeholder="Seleccione género...">
                    <option>Seleccione su código</option>
                    <option value="T1">T1</option>
                    <option value="T2">T2</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Descripción:</label>
                <textarea type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Escriba una descripción suya..."></textarea>
            </div>
        </div>        
                            
            </div>
    </div>
        </div>
        <div class="modal-footer">            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="botonparaactuar" >Save changes</button>            
        </div>
        </div>
    </form>

    </div>
    </div>
    </div>
    </div>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="public/assets/js/eliminar.js"></script>
</body>
</html>