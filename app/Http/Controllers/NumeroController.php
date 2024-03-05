<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class NumeroController extends Controller
{
    
    public function generarNumerosAleatorios(Request $request)
    {
        $cantidad = $request->input('cantidad');
        $numeros = DB::table('boletos')->inRandomOrder()->limit($cantidad)->pluck('idboleto')->toArray();
        return response()->json($numeros);
    }
        
}
