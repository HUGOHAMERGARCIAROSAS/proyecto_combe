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
                        <h2>REQUERIMIENTO</h2>
                    </div>
                    <div style="float: right">
                        <a href="{{route('nueva.compra')}}" type="button" data-toggle="tooltip" title="Ingresar Compra" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-success">
                        <i class="fa fa-plus"></i> NUEVO REQUERIMIENTO
                        </a>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Moneda</th>
                                    <th>Operación Gravada</th>
                                    <th>IGV</th>
                                    <th>Total</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($requerimientos as $key=>$xd)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td style="text-align: center">{{$xd->num_documento}}</td>
                                    <td style="text-align: center">{{$xd->anio}}</td>
                                    <td style="text-align: center">{{$xd->observaciones}}</td>
                                    <td style="text-align: center">{{$xd->estado}}</td>
                                    <td style="text-align: center"><a href="/ingreso-productos-list-pdf/{{$xd->id_orden}}" class="btn btn-sm btn-warning" target="_BLANK"><i class="fa fa-print"></i></a></td>
                                    <td style="text-align: center">
                                        <button  type="button" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i></button>
                                        <button  type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#eliminar{{$xd->id}}"><i class="fa fa-trash"></i></button>                                      
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
    {{-- @include('pages.operaciones.modals.eliminar') --}}
</div>
@endsection
@section('js')
@include('layouts.js')
<script>
     var input = document.getElementById("compras-li");
        input.className="active";
</script>
@endsection