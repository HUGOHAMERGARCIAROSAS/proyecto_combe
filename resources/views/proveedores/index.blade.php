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
                        <h2>PROVEEDORES</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerProveedor">
                            <i class="fa fa-plus"></i> NUEVO PROVEEDOR
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
                                    <th class="text-center">Razón Social</th>
                                    <th class="text-center">RUC</th>
                                    <th class="text-center">Dirección</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Télefono</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->nombres}}</td>
                                    <td>{{ $item->ruc }}</td>
                                    <td>{{ $item->direccion }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    @if ($item->estado=='1') 
                                    <td><span class="alert alert-success" role="alert">ACTIVO</span></td>
                                    @endif
                                    @if ($item->estado=='0') 
                                    <td class="text-center"><span class="alert alert-danger" role="alert">INACTIVO</span></td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#editarProveedor{{$item->id_proveedor}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarProveedor{{$item->id_proveedor}}">
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
    @include('proveedores.modals.register_proveedor')
    @include('proveedores.modals.editar_proveedor')
    @include('proveedores.modals.eliminar_proveedor')
    {{-- @include('pages.clientes.modals.cargar_excel') --}}
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