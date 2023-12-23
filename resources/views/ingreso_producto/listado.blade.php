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
                        <h2>INGRESO DE PRODUCTOS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="table-responsive"  id="app" >
            <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body text-center">
                        <div class="chart easy-pie-chart-1" data-percent="100">
                            <span>
                                <img src="{{asset('img/success.jpg')}}" alt="" class="rounded-circle"/>
                            </span>
                        </div>
                        <h6>FORMATO PARA SOLICITAR INGRESO DE PRODUCTOS A ALMACEN </h6>
                        <ul class="social-links list-unstyled">
                            <li style="font-size: 15px">Número: {{$productos[0]->num_documento}}</li>
                            <li style="font-size: 15px">Año {{$productos[0]->anio}}</li>
                            <li style="font-size: 15px">Fecha: {{$productos[0]->fecha}}</li>
                            <li style="font-size: 15px">Detalle: {{$productos[0]->observaciones}}</li>
                        </ul>
                        <br>
                        <h6>
                            <a href="/ingreso-productos-list-pdf/{{$productos[0]->id_producto}}" class="btn btn-success" target="_BLANK" >DESCARGAR FORMATO</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@include('layouts.js')
<script src="{{ asset('js/app.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="{{ asset('js/easypiechart.bundle.js') }}"></script> <!-- easypiechart Plugin Js -->
@endsection