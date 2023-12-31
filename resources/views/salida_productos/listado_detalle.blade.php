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
                        <h2>FORMATOS</h2>
                    </div>
                    <div style="float: right">
                        <a href="{{route('salidaproductos.index')}}" type="button" data-toggle="tooltip" title="Ingresar Compra" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-success">
                        <i class="fa fa-plus"></i> NUEVA SALIDA DE PRODUCTO
                        </a>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="text-align: center">NÚMERO</th>
                                    <th style="text-align: center">AÑO</th>
                                    <th style="text-align: center">OBSERVACIONES</th>
                                    <th style="text-align: center">ESTADO</th>
                                    <th style="text-align: center">IMPRIMIR</th>
                                    <th style="text-align: center">INGRESAR A KARDEX</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($salidas as $key=>$xd)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td style="text-align: center">{{$xd->num_documento}}</td>
                                    <td style="text-align: center">{{$xd->anio}}</td>
                                    <td style="text-align: center">{{$xd->observaciones}}</td>
                                    <td style="text-align: center">{{$xd->estado}}</td>
                                    <td style="text-align: center"><a href="/salida-productos-list-pdf/{{$xd->id_producto}}" class="btn btn-sm btn-warning" target="_BLANK"><i class="fa fa-print"></i></a></td>
                                    <td style="text-align: center">
                                        @if($xd->estado==1)
                                        <form action="/salida-productos-a-kardex/{{$xd->id_producto}}" method="POST" style="display: inline-block">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-warning"><i class="fa fa-check"></i></a></button>
                                        </form>
                                        @elseif($xd->estado==2)
                                            <span>YA ESTÁ EN EL INVENTARIO</span>
                                        @else
                                            <span>ANULADA</span>
                                        @endif
                                        
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