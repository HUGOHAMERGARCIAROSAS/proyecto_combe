<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\UnidadMedida;
use App\Models\Category;
use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = UnidadMedida::get()->where('estado','1');
        $categorias = Category::get()->where('estado','1');
        $productos=DB::select(
            "SELECT p.*,um.descripcion unidad, c.descripcion as categoria   from productos p 
            inner join unidad_medida um on um.id_unidad_medida=p.id_unidad_medida
            inner join categoria c on c.id_categoria=p.id_categoria WHERE p.estado='1'"
            );
        // dd($proveedores);
        return view('productos.index')->with(compact('productos','unidades','categorias'));
    }


    public function kardexProducto($id){
        $producto = Productos::find($id);
        $kardex=DB::select(
            "SELECT * FROM KARDEX K INNER JOIN productos P ON K.id_producto=P.id_producto WHERE K.id_producto='".$id."'"
            );
        return view('productos.kardex')->with(compact('producto','kardex'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $producto = new Productos();
        $producto->codigo  = $request->codigo;
        $producto->descripcion  = $request->descripcion;
        $producto->estado  = 1;
        $producto->id_categoria  = $request->id_categoria;
        $producto->id_unidad_medida  = $request->id_unidad_medida;
        $producto->save();
        return back()->with('guardar','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Productos::findOrFail($id);
        $producto->codigo  = $request->codigo;
        $producto->descripcion  = $request->descripcion;
        $producto->estado  = 1;
        $producto->id_categoria  = $request->id_categoria;
        $producto->id_unidad_medida  = $request->id_unidad_medida;
        $producto->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function update1(Request $request,$id)
    {
        $producto = Productos::findOrFail($id);
        $producto->estado  = 0;
        $producto->save();
        return back();
    }
}
