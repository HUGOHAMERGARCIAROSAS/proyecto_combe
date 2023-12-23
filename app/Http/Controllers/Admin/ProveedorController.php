<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::get()->where('estado','1');
        // dd($proveedores);
        return view('proveedores.index')->with(compact('proveedores'));
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
        $proveedor = new Proveedor();
        $proveedor->nombres  = $request->razon_social;
        $proveedor->direccion  = $request->direccion;
        $proveedor->estado  = 1;
        $proveedor->telefono  = $request->telefono;
        $proveedor->ruc  = $request->ruc;
        $proveedor->email  = $request->email;
        $proveedor->save();
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
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->nombres  = $request->razon_social;
        $proveedor->direccion  = $request->direccion;
        $proveedor->telefono  = $request->telefono;
        $proveedor->ruc  = $request->ruc;
        $proveedor->email  = $request->email;
        $proveedor->save();
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
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->estado  = 0;
        $proveedor->save();
        return back();
    }
}
