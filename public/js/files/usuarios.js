$(document).ready(function () {
    function datatable(){
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
                    data: 'role'
                },
                {
                    data: 'action',
                    orderable: false,
                    className: 'text-center'
                },
            ],
            "drawCallback": function (settings) {
                $('.delete').click(function () {
                    var borrar = $(this).data("numero");
                    $.ajax({
                        url: 'api/usuario/' + borrar,
                        type: 'POST',
                        data: {
                            '_method': 'DELETE',
                        },
                        error: function (result) {
                        },
                        success: function (result) {
                            $('#modal').modal('hide');
                            $('#exito').html('El usuario ha sido borrado');
                            $('#div_exito').slideToggle();
                            $('#usuarios').DataTable().destroy();
                            tabla = datatable();
                        }
                    });
                });
                $('.editar').click(function () {
                    var x = $(this).data("numero");
                    $.ajax({
                        url: 'api/usuario/' + x,
                        type: 'GET',
                        error: function (result) {

                        },
                        success: function (result) {
                            $('#nombre').val(result.name);
                            $('#email').val(result.email);
                            $('#telefono').val(result.telefono);
                            $('#tipo_usuario').val(result.roles[0].id);
                            $('#titulo-modal').text('Editar Usuario');
                            $('#modal').modal('show');

                            $('#guardar').click(function () {
                                name = $('#nombre').val();
                                email = $('#email').val();
                                telefono = $('#telefono').val();
                                contrasena = $('#contrasena').val();
                                tipo_usuario = $('#tipo_usuario').val();
                                $.ajax({
                                    url: 'api/usuario/' + x,
                                    type: 'POST',
                                    data: {
                                        '_method': 'PATCH',
                                        'name': name,
                                        'email': email,
                                        'telefono': telefono,
                                        'password': contrasena,
                                        'tipo_usuario': tipo_usuario,
                                        'id': x,

                                    },
                                    error: function (result) {
                                        $('.form-control-feedback').hide();
                                        $.each(result.responseJSON.errors, function (e, v) {
                                            $('#error_' + e).html(v[0].substr(0, 1).toUpperCase() + v[0].substr(1)).show(200);
                                        })
                                    },
                                    success: function (result) {
                                        $('#modal').modal('hide');
                                        $('#exito').html('El usuario ha sido actualizado');
                                        $('#div_exito').slideToggle();
                                        $('#usuarios').DataTable().destroy();
                                        tabla = datatable();
                                    }
                                });
                            })
                        }
                    });
                });
            },
        });
    }
    tabla =datatable();
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
                    $('#usuarios').DataTable().destroy();
                    tabla=datatable();
                }
            });
        })
    });
});