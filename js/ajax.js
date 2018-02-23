 $( document ).ready(function() {
    $('#buscar').click(function() {
    var index=$('#menu').val();
    $("#formi").show();
    $("#bienvenida").hide();
    $.ajax({
            url: '../php/asin.php', //archivo de servidor al que se tira al AJAX 
            type: "POST",
            data: ({data: index}),
            success: function(data){
                console.log(data);
                $("#aqui").html(data);
            }
        });        
    });
    $('#rem').click(function() {
    $("#bienvenida").show();
    $("#formi").hide();
    });
});