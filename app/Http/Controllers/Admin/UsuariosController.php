<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role_user;
use DB;

class UsuariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $usuarios=DB::select(
            "SELECT CONCAT(paterno,' ',materno,' ',nombres ) as nombres, u.id, u.email,u.estado ,celular, documento,area_id FROM users u inner join persona p on u.id=p.persona_ID order by u.id desc"
            );

        $areas = DB::select("Select * from area where activo=1 order by are_codigo asc"); 

        $personas = DB::select("Select CONCAT(paterno,' ',materno,' ',nombres ) as nombres, p.persona_ID from persona p where estado=1 order by paterno asc");

        $roles = DB::select("Select * from roles where activo=1 order by id asc");

        return view('usuarios.index')->with(compact('usuarios','areas','personas','roles'));
    }

    public function store(Request $request){
        $usuario = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'area_id' => $request->area_id,
            'id' => $request->persona_id,
            'estado' => 1,
            'pass' => $request->password
        ];

        DB::table('users')->insert($usuario);


        $role_user = new Role_user();
        $role_user->user_id = $request->persona_id;
        $role_user->role_id = $request->role_id;
        $role_user->save();

        return redirect('usuarios_index');
    }

    public function update(Request $request,$id){
        $usuario = [
            'email' => $request->email,
            'area_id' => $request->area_id
        ];

        DB::table('users')->where('id', $id)->update($usuario);

        return redirect('usuarios_index');

    }

    public function destroy(Request $request,$id){
       $usuario = [
           'estado' => 0
       ];

       DB::table('users')->where('id', $id)->update($usuario);
       
        return redirect('usuarios_index');
    }

    public function updatePassword(Request $request,$id){
        $usuario = [
            'password' => bcrypt($request->password),
            'pass' => $request->password
        ];

        DB::table('users')->where('id', $id)->update($usuario);

        return redirect('usuarios_index');
    }
}
