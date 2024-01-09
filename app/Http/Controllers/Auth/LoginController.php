<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function attemptLogin(Request $request)
    {
        $credentials = $this->credentials($request) + ['estado' => 1];

        Log::info('Intento de inicio de sesion - metodo attemptlogin ejecutado');
        Log::info("Credenciales utilizados para logearse; ", $credentials);



        $authenticated = Auth::attempt($credentials, $request->filled('remember'));

        if($authenticated){
            Log::info('loggeo exitoso: ' . $credentials['email']);
        }else {
            Log::info('loggeo fallido: ' . $credentials['email']);
        }
        return $authenticated;
    }
}
