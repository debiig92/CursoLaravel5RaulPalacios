$(document).on('click', '.pagination a', function(e){
    e.preventDefault();

    // la funcion split divide la cadena el 1 significa que se optendra el lado derecho de la cadena
    var page = $(this).attr('href').split('page=')[1];
    var route = "http://appmovie.app/usuario";

    $.ajax({
        url: route,
        data: {page: page},
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $('.users').html(data);
        }
    });
});
