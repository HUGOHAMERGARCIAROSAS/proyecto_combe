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
                        <h2>PRODUCTOS</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerProducto">
                            <i class="fa fa-plus"></i> NUEVO PRODUCTO
                        </button>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <td>Código</td>
                                    <th>Descripción</th>
                                    <th>UM</th>
                                    <th>Categoría</th>
                                    <td>Estado</td>
                                    <td>Kardex</td>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->codigo}}</td>
                                    <td>{{ $item->descripcion }}</td>
                                    <td>{{ $item->unidad }}</td>
                                    <td>{{ $item->categoria }}</td>
                                    @if ($item->estado=='1') 
                                    <td>ACTIVO</td>
                                    @endif
                                    @if ($item->estado=='0') 
                                    <td>INACTIVO</td>
                                    @endif
                                    <td>
                                        <a href="/ver-kardex-producto/{{$item->id_producto}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#editarProducto{{$item->id_producto}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarProducto{{$item->id_producto}}">
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
    @include('productos.modals.register_producto')
    @include('productos.modals.editar_producto')
    @include('productos.modals.eliminar_producto')
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
          //clearInterval(window.cronometro);
          //console.log(window.contador_s);
      </script>
@endif
    <script type="text/javascript" >
        var input = document.getElementById("cliente-li")
        input.className="active"
    // var input2 = document.getElementById("listado-li")
    // input2.className+=" active-item"
        
    </script>

@endsection