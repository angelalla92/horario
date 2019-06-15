// $('#btn-eliminar').click(function(){
//     alert("asds");
// })

$(document).on('click','#btn-eliminar',function(){
    var barny=$(this).data('dni');

    $.ajax({
        url: 'ajax/eliminar.php',
        method:'post',
        data: {amigos: barny}
    }).done(function(res){
        if(res=="bien"){
            $('#'+barny).remove()
        }else{
            alert("No se elimino");
        }
    })

})

$(document).on('click','#botonactualizar',function(){
    var saurio=$(this).data('dnid');

    $.ajax({
        url: 'ajax/listandopracticantes.php',
        method: 'post',
        data:{dino:saurio},
        dataType:"json",

    }).done(function(Aaron){
        
        var data = Aaron[0];
        
        // console.log(data)
        $('#botonparaactuar').removeData();
        $('#botonparaactuar').attr('data-actualizar',data.dni)
        $('#dni').val(data.dni)
        $('#apeMa').val(data.apeMaterno)
        $('#apePa').val(data.apePaterno)
        $('#ct').val(data.codTurno_fk)
        $('#descripcion').val(data.descripcion)
        $('#fech').val(data.fecNacimiento)
        $('#nombre').val(data.nombres)
        $('#s1').val(data.sexo)
        
    })
})


$('#botonparaactuar').on('click',function(a){
    // a.preventDefault();
    var dniparaactualizar = $(this).data('actualizar')
    //serialize Codifique un conjunto de elementos de formulario como una cadena para el envío.
    //obtener todos los valores de los inputs y select etc
    var datitos2=$('#formactuallizar').serialize();
    
    var dniss=$('#dni').val();
    var apellidossm=$('#apeMa').val();;
    var apelidoss=$('#apePa').val();
    var codigoss=$('#ct').val();
    var descripcionss=$('#descripcion').val();
    var fechass=$('#fech').val();
    var nombress=$('#nombre').val();
    var sexoss=$('#s1').val();    
    // console.log(datitos2)
    $.ajax({
        url: 'ajax/actualizarpracticantes.php',
        method: 'post',
        data: datitos2
    }).done(function(XD2){
     
           if(XD2=="altualiso"){
               alert("practicante actualizado");
               $('#exampleModal').modal("hide");               
               $('#'+dniparaactualizar).html(`
               <td></td>
               <td>${dniss}</td>               
               <td>${apelidoss}</td>
               <td>${apellidossm}</td>
               <td>${nombress}</td>
               <td>${fechass}}</td>
               <td>${sexoss}</td>
               <td>${codigoss}</td>
               <td>${descripcionss}</td>              
               <td><button id="btn-eliminar" data-dni="${dniss}">Eliminar</button></td>            
               <td><a href="fprmularioreporte?nombre=${nombress}&apellido1=${apelidoss}&apellido2=${apellidossm}">reportar</a></td>
               <td><button class="" id="botonactualizar" data-dnid="${dniss}" data-toggle="modal" data-target="#exampleModal">Actualizar</button></td>
               `);
           }
        
    })

})

function angela(){
    $.ajax({
        url: 'ajax/listar_ajax.php',
        dataType: 'json',
    }).done(function(variable){
        // console.log(variable[0].apePaterno)
        $.each(variable,function(index,value){
            // console.log(index)
            $('#alumi').append(`<option value=${value.dni}>${value.apePaterno}</option>`);
            $('#idtabla').append(`<tr id=${value.dni}>
            <td></td>
            <td>${value.dni}</td>
            <td>${value.apePaterno}</td>
            <td>${value.apeMaterno}</td>
            <td>${value.nombres}</td>
            <td>${value.fecNacimiento}</td>
            <td>${value.sexo}</td>
            <td>${value.codTurno_fk}</td>
            <td>${value.descripcion}</td>
            <td><button id="btn-eliminar" data-dni="${value.dni}">Eliminar</button></td>            
            <td><a href="fprmularioreporte?nombre=${value.nombres}&apellido1=${value.apePaterno}&apellido2=${value.apeMaterno}">reportar</a></td>
            <td><button class="" id="botonactualizar" data-dnid="${value.dni}" data-toggle="modal" data-target="#exampleModal">Actualizar</button></td>
            </tr>`)
        })
      
    })
}

$(document).ready(function(){
    // alert('hola XD')
    angela();
    $('#alumi').select2();
})

$('#identificador').keyup(function(){
    var palabra= $(this).val();
    // console.log(palabra.length);
    // alert("asdasd");
    if(palabra.length>=2){
        console.log(palabra);
        // alert(palabra);
        $.ajax({
            url:'ajax/buscar_practicantes.php',
            dataType: 'json',
            method:'post',
            data:{palabra2: palabra}
        }).done(function(variable){
          console.log(variable)
          $("#idtabla tbody").html("");

          $.each(variable,function(index,value){
            // console.log(index)            
            $('#idtabla tbody').append(`<tr id=${value.dni}>
            <td></td>
            <td>${value.dni}</td>
            <td>${value.apePaterno}</td>
            <td>${value.apeMaterno}</td>
            <td>${value.nombres}</td>
            <td>${value.fecNacimiento}</td>
            <td>${value.sexo}</td>
            <td>${value.codTurno_fk}</td>
            <td>${value.descripcion}</td>
            <td><button id="btn-eliminar" data-dni="${value.dni}">Eliminar</button></td>            
            <td><a href="fprmularioreporte?nombre=${value.nombres}&apellido1=${value.apePaterno}&apellido2=${value.apeMaterno}">reportar</a></td>
            <td><button class="" id="botonactualizar" data-dnid="${value.dni}" data-toggle="modal" data-target="#exampleModal">Actualizar</button></td>
            </tr>`)
        })
        })
    }else if(palabra.length==0){  
        $("#idtabla tbody").html("");       
        angela();        
    } 
})
