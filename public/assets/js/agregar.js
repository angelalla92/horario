$('#form').submit(function(e){
    e.preventDefault();
    var datitos=$(this).serialize();
    
    // console.log(datos);
    $.ajax({
        url: 'ajax/registrar_cA.php',
        method: 'post',
        data: datitos
    }).done(function(XD){
        if(XD=='registro'){
            alert('successfully');
            $('#form input').val("");
            $('#form select').val("");
            $('#form textarea').val("");
            
        }else{
            alert('overrul');
        }
    })
})

