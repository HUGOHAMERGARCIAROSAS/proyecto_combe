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
                        <h2>KARDEX DE PRODUCTO</h2>
                    </div>
                    <br>
                    <div style="text-align: center">
                        <h4 style="color:#B3A33B">{{$producto->descripcion}}</h4>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">ID</th>
                                    <th rowspan="2" class="text-center">Fecha</th>
                                    <th colspan="3" class="text-center">Entrada</th>
                                    <th colspan="3" class="text-center">Salida</th>
                                    <th colspan="3" class="text-center">Saldo</th>
                                </tr>
                                <tr>
                                    <td>UNIDADES</td>
                                    <td>COSTO U.</td>
                                    <td>TOTAL</td>
                                    <td>UNIDADES</td>
                                    <td>COSTO U.</td>
                                    <td>TOTAL</td>
                                    <td>UNIDADES</td>
                                    <td>COSTO U.</td>
                                    <td>TOTAL</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kardex as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->ingreso }}</td>
                                    <td>{{ $item->precio }}</td>
                                    <td>{{ $item->ingreso*$item->precio }}</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>{{ $item->saldo }}</td>
                                    <td>{{ $item->metodo/$item->saldo }}</td>
                                    <td>{{ $item->metodo }}</td>
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