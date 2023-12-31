<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Salida_Producto;
use App\Models\Salida_Producto_Detalle;
use App\Models\Kardex;
use App\Models\Productos;
use DB;
use Illuminate\Support\Facades\Log;
use PDF;

class SalidaProductosController extends Controller {

    public function salidaProductosText(){
        return view('salida_productos.index');
    }
    public function searchProducto($id){
        $producto = Productos::find($id);
        return response()->json($producto);
    }

    public function listadoSalidaProductos(){
        $productos = DB::select(
            "SELECT * 
            FROM salida_productos
            ORDER BY id_producto DESC
            LIMIT 1"
        );
        return view('salida_productos.listado')->with(compact('productos'));
    }
    public function storeSalidaProducto(Request $request){
    try{

        DB::beginTransaction();
        $operacion = new Salida_Producto();
        $operacion->fecha = $request->fecha_emision;
        $operacion->observaciones = $request->observaciones;
        $operacion->num_documento = $request->numero;
        $operacion->anio = $request->anio;
        $operacion->estado = 1;
        $operacion->save();

        foreach($request->detalle_facturacion as $item){
            $detalle_operacion = new Salida_Producto_Detalle();
            $detalle_operacion->idsalida = $operacion->id_producto;
            $detalle_operacion->idproducto = $item['id'];
            $detalle_operacion->cantidad = $item['unidades'];
            $detalle_operacion->precio = $item['precio_unitario'];
            $detalle_operacion->cod_producto = $item['codigo'];
            $detalle_operacion->save();
        }
        DB::commit();
        return response()->json(true);
    }
    catch(\Exception $e){
        DB::rollBack();
        Log::error($e->getMessage());
        return response()->json(false);
        }
    }
    public function salidaProductoKardex($id){
        $detalle = DB::select("
            SELECT sp.id_producto id_salida, spd.idproducto id_producto,
            p.descripcion producto, um.descripcion unidad, spd.cantidad cantidad,
            spd.precio, spd.created_at fecha
            FROM salida_producto_detalle spd
            LEFT JOIN salida_productos sp ON spd.idsalida = sp.id_producto
            INNER JOIN productos p ON p.id_producto = spd.idproducto 
            INNER JOIN unidad_medida um ON um.id_unidad_medida = p.id_unidad_medida
            WHERE spd.idsalida = '".$id."'
        ");
    
        $operacion = Salida_Producto::find($id);
        foreach ($detalle as $key => $value) {
            $existe_producto = Kardex::where('id_producto', $value->id_producto)
                ->orderBy('id_kardex', 'DESC')
                ->first();
    
            $unidad = new Kardex();
            $unidad->id_producto = $value->id_producto;
            $unidad->fecha = $operacion->fecha;
            $unidad->ingreso = 0;
            $unidad->salida = $value->cantidad;
    
            if ($existe_producto) {
                $unidad->saldo = $existe_producto->saldo - $value->cantidad;
                $unidad->tipo = 2;
                $unidad->precio = $value->precio;
                $unidad->metodo = $existe_producto->metodo;
            } else {
                $unidad->saldo = -$value->cantidad;
                $unidad->tipo = 2;
                $unidad->precio = $value->precio;
                $unidad->metodo = 0;
            }
    
            $unidad->id_salida = $value->id_salida; 
            $unidad->estado = 1;
            $unidad->save();
        }
    
        return redirect()->back();
    }
    
    public function exportPdf($id){
        $productos = Salida_Producto::find($id);
        $detalle = DB::select(
            "SELECT p.descripcion producto, um.descripcion unidad, spd.cantidad cantidad
            FROM salida_productos sp
            INNER JOIN salida_producto_detalle spd ON spd.idsalida = sp.id_producto
            INNER JOIN productos p ON p.id_producto = spd.idproducto
            INNER JOIN unidad_medida um ON um.id_unidad_medida = p.id_unidad_medida
            WHERE sp.id_producto = '".$id."'"
        );
        $contar = count($detalle);

        $pdf = PDF::loadView('salida_productos.salida_producto_pdf', compact('productos','detalle','contar'));

        return $pdf->download('lista_salida_productos.pdf');
    }
    public function salidaProductosDetalle(){
        $salidas = Salida_Producto::get();
        return view('salida_productos.listado_detalle')->with(compact('salidas'));
    }
    
}