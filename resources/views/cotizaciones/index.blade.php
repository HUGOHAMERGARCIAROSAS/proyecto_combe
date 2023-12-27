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
                        <h2>COTIZACIONES</h2>
                    </div>
                    <div style="float: right">
                        <a href="{{route('cotizaciones.create')}}" class="btn btn-warning" style="height: 40px">
                            <i class="fa fa-plus"></i> NUEVA COTIZACIÓN
                        </a>
                    </div>
                </div>
                <br>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Descripción</th>
                                    <th>Proveedor</th>
                                    <th>Estado Cotización</th>
                                    <th>Seleccionar</th>
                                    <th>Vista Previa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cotizaciones as $key=>$item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$item->nombre_cotizacion}}</td>
                                        <td>{{$item->nombres}}</td>
                                        @if($item->estado=='0')
                                            <td>PENDIENTE</td>
                                        @endif
                                        @if($item->estado=='1')
                                            <td>APROBADO</td>
                                        @endif
                                        <td style="text-align: center">
                                            <input type="checkbox" onclick="verCotizacion({{$item->id}})" />
                                        </td>
                                        <td style="text-align: center">
                                            <i class="fa fa-eye"></i>
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
@endsection
    @section('js')
    @include('layouts.js')
@endsection