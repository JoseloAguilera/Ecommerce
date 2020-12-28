    <?php if (isset($mensaje)) {?>
    $(document).ready(function(){
        $("#modal-mensaje").modal("show");
    });
    <?php
        unset($mensaje);
    } ?>
    
    //DataTable
    $(document).ready(function() {
        $('#tabladatos').DataTable( {
            dom: 'Bfrtip',
            order: [[ 0, "asc" ]],
            orientation: 'landscape',
            pageSize: 'LEGAL',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'pdfHtml5'
            ]
        });
    });
    
    // $('#AltModal').on('show.bs.modal', function (event) {
    $(document).ready(function(){
        $(document).on('shown.bs.modal','#AltModal', function (event) {
            var button = $(event.relatedTarget) // objeto que disparó el modal
            var codigo = button.data('codigo')
            var nombre = button.data('nombre')
            var apellido = button.data('apellido')
            var razon = button.data('razon')
            var tipo = button.data('tipo')
            var numero = button.data('numero')
            var mayorista = button.data('mayorista')
            var telefono = button.data('telefono')
            var email = button.data('email')
            var url = button.data('url')

            // Actualiza los datos del modal
            var modal = $(this)
            modal.find('.modal-title').text('Cliente ' + nombre);
            modal.find('#codigo').val(codigo);
            modal.find('#nombre').val(nombre);
            modal.find('#apellido').val(apellido);
            modal.find('#razon').val(razon);
            modal.find('#tipo').val(tipo);
            modal.find('#numero').val(numero);
            modal.find('#telefono').val(telefono);
            modal.find('#email').val(email);

            if (mayorista == "1") {
                $('#toggle').bootstrapToggle('on')
            } else {
                $('#toggle').bootstrapToggle('off')
            }

            modal.find('#imgurl').val(url);
            if (url == "") {
                url = "no-image.png"
            }
            // document.getElementById("img-alt").src="../img/revendedores/"+url;
        })
    });
    
    // modal para confirmar si quiere remover el registro
    var modalConfirm = function(callback){
        //botón que llama el modal
        $("#btn-confirmar").on("click", function(){
            $("#mi-modal").modal('show');
        });
    
        //si quiere remover el registro
        $("#modal-btn-si").on("click", function(){
            callback(true);
            $("#mi-modal").modal('hide');
        });
    
        //si no quiere remover el registro
        $("#modal-btn-no").on("click", function(){
            callback(false);
            $("#mi-modal").modal('hide');
        });
    };
    //función que trabaja con la respuesta del modal (sí o no)
    modalConfirm(function(confirm){
        if(confirm){
            //Acciones si el usuario confirma
            $("#btn-excluir").click();
        }
    });
    
    // formato para campos moneda
    String.prototype.reverse = function(){
        return this.split('').reverse().join('');
    };
    
    function formatoMoneda(campo, evento){
        var tecla = (!evento) ? window.event.keyCode : evento.which;
        var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
        var resultado  = "";
        var mascara = "###.###.###.###";
        mascara = mascara.reverse();
        for (var x=0, y=0; x<mascara.length && y<valor.length;) {
            if (mascara.charAt(x) != '#') {
                resultado += mascara.charAt(x);
                x++;
            } else {
                resultado += valor.charAt(y);
                y++;
                x++;
            }
        }
        campo.value = resultado.reverse();
    }
    
    function formatoNro(campo, evento){
        var tecla = (!evento) ? window.event.keyCode : evento.which;
        var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
        var resultado  = "";
        var mascara = "#####";
        mascara = mascara.reverse();
        for (var x=0, y=0; x<mascara.length && y<valor.length;) {
            if (mascara.charAt(x) != '#') {
                resultado += mascara.charAt(x);
                x++;
            } else {
                resultado += valor.charAt(y);
                y++;
                x++;
            }
        }
        campo.value = resultado.reverse();
    }

    //función responsable por mostrar la imagen que el usuario eligió en el elemento img
    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //         reader.onload = function (e) {
    //             // document.getElementById("img").src = e.target.result;
    //             document.getElementById("img-alt").src = e.target.result;
    //             // $(input).next().attr('src', e.target.result)
    //         };
    //         reader.readAsDataURL(input.files[0]);
    //     }
    //     else {
    //         var img = input.value;
    //         // document.getElementById("img").src=img;
    //         document.getElementById("img-alt").src=img;
    //         // $(input).next().attr('src',img);
    //     }
    // } 
    
    // function verificaMostraBotao(){
    //     $('input[type=file]').each(function(index){
    //         if ($('input[type=file]').eq(index).val() != ""){
    //             readURL(this);
    //             $('.hide').show();
    //         }
    //     });
    // }
    
    // $('input[type=file]').on("change", function(){
    //   verificaMostraBotao();
    // });
    
    // $('.hide').on("click", function(){
    //     $(document.body).append($('<input />', {type: "file" }).change(verificaMostraBotao));
    //     $(document.body).append($('<img />'));
    //     $('.hide').hide();
    // });