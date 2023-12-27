@extends('layouts.layout')
@section('css')
@include('layouts.css')
@endsection
@section('content')
<div class="container-fluid">
    @include('layouts.welcome')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card" style="background: #FFFFFF">
                <div class="header" >
                    <div style="float: left">
                        <h2>USUARIOS</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerUsuario">
                            <i class="fa fa-plus"></i> NUEVO USUARIO
                        </button>
                    </div>
                </div>
                <br>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Código</th>
                                    <th class="text-center">Nombres</th>
                                    <th class="text-center">Documento</th>
                                    <th class="text-center">Usuario</th>
                                    <th class="text-center">Celular</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $key=>$item)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td class="text-center">{{$item->id}}</td>
                                    <td class="text-center">{{ $item->nombres }}</td>
                                    <td class="text-center">{{ $item->documento }}</td>
                                    <td class="text-center">{{ $item->email }}</td>
                                    <td class="text-center">{{ $item->celular }}</td>
                                    @if ($item->estado=='1') 
                                    <td class="text-center" style="text-align: center"><span class="alert alert-success" role="alert">ACTIVO</span></td>
                                    @endif
                                    @if ($item->estado=='0') 
                                    <td class="text-center" style="text-align: center"><span class="alert alert-danger" role="alert">INACTIVO</span></td>
                                    @endif
                                    <td class="text-center">
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarPassword{{$item->id}}">
                                            <i class="fa fa-key"></i>
                                        </button>
                                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#editarUsuario{{$item->id}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarUsuario{{$item->id}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('usuarios.modals.register_usuario')
    @include('usuarios.modals.editar_usuario')
    @include('usuarios.modals.eliminar_usuario')
    @include('usuarios.modals.password_usuario')
</div>
@endsection
@section('js')
    @include('layouts.js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection