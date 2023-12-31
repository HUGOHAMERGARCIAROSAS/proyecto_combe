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
                    <div style="float: right">
                        <a href="{{ route('productos.index') }}"class="btn-shadow mr-3 btn btn-success"><i class="fa fa-arrow-left"></i> Atras
                        </a>
                    </div>
                    <div style="text-align: center">
                        <h4 style="color:#B3A33B">{{$producto->descripcion}}</h4>
                    </div>
                    <div class="container-fluid">

                        <label for="fecha_inicio">Fecha Inicio:</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio">
                    
                        <label for="fecha_final">Fecha Fin:</label>
                        <input type="date" id="fecha_final" name="fecha_final">
                    
                        <button onclick="filtrarKardex()">Filtrar</button>
                    </div>
                </div>           
                <div class="body">
                    <div class="table-responsive">
                        <table id="tablaKardex" class="table table-bordered table-hover js-basic-example table-custom">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">ID</th>
                                    <th rowspan="2" class="text-center">Fecha</th>
                                    <th colspan="3" class="text-center">Entrada</th>
                                    <th colspan="1" class="text-center">Salida</th>
                                    <th colspan="1" class="text-center">Stock</th>
                                </tr>
                                <tr>
                                    <td>UNIDADES</td>
                                    <td>COSTO U.</td>
                                    <td>TOTAL</td>
                                    <td>UNIDADES</td>
                                    <td>TOTAL</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kardex as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $item->fecha}}</td>
                                    @if ($item->tipo == 1)
                                        <td>{{$item->ingreso}}</td>
                                        <td>{{$item->precio}}</td>
                                        <td>{{$item->ingreso * $item->precio}}</td>
                                        <td>0</td>
                                    @elseif ($item->tipo == 2)
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>{{$item->salida}}</td>
                                    @endif
                                    <td>{{$item->saldo}}</td>
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script>
    var kardexCompleto = {!! json_encode($kardex)!!};
    function filtrarKardex(){
        var fechaInicio = document.getElementById("fecha_inicio").value;
        var fechaFin = document.getElementById("fecha_final").value;

        var kardexFiltrado = kardexCompleto.filter(function(item){
            return item.fecha >= fechaInicio && item.fecha <= fechaFin;
        });

        var tabla = "<thead>" +
                "<tr>" +
                "<th rowspan='2' class='text-center'>ID</th>" +
                "<th rowspan='2' class='text-center'>Fecha</th>" +
                "<th colspan='3' class='text-center'>Entrada</th>" +
                "<th colspan='1' class='text-center'>Salida</th>" +
                "<th colspan='1' class='text-center'>Stock</th>" +
                "</tr>" +
                "<tr>" +
                "<td>UNIDADES</td>" +
                "<td>COSTO U.</td>" +
                "<td>TOTAL</td>" +
                "<td>UNIDADES</td>" +
                "<td>TOTAL</td>" +
                "</tr>" +
                "</thead><tbody>";

        kardexFiltrado.forEach(function(item,index){
            tabla +="<tr>";
            tabla +="<td>" + (index + 1) + "</td>";
            tabla +="<td>" + item.fecha + "</td>";

            tabla +="<td>" + (item.tipo == 1 ? item.ingreso : 0) + "</td>";
            tabla +="<td>" + (item.tipo == 1 ? item.precio: 0) + "</td>";
            tabla +="<td>" + (item.tipo == 1 ? item.ingreso * item.precio : 0) + "</td>";

            tabla +="<td>" + (item.tipo == 2 ? item.salida:0) +"</td>";
            tabla +="<td>" + item.saldo + "</td>";
            tabla +="</tr>";
        });

        document.getElementById("tablaKardex").innerHTML = tabla;
    }
</script>
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