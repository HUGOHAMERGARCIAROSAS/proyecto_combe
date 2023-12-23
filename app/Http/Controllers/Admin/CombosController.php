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
            "SELECT persona_ID As id,CONCAT(paterno,' ',materno,' ',nombres ) as texto   from persona p where estado='1'"
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
             where p.estado='1'"
        );
        return response()->json($productos);
    }
    
    public function getProductosSearch($id){
        $producto = Productos::find($id);
        // $producto = $producto->load('nombre');
        return response()->json($producto);
    }

    


    
}
