<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<style>
    .row{
        width: 100%;
        /* color:red; */
        display: block;
        font-size: 12px;
    }
    .espacio1{
        display: inline-block;
        width: 33%;
    }
    .espacio2{
        display: inline-block;
        width: 33%;
    }
    .espacio3{
        display: inline-block;
        width: 33%;
    }
    .espacio4{
        display: inline-block;
        width: 60%;
    }
    .espacio5{
        display: inline-block;
        width: 35%;
        float: right;
    }
    table {
    width: 100%; 
    border-collapse: collapse;
    }
    th, td {
    padding: 8px;
    border: 1px solid #dee2e6;
    }
    th {
    height: 40px;
    text-align: left;
    }
</style>
<body>
    <div class="container">
        <div style="width: 100%;display:block">
          <div class="espacio4" >
            <img src="{{ public_path('logoss.jpg') }}" style="width: 100%" height="100px">
          </div>
          <div class="espacio5">
            <table border="1">
                <thead>
                    <tr>
                        <td style="text-align: center">REQUERIMIENTO</td>
                    </tr>
                </thead>
                <tbody>
                    <tr><td style="text-align: center">{{$productos->num_documento}} - {{$productos->anio}}</td></tr>
                    <tr><td style="text-align: center">{{$productos->fecha}}</td></tr>
                </tbody>
            </table>
          </div>
        </div>
        <br>
        {{-- <hr> --}}
        <div class="row">
            <table border="1">
                <thead >
                    <tr >
                        <td style="text-align: center">ITEM</td>
                        <td style="text-align: center">DESCRIPCIÓN</td>
                        <td style="text-align: center">UNIDAD MEDIDA</td>
                        <td style="text-align: center">CANTIDAD</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalle as $key=>$item)
                        <tr>
                            <td style="text-align: center">{{$key+1}}</td>
                            <td style="text-align: center">{{$item->producto}}</td>
                            <td style="text-align: center">{{$item->unidad}}</td>
                            <td style="text-align: center">{{$item->cantidad}}</td>
                        </tr>
                    @endforeach
                    @for($i = $contar; $i < 25  ; $i++)
                    <tr><td style="text-align: center">{{$i+1}}</td><td></td><td></td><td></td></tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
 
        
</body>
</html>