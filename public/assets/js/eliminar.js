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
        data:{dino:saurio}

    }).done(function(){

    })
})