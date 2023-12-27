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
                        <h2 style="color:#B3A33B">GENERAR COTIZACIÓN</h2>
                    </div>
                    <div style="float: right">
                        <a href="{{route('cotizaciones.index')}}" type="button" data-toggle="tooltip" title="Listado de Cotizaciones" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-success">
                        <i class="fa fa-arrow-left"></i> Atras
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="table-responsive"  id="app" >
            <cotizaciones-create-component></cotizaciones-create-component>
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
@endsection