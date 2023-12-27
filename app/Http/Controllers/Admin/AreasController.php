<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AreasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $areas = DB::select("Select * from area  order by are_descripcion asc");
        return view('areas.index')->with(compact('areas'));
    }


    public function store(Request $request){
        $area = [
            'are_descripcion' => $request->descripcion,
            'are_abreviatura' => $request->abreviatura,
            'activo' => 1,
            'correo' => $request->correo
        ];

        DB::table('area')->insert($area);

        return back()->with('guardar','ok');
    }


    public function update(Request $request,$id){
        $area = [
            'are_descripcion' => $request->descripcion,
            'are_abreviatura' => $request->abreviatura,
            'correo' => $request->correo
        ];

        DB::table('area')->where('are_codigo', $request->id)->update($area);

        return back()->with('guardar','ok');
    }

    public function destroy($id)
    {
    
        DB::table('area')->where('are_codigo', $id)->update(['activo' => 0]);
        return back()->with('guardar','ok');
    }
}
