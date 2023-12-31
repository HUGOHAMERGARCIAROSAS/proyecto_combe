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
                <div class="header">
                    <div style="float: left">
                        <h2>SALIDA DE PRODUCTOS</h2>
                    </div>
                    <div style="float: right">
                        <a href="{{route('requerimientos.index')}}" type="button" data-toggle="tooltip" title="Ingresar Compra" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-success">
                        <i class="fa fa-arrow-left"></i> Atras
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="table-responsive" id="app">
            <salida-productos-component></salida-productos-component>
        </div>
    </div>
</div>
@endsection
@section('js')
    @include('layouts.js')
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection