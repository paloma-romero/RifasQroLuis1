<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    //
    public function show()
    {
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
{
    $credentials = $request->getCredentials();
    
    try {
        if (!Auth::validate($credentials)) {
            // Si las credenciales no son válidas, mostrar un mensaje de error
            $errorMessage = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
            return view('auth.login')->with('errorMessage', $errorMessage);
        }
        
        // Intentar recuperar al usuario por sus credenciales
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        // Autenticar al usuario
        Auth::login($user);

        // Redirigir al usuario autenticado
        return $this->authenticated($request, $user);
    } catch (AuthenticationException $e) {
        // Capturar cualquier excepción de autenticación y mostrar un mensaje de error
        $errorMessage = "Error de autenticación: " . $e->getMessage();
        return view('auth.login')->with('errorMessage', $errorMessage);
    }
}
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->route('home.index');
    }
    public function accion()
    {
        // Verificar si el usuario está autenticado y es un administrador
        if (Auth::check() && Auth::user()->isAdmin()) {
            // Si el usuario es un administrador, mostrar la vista
            return view('vista-protegida');
        } else {
            // Si el usuario no es un administrador, redirigir o mostrar un mensaje de error
            return redirect()->route('login')->with('error', 'Debes iniciar sesión como administrador para acceder a esta vista.');

        }
    }
    
    
}