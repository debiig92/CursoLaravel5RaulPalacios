$(document).ready(function(){

    Cargar();

});

function Cargar(){
    var tablaDatos = $('#datos');
    var route = 'http://applaravel5rp.app/generos';

    $('#datos').empty();

    $.get(route, function(res){

        if (res.success) {
            $(res.data).each(function(key, value){
                htmlContent = '<tr><td>' + value.genre + "</td><td>";
                htmlContent += "<button value='" + value.id + "' OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button>";
                htmlContent += "<button class='btn btn-danger'>Eliminar</button></td></tr>";
                tablaDatos.append(htmlContent);
            });
        } else {
            alert('error');
        }

    });
}

function Mostrar(btn){
    console.log(btn.value);
    var route = "http://applaravel5rp.app/genero/" + btn.value + "/edit";

    $.get(route, function(res){
        if (res.success) {
            $("#genre").val(res.data.genre);
            $("#id").val(res.data.id);
        } else {
            alert('error');
        }

    });
}

$("#actualizar").click(function(){
    var value = $("#id").val();
    var dato = $("#genre").val();
    var route = "http://applaravel5rp.app/genero/" + value;
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {genre: dato},
        success: function(){
            Cargar();
        }
    });

});
