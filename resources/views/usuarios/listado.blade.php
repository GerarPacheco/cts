@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('vendors/custom/datatables/datatables.bundle.css') }}">
@endsection
@section('titulo')Usuarios @stop
@section('contenido')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title "> Usuarios </h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-form__content" style="display:none" id="div_exito">
            <div class="m-alert m-alert--icon alert alert-success" role="alert">
                <div class="m-alert__icon">
                    <i class="la la-check"></i>
                </div>
                <div class="m-alert__text" id="exito"></div>
                <div class="m-alert__close">
                    <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Listado de Usuarios
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin: Search Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            
                        </div>
                        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="#" id="crear" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-plus-circle"></i>
                                    <span>
                                        Nuevo Usuario
                                    </span>
                                </span>
                            </a>
                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                        </div>
                    </div>
                </div>
                <!--end: Search Form -->
                <!--begin: Datatable -->
                <table id="usuarios" class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" width="100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo-modal"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>           
            <div class="modal-body">
                @include('usuarios.form',['tipo_usuario'=>$tipo_usuario])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Cerrar
                </button>
                <a href="#" id="guardar" class="btn btn-primary">
                    Guardar
                </a>
            </div>    
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
	var url_guardar_usuario="{{ route('usuario.store') }}";
        token="{{ csrf_token() }}";
        url_ajax_datatable="{{ route('datatable.content',['model'=>'usuarios'])}}";
        datatable_spanish="{{ asset('vendors/custom/datatables/spanish.json')}}";
</script>
<script type="text/javascript" src="{{ asset('vendors/custom/datatables/datatables.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/files/usuarios.js') }}"></script>
@endsection