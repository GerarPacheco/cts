$(document).ready(function () {
    var tabla= $("#usuarios").DataTable({
        responsive: true,
        searchDelay: 500,
        processing: true,
        serverSide: true,
        "language": {
            "url": datatable_spanish
        },
        ajax: url_ajax_datatable,
        columns: [
            {data: 'name'},
            {data: 'email'},
            { data: 'action', orderable: false, className:'text-center'},
        ],
        "drawCallback": function (settings) {
            $('.delete').click(function () {
                var x = $(this).data("n");
                $('#eliminar').modal('show');
                var url = $(this).attr('data-url');
                $('#form_eliminar').attr('action', url);
            });
        },
    });
    
    //Crear
    $('#crear').click(function () {
        $('#titulo-modal').text('Crear Usuario');
        $('#nombre').val('');
        $('#email').val('');
        $('#telefono').val('');
        $('#contrasena').val('');
        $('#modal').modal('show');
        $('#guardar').click(function () {
            name = $('#nombre').val();
            email = $('#email').val();
            telefono = $('#telefono').val();
            contrasena = $('#contrasena').val();
            tipo_usuario = $('#tipo_usuario').val();
            $.ajax({
                url: url_guardar_usuario,
                type: 'POST',
                data: {
                    'name':name,
                    'email': email,
                    'telefono': telefono,
                    'password': contrasena,
                    'tipo_usuario': tipo_usuario,
                },
                error: function (result) {
                    $('.form-control-feedback').hide();
                    $.each(result.responseJSON.errors, function(e,v){
                        $('#error_' + e).html(v[0].substr(0, 1).toUpperCase() + v[0].substr(1)).show(200);
                    })
                },
                success: function (result) {
                    $('#modal').modal('hide');
                    $('#exito').html('El usuario ha sido creado');
                    $('#div_exito').slideToggle(); 
                    tabla.destroy();
                    $("#usuarios").DataTable({
                        responsive: true,
                        searchDelay: 500,
                        processing: true,
                        serverSide: true,
                        "language": {
                            "url": datatable_spanish
                        },
                        ajax: url_ajax_datatable,
                        columns: [{
                                data: 'name'
                            },
                            {
                                data: 'email'
                            },
                            {
                                data: 'action',
                                orderable: false,
                                className: 'text-center'
                            },
                        ],
                        "drawCallback": function (settings) {
                            $('.delete').click(function () {
                                var x = $(this).data("n");
                                $('#eliminar').modal('show');
                                var url = $(this).attr('data-url');
                                $('#form_eliminar').attr('action', url);
                            });
                        },
                    });
                    
                }
            });
        })
    });
});