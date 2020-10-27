carregaCiudades = function() {
    // var iconCarregando = $("<img src='img/ajax-loader.gif' class='icon'/> <span>Carregando dados. Por favor aguarde...</span>"); //Carrega a Gif
    var url = "includes/a_ciudad.php";//Arquivo php que será chamado no GET
    var param = "0";//GET ALL 
    var departamento = document.getElementById("departamento");
    var departId = departamento.options[departamento.selectedIndex].value;
    var primero = 'selected="selected"';

    $('#ciudad').empty();
    //Vamos usar o metodo generico
    $.ajax({
        type:"GET",            
        url: url,
        cache: false,
        contentType: 'application/json;',
        dataType: "json",
        data: { "parametro":param, "depart":departId },
        beforeSend: function(){
            // $("#ajaxload2").html(iconCarregando);
        },
        complete: function(){
            // $(iconCarregando).remove();             
        },      
        success: function(data) {
            $.each(data.message, function(i,obj){
                $('#ciudad').append('<option value="' + obj.id + '"'+ primero+'>' + obj.nombre + '</option>');
                primero = '';
            });
            $('#ciudad').selectpicker('refresh');
        },
        error: function(data) {
            // $("#ajaxload2").empty();
            // $("#ajaxload2").html("<p><b> Erro ao carregar os dados.</b></p>" );          
        }
    }); 
}