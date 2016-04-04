// ECMAScript 5
/*$('#state').change(function(event){
    $.get("towns/" + event.target.value + "", function(response, state){
        $('#town').empty();

        for (var i = 0; i < response.length; i++) {
            $("#town").append("<option value='" + response[i].id + "'>" + response[i].name + "</option>");      
        }
    });
});*/

// ECMAScript 6
$('#state').change(event => {
    $.get(`towns/${event.target.value}`, function(res, sta){
        $('#town').empty();
        res.forEach(element => {
            $("#town").append(`<option value=${element.id}>${element.name}</option>`);
        });
    });
});