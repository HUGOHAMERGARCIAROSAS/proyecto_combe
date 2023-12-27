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
                        <h2>ÁREAS</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerArea">
                            <i class="fa fa-plus"></i> NUEVO ÁREA
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
                                    <th class="text-center">Descripción</th>
                                    <th class="text-center">Abreviatura</th>
                                    <th class="text-center">correo</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($areas as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $item->are_descripcion }}</td>
                                    <td>{{ $item->are_abreviatura }}</td>
                                    <td>{{ $item->correo }}</td>
                                    @if ($item->activo==1) 
                                    <td style="text-align: center"><span class="alert alert-success" role="alert">ACTIVO</span></td>
                                    @endif
                                    @if ($item->activo==0) 
                                    <td style="text-align: center"><span class="alert alert-danger" role="alert">INACTIVO</span></td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#editarArea{{$item->are_codigo}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarArea{{$item->are_codigo}}">
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
    @include('areas.modals.register_area')
    @include('areas.modals.editar_area')
    @include('areas.modals.eliminar_area')
</div>
@endsection
@section('js')
@include('layouts.js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('guardar')=='ok')
      <script>  
          swal({
          title: "GUARDADO!",
          text: "Se registro exitosamente",
          icon: "success",
          button: "OK!",
          });
      </script>
@endif
@endsection