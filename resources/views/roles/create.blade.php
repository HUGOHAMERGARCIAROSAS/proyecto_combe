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
                        <h2 style="color:#B3A33B">ASIGNAR PERMISOS</h2>
                    </div>
                    <div style="float: right">
                        <a href="{{route('roles.index')}}" type="button" data-toggle="tooltip" title="Listado de roles" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-success">
                            <i class="fa fa-arrow-left"></i> Atras
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="table-responsive">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <form action="{{route('roles.store')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="">Nombre:</label>
                                            <input type="text" class="form-control" name="name" autocomplete="nope" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Slug:</label>
                                            <input type="text" class="form-control" name="slug">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <label for="">Descripción:</label>
                                            <input type="text" class="form-control" name="descripcion">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <label for="">Full Acceso:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="fullaccess" name="full-access" value="yes">
                                                <label class="form-check-label" for="fullaccess">Si</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="fullaccess" name="full-access" value="yes" checked>
                                                <label class="form-check-label" for="fullaccess" >No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <label for="">Permisos:</label>
                                        </div>
                                        <div class="col-md-12">
                                            @foreach ($permissions as $item)
                                            <div class="col-md-12">
                                                <div class="form-group form-check" style="margin-bottom: 0">
                                                    <input type="checkbox" class="form-check-input" id="permission_{{$item->id}}" value="{{$item->id}}" name="permission[]">
                                                    <label class="form-check-label" for="permission_{{$item->id}}">{{$item->id}} - {{$item->name}} <em>({{$item->descripcion}})</em></label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
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
@endsection