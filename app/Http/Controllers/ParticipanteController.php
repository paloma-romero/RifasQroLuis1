<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\validarParticipante;
use App\Http\Requests\validarBuscar;
use Carbon\Carbon;

class ParticipanteController extends Controller
{
    public function participanteindex()
    {
        $consultaP = DB::table('participante')
        ->leftJoin('users', 'participante.user_id', '=', 'users.id')
        ->select('participante.*', 'users.*')
        ->get();
               
        
        return view('admin.participante.participante',compact('consultaP'));
    }
    public function participantecreate()
    {
        $consulta=DB::table('users')->get();
        return view('admin.participante.participantecrear',compact('consulta'));
        
    }
    public function participantestore(validarParticipante $req)
    {
        DB::table('participante')->insert([
            
            "nombre"=>$req->input('txtNombre'),
            "telefono"=>$req->input('txtTelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
            "user_id"=>$req->input('txtUser'),
        ]);
        return redirect('participante')->with('mensaje', 'Tu datos se han guardado');
    }
    public function participanteedit($id)
    {
        $consultaPE = DB::table('participante')
        ->leftJoin('users', 'participante.user_id', '=', 'users.id')
        ->select('participante.*', 'users.*')
        ->where('participante.idparticipante', $id)
        ->first();

        $consulta=DB::table('users')->get();

        return view('admin.participante.participanteeditar', compact('consultaPE', 'consulta'));
    }
    
    public function participanteupdate(validarParticipante $req, $id)
    {
        DB::table('participante')->where('idparticipante',$id)->update([
            "nombre"=>$req->input('txtNombre'),
            "telefono"=>$req->input('txtTelefono'),
            "updated_at"=>Carbon::now(),
            "user_id"=>$req->input('txtUser'),
            
        ]);
        return redirect('participante')->with('mensaje', 'Tus datos se han actualizado');
    }
    
    public function participanteconfirm($id){
        $participanteid = DB::table('participante')
        ->leftJoin('users', 'participante.user_id', '=', 'users.id')
        ->select('participante.*', 'users.*')
        ->where('participante.idparticipante', $id)
        ->first();
        return view('admin.participante.participanteconfirmElim', compact('participanteid'));
    }
    
    public function participantedestroy($id)
    {
        DB::table('participante')->where('idparticipante', $id)->delete();
        return redirect('participante')->with('mensaje', 'Recuerdo eliminado');
    }

    public function buscarParticipante(validarBuscar $request)
    {
        
        // Consulta base para obtener todos los boletos
        $consultaP = DB::table('participante')
        ->leftJoin('users', 'participante.user_id', '=', 'users.id')
        ->select('participante.*', 'users.*');
        // Verifica si hay un término de búsqueda
        if ($request->has('buscar')) {
            $terminoBusqueda = $request->input('buscar');
            $consultaP->where(function ($query) use ($terminoBusqueda) {
                $query->where('idparticipante', 'like', '%' . $terminoBusqueda . '%')
                    ->orWhere('nombre', 'like', '%' . $terminoBusqueda . '%')
                    ->orWhere('name', 'like', '%' . $terminoBusqueda . '%');
            });
        }

        // Ejecuta la consulta y obtén los resultados
        $consultaP = $consultaP->get();

        // Retorna la vista con los resultados
        return view('admin.participante.participante',compact('consultaP'));

    }
}
