<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ingreso_Producto;
use App\Models\Ingreso_Producto_Detalle;
use App\Models\Productos;
use App\Models\Kardex;
use DB;
use PDF;

class IngresoProductosController extends Controller
{
   public function ingresoProductosText(){
       return view('ingreso_producto.index');
   }

   public function searchProducto($id){
        $producto = Productos::find($id);
        return response()->json($producto);
    }

    public function listadoIngresoProductos(){
        
        $productos=DB::select(
            "SELECT * 
            FROM ingreso_productos
            ORDER BY id_producto DESC
            LIMIT 1"
            );
        return view('ingreso_producto.listado')->with(compact('productos'));
    }


    public function storeIngresoProducto(Request $request){
        try {
            DB::beginTransaction();
            $operacion = new Ingreso_Producto();
            $operacion->fecha = $request->fecha_emision;
            $operacion->observaciones = $request->observaciones;
            $operacion->num_documento = $request->numero;
            $operacion->anio = $request->anio;
            $operacion->estado = 1;
            $operacion->save();
            

            foreach ($request->detalle_facturacion as $item) {
                $detalle_operacion = new Ingreso_Producto_Detalle();
                $detalle_operacion->idingreso = $operacion->id_producto;
                $detalle_operacion->idproducto = $item['id'];
                $detalle_operacion->cantidad = $item['unidades'];
                $detalle_operacion->precio = $item['precio_unitario'];
                $detalle_operacion->cod_producto = $item['codigo'];
                $detalle_operacion->save();
            }
            DB::commit();
            return response()->json(true);
        }
        catch (\Exception $e) {
            DB::rollBack();
            return response()->json(false);
        }
    }

    public function ingresoProductoKardex($id){
        $detalle=DB::select(
            "select ip.id_producto idingreso,p.id_producto idproducto,p.descripcion producto,um.descripcion unidad,ipd.cantidad cantidad,
            ipd.precio,ipd.created_at fecha from ingreso_productos ip inner join ingreso_producto_detalle ipd on ipd.idingreso=ip.id_producto
            inner join productos p on p.id_producto=ipd.idproducto inner join unidad_medida um on um.id_unidad_medida=p.id_unidad_medida
            where ip.id_producto='".$id."'"
            );
            foreach ($detalle as $key => $value) {
                $existe_producto=DB::select("SELECT * from kardex where id_producto='".$value->idproducto."' ORDER BY id_kardex DESC LIMIT 1");
                if(count($existe_producto)>0){
                    $unidad = new Kardex();
                    $unidad->id_producto  = $value->idproducto;
                    $unidad->fecha  = $value->fecha;
                    $unidad->ingreso  = $value->cantidad;
                    $unidad->salida  = 0;
                    $unidad->saldo  = $value->cantidad+$existe_producto[0]->saldo;
                    $unidad->tipo  = 1;
                    $unidad->id_ingreso  = $value->idingreso;
                    $unidad->precio  = $value->precio;
                    $unidad->metodo  = $existe_producto[0]->metodo+($value->cantidad*$value->precio);
                    $unidad->estado  = 1;
                    $unidad->save();
                }else{
                    // dd($value);
                    $unidad = new Kardex();
                    $unidad->id_producto  = $value->idproducto;
                    $unidad->fecha  = $value->fecha;
                    $unidad->ingreso  = $value->cantidad;
                    $unidad->salida  = 0;
                    $unidad->saldo  = $value->cantidad;
                    $unidad->tipo  = 1;
                    $unidad->id_ingreso  = $value->idingreso;
                    $unidad->precio  = $value->precio;
                    $unidad->metodo  = $value->cantidad*$value->precio;
                    $unidad->estado  = 1;
                    $unidad->save();
                }
                
            }
            return back();
    }

    public function exportPdf($id){
        $productos = Ingreso_Producto::find($id);
        // dd($productos);
        $detalle=DB::select(
            "select p.descripcion producto,um.descripcion unidad,ipd.cantidad cantidad from ingreso_productos ip inner join ingreso_producto_detalle ipd on ipd.idingreso=ip.id_producto
            inner join productos p on p.id_producto=ipd.idproducto inner join unidad_medida um on um.id_unidad_medida=p.id_unidad_medida
            where ip.id_producto='".$id."'"
            );
        
        $contar=count($detalle);

        $pdf = PDF::loadView('ingreso_producto.ingreso_producto_pdf',compact('productos','detalle','contar'));

        return $pdf->download('lista_ingreso_productos.pdf');
    }


    public function ingresoProductosDetalle(){
        $ingresos = Ingreso_Producto::get();
        return view('ingreso_producto.listado_detalle')->with(compact('ingresos'));
    }
}
