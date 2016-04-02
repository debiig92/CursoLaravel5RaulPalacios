$(document).ready(function(){

    Cargar();

});

function Cargar(){
    var tablaDatos = $('#datos');
    var route = 'http://appmovie.app/generos';

    $('#datos').empty();

    $.get(route, function(res){

        if (res.success) {
            $(res.data).each(function(key, value){
                htmlContent = '<tr><td>' + value.genre + "</td><td>";
                htmlContent += "<button value='" + value.id + "' OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button>";
                htmlContent += "<button value='" + value.id + "' OnClick='Eliminar(this);' class='btn btn-danger'>Eliminar</button></td></tr>";
                tablaDatos.append(htmlContent);
            });
        } else {
            alert('error');
        }

    });
}

function Mostrar(btn){
    console.log(btn.value);
    var route = "http://appmovie.app/genero/" + btn.value + "/edit";

    $.get(route, function(res){
        if (res.success) {
            $("#genre").val(res.data.genre);
            $("#id").val(res.data.id);
        } else {
            alert('error');
        }

    });
}


function Eliminar(btn){
    var route = "http://appmovie.app/genero/" + btn.value;
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(res){
            Cargar();
            $("#msj-succ").html(res.mensaje);
            $("#msj-success").fadeIn();
        }
    });
}

$("#actualizar").click(function(){
    var value = $("#id").val();
    var dato = $("#genre").val();
    var route = "http://appmovie.app/genero/" + value;
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {genre: dato},
        success: function(res){
            Cargar();
            $('#myModal').modal('toggle');
            $("#msj-succ").html(res.mensaje);
            $("#msj-success").fadeIn();
        }
    });

});
