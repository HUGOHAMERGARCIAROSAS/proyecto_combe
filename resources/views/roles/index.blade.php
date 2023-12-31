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
                        <h2>ROL</h2>
                    </div>
                    <div style="float: right">
                        <a href="{{route('roles.create')}}" class="btn btn-warning" style="height: 40px">
                            <i class="fa fa-plus"></i> NUEVO ROL
                        </a>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th>Acceso Total</th>
                                    <th>Descripción</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>{{$item['full-access']}}</td>
                                    <td>{{$item->descripcion}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarRole{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <form action="{{route("roles.destroy",$item->id)}}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarRuta{{$item->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
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
</div>
@include('roles.modals.register_role')
{{-- @include('pages.roles.modals.editar_role') --}}
{{-- @include('pages.rutas.modals.eliminar_ruta')
@include('pages.rutas.modals.cargar_excel') --}}
@endsection
@section('js')
@include('layouts.js')

@endsection