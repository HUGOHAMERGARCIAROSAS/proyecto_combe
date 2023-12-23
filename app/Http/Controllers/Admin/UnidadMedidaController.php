<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnidadMedida;

class UnidadMedidaController extends Controller
{
    public function index()
    {
        $unidades = UnidadMedida::get()->where('estado','1');
        return view('unidades.index')->with(compact('unidades'));
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
        $unidad = new UnidadMedida();
        $unidad->descripcion  = $request->descripcion;
        $unidad->abrev  = $request->abrev;
        $unidad->estado  = 1;
        $unidad->save();
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
        $unidad = UnidadMedida::findOrFail($id);
        $unidad->descripcion  = $request->descripcion;
        $unidad->abrev  = $request->abrev;
        $unidad->estado  = 1;
        $unidad->save();
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
        $unidad = UnidadMedida::findOrFail($id);
        $unidad->estado  = 0;
        $unidad->save();
        return back();
    }
}
