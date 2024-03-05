<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Requests\validarBoleto;
use App\Http\Requests\validarBuscar;


class BoletoController extends Controller
{
    public function boleto()
    {
        
        $consultaB = DB::table('boleto')
        ->leftJoin('participante', 'participante.boleto_id', '=', 'boleto.idboleto')
        ->select('boleto.*', 'participante.*')
        ->get();
        return view('admin.boleto.boleto', compact('consultaB'));
        
    }
    // ELIMINAR TODO PARTICIPANTES, FECHAS Y COMPRADO
    public function boletoconfirmTODO($id){
        $boletoid = DB::table('boleto')
        ->leftJoin('participante', 'participante.boleto_id', '=', 'boleto.idboleto')
        ->select('boleto.*', 'participante.*')
        ->where('idboleto',$id)->first();
        
        return view('admin.boleto.boletoPartElim', compact('boletoid'));
    }
    
  
    public function boletoupdateTODO($id)
    {
        DB::table('boleto')
        ->where('boleto.idboleto', $id)
        ->update([
            'boleto.fechaApartado' => null,
            'boleto.fechaCompra' => null,
            'boleto.comprado' => '0',
            'boleto.updated_at' => Carbon::now(),
        ]);
        DB::table('participante')->where('boleto_id', $id)->delete();
       


        
        return redirect('boleto')->with('mensaje', 'Datos eliminados');
    }

    // AGREGAR DATOS DE PARTICIPANTE
    public function boletoconfirmParticipante($id)
    {
        $consultaBE = DB::table('boleto')
        ->leftJoin('participante', 'participante.boleto_id', '=', 'boleto.idboleto')
        ->select('boleto.*', 'participante.*')
        ->where('idboleto',$id)->first();

        $consulta=DB::table('participante')->get();

        return view('admin.boleto.boletoeditar', compact('consultaBE', 'consulta'));
    }
    
    public function updateparticipante(validarBoleto $req, $id)
    {
        DB::table('boleto')
        ->where('idboleto', $id)->update([
            'fechaCompra'=>$req->input('txtFecha'),
            'comprado' => '1',
            "updated_at"=>Carbon::now(),
            
        ]);

            
      
        return redirect('boleto')->with('mensaje', 'Tus datos se han actualizado');
    }
    // ELIMINAR FECHA DE COMPRA 
    public function boletoconfirmFECHA($id){
        $boletoid = DB::table('boleto')
            ->leftJoin('participante', 'participante.boleto_id', '=', 'boleto.idboleto')
            ->select('boleto.*', 'participante.*')
            ->where('idboleto',$id)->first();
        
        return view('admin.boleto.boletoFPconfirmElim', compact('boletoid'));
    }
    
  
    public function boletouptadeFECHA($id)
    {
        DB::table('boleto')
        ->where('idboleto', $id)
        ->update([
            'fechaCompra' => null,
            'comprado' => '0',
            "updated_at"=>Carbon::now(),
            
        ]);
        
        return redirect('boleto')->with('mensaje', 'Datos eliminados');
    }


    public function buscarBoletoAdmin(validarBuscar $request)
    {
        
        // Consulta base para obtener todos los boletos
        $consultaB = DB::table('boleto')
            ->leftJoin('participante', 'participante.boleto_id', '=', 'boleto.idboleto')
            ->select('boleto.*', 'participante.*');

        // Verifica si hay un término de búsqueda
        if ($request->has('buscar')) {
            $terminoBusqueda = $request->input('buscar');
            $consultaB->where(function ($query) use ($terminoBusqueda) {
                $query->where('idboleto', 'like', '%' . $terminoBusqueda . '%')
                    ->orWhere('nombre', 'like', '%' . $terminoBusqueda . '%');
            });
        }

        // Ejecuta la consulta y obtén los resultados
        $consultaB = $consultaB->get();

        // Retorna la vista con los resultados
        return view('admin.boleto.boleto', compact('consultaB'));

    }
    

}
