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

    // console.log(datitos2)
    $.ajax({
        url: 'ajax/actualizarpracticantes.php',
        method: 'post',
        data: datitos2
    }).done(function(XD2){
     
           if(XD2=="altualiso"){
               alert("practicante actualizado");
               $('#exampleModal').modal("hide");
           }
        
    })

})