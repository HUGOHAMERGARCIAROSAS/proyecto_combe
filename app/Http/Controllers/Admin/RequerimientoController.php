<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orden;
use App\Models\Productos;

class RequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $table = 'productos';
    
    public function index()
    {
        $requerimientos = Orden::get()->where('estado','1');
        return view('requerimientos.index')->with(compact('requerimientos'));
    }


    public function getProductoRequerimientoSearch($id){
        $producto = Productos::find($id);
        return response()->json($producto);
    }

    public function compra(){
        //$id->este estaba como parametro de entrada
        // $productos = Producto::
        // where('activo', 1)
        // ->get();
        // $proveedores=TerciarioProveedor::where('tipo',2)->where('activo',1)->get();
        // return view('pages.operaciones.compra')->with(compact('productos','proveedores'));
        return view('requerimientos.compra');
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
        //
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
        //
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
}
