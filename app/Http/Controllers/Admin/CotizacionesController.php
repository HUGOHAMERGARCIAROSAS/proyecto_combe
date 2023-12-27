<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cotizacion;
use App\Models\DetalleCotizacion;
use App\Models\DetalleProveedor;
use Illuminate\Http\Request;
use DB;

class CotizacionesController extends Controller
{
    public function index(){
        $cotizaciones=DB::select(
            "SELECT nombre_cotizacion, c.id_cotizacion, dp.id_detproveedor, p.nombres, dp.estado  FROM cotizacion c inner join detalle_proveedor dp on c.id_cotizacion=dp.id_cotizacion
            inner join proveedor p on p.id_proveedor=dp.id_proveedor where c.activo=1 and dp.activo=1 order by c.id_cotizacion desc"
            );
            // dd($cotizaciones);
        return view('cotizaciones.index')->with(compact('cotizaciones'));
    }

    public function create(){

        return view('cotizaciones.create');
    }

    public function store(Request $request){
        try {
            DB::beginTransaction();
            $operacion = new Cotizacion();
            $operacion->fecha_solicitud = $request->fecha_emision;
            $operacion->nombre_cotizacion = $request->nombre_cotizacion;
            $operacion->solicitante_id = $request->solicitante;
            $operacion->activo = 1;
            $operacion->save();
            

            foreach ($request->lista_proveedores as $item) {

                $detalle_proveedor = new DetalleProveedor();
                $detalle_proveedor->id_cotizacion = $operacion->id_cotizacion;
                $detalle_proveedor->id_proveedor = $item['id_proveedor'];
                $detalle_proveedor->estado = 0;
                $detalle_proveedor->activo = 1;
                $detalle_proveedor->save();

                foreach ($request->lista_productos as $value) {
                    $detalle_operacion = new DetalleCotizacion();
                    $detalle_operacion->id_cotizacion = $operacion->id_cotizacion;
                    $detalle_operacion->id_proveedor = $item['id_proveedor'];
                    $detalle_operacion->id_producto = $value['id_producto'];
                    $detalle_operacion->cantidad = $value['cantidad'];
                    $detalle_operacion->activo = 1;
                    $detalle_operacion->save();
                }
            }
            DB::commit();
            return response()->json(true);
        }
        catch (\Exception $e) {
            DB::rollBack();
            return response()->json(false);
        }

    }
}
