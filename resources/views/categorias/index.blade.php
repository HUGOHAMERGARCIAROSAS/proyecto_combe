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
                        <h2>CATEGORÍAS</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerCategoria">
                            <i class="fa fa-plus"></i> NUEVA CATEGORÍAS
                        </button>
                    </div>
                </div>
                {{-- <div class="header" style="padding-top: 25px">
                    <div class="buttons" style="float: right">
                        <a href="{{route('clientes.export.pdf')}}"  class="btn btn-warning"><i class="fa fa-download"></i> PDF</a>
                        <a href="{{route('clientes.export.excel')}}"  class="btn btn-warning">
                            <i class="fa fa-download"></i> EXCEL</a>
                        <a href="#"  class="btn btn-warning" data-toggle="modal" data-target="#importExcel">
                            <i class="fa fa-upload"></i>
                            EXCEL
                        </a>
                    </div>                        
                </div> --}}
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Descripción</th>
                                    <th>Abreviatura</th>
                                    <th>Tipo</th>
                                    <td>Estado</td>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->descripcion}}</td>
                                    <td>{{ $item->abrev }}</td>
                                    @if ($item->tipo=='1') 
                                    <td>PRODUCTO</td>
                                    @endif
                                    @if ($item->estado=='1') 
                                    <td>ACTIVO</td>
                                    @endif
                                    @if ($item->estado=='0') 
                                    <td>INACTIVO</td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#editarCategoria{{$item->id_categoria}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarCategoria{{$item->id_categoria}}">
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
    @include('categorias.modals.register_categoria')
    @include('categorias.modals.editar_categoria')
    @include('categorias.modals.eliminar_categoria')
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