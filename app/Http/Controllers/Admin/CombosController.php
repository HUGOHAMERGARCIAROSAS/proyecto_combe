<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use DB;

class CombosController extends Controller
{
    public function getAreasText(){
        $areas = DB::table('area')
        ->select('are_codigo as id','are_descripcion AS descripcion')
        ->where('activo', 1)
        ->get();
        return response()->json($areas);
    }

    public function getSolicitantesText(){
        $solicitantes=DB::select(
            "SELECT persona_ID As id,CONCAT(paterno,' ',materno,' ',nombres ) as texto   from persona p inner join users u on u.id=p.persona_id where p.estado='1' ORDER BY paterno ASC"
        );
        return response()->json($solicitantes);
    }

    public function getContratistaText(){
        $contratistas=DB::select(
            "SELECT id_proveedor As id,nombres as texto   from proveedor p where estado='1'"
        );
        return response()->json($contratistas);
    }

    public function getProductosText(){
        $productos=DB::select(
            "SELECT id_producto As id,codigo,p.descripcion texto,um.descripcion as unidad from productos p inner join unidad_medida um on um.id_unidad_medida=p.id_unidad_medida
             where p.estado='1' ORDER BY P.descripcion ASC"
        );
        return response()->json($productos);
    }
    
    public function getProductosSearch($id){
        $producto = DB::select(
            "SELECT id_producto As id,codigo,p.descripcion texto,um.abrev as unidad from productos p inner join unidad_medida um on um.id_unidad_medida=p.id_unidad_medida
             where p.id_producto = $id and p.estado='1'"

        );
        // $producto = $producto->load('nombre');
        return response()->json($producto);
    }

    
    public function getProveedoresSearch(){
        $proveedor = DB::table('proveedor')
        ->select('id_proveedor as id','nombres AS razon_social','ruc','direccion','telefono','email')
        ->where('estado', 1)
        ->orderBy('nombres', 'ASC')
        ->get();
        return response()->json($proveedor);
    }

    public function getProveedorSearch($id){
        $proveedor = DB::table('proveedor')
        ->select('id_proveedor as id','nombres AS razon_social','ruc','direccion','telefono','email')
        ->where('id_proveedor', $id)
        ->get();
        return response()->json($proveedor);
    }

    
}
