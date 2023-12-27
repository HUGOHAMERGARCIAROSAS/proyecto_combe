<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Persona;

class PersonasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $personas=DB::select(
            "SELECT CONCAT(paterno,' ',materno,' ',nombres ) as nombres,paterno ,materno, nombres as nombre ,documento,fecha_nacimiento,celular,email,persona_ID,estado,tipo_persona,sexo,tipo_documento  FROM persona  order by persona_ID desc"
            );
        return view('personas.index')->with(compact('personas'));
    }

    public function store(Request $request){
        $persona=[
            'paterno'=>$request->paterno,
            'materno'=>$request->materno,
            'nombres'=>$request->nombres,
            'documento'=>$request->documento,
            'fecha_nacimiento'=>$request->fecha_nacimiento,
            'celular'=>$request->celular,
            'email'=>$request->email,
            'estado'=>1,
            'tipo_persona'=>$request->tipo_persona,
            'tipo_documento'=>$request->tipo_documento,
            'sexo'=>$request->sexo
        ];
        DB::table('persona')->insert($persona);
        return redirect('personas_index');
    }

    public function update(Request $request,$id){
        $persona=[
            'paterno'=>$request->paterno,
            'materno'=>$request->materno,
            'nombres'=>$request->nombres,
            'documento'=>$request->documento,
            'fecha_nacimiento'=>$request->fecha_nacimiento,
            'celular'=>$request->celular,
            'email'=>$request->email,
            'estado'=>1,
            'sexo'=>$request->sexo,
            'tipo_persona'=>$request->tipo_persona,
            'tipo_documento'=>$request->tipo_documento
        ];

        DB::table('persona')->where('persona_ID', $id)->update($persona);
        return redirect('personas_index');
    }

    public function destroy(Request $request,$id){
       $persona = Persona::find($id);
       $persona->estado = 0;
       $persona->save();
        return redirect('personas_index');
    }

   

    
}
