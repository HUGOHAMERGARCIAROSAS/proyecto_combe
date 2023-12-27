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
                        <h2>PERSONAS</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerPersona">
                            <i class="fa fa-plus"></i> NUEVO PERSONA
                        </button>
                    </div>
                </div>
                <br>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Código</th>
                                    <th>Nombres</th>
                                    <th>Documento</th>
                                    <th>Email</th>
                                    <th>Celular</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personas as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->persona_ID}}</td>
                                    <td>{{ $item->nombres }}</td>
                                    <td>{{ $item->documento }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->celular }}</td>
                                    @if ($item->estado==1) 
                                    <td style="text-align: center"><span class="alert alert-success" role="alert">ACTIVO</span></td>
                                    @endif
                                    @if ($item->estado==0) 
                                    <td style="text-align: center"><span class="alert alert-danger" role="alert">INACTIVO</span></td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#editarPersona{{$item->persona_ID}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarPersona{{$item->persona_ID}}">
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
    @include('personas.modals.register_persona')
    @include('personas.modals.editar_persona')
    @include('personas.modals.eliminar_persona')
</div>
@endsection
@section('js')
@include('layouts.js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection