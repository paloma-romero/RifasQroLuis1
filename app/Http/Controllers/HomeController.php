<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\validarformusuario;
use Carbon\Carbon;

class HomeController extends Controller
{
    //
    public function index()
    {
        $consulta=DB::table('users')->get();
        return view('admin.index',compact('consulta'));
    }
    public function editusuario($id)
    {

    $usuarioid=DB::table('users')->where('id',$id)->first();
    return view('admin.editar', compact('usuarioid'));
    }

    public function updateusuario(validarformusuario $req, $id)
    {
        DB::table('users')->where('id',$id)->update([
            "name"=>$req->input('txtNombre'),
            "email"=>$req->input('txtEmail'),
            "username"=>$req->input('txtUsuario'),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('home')->with('mensaje', 'Tus datos se han actualizado');
    }
    
    public function confirmusuario($id){
        $usuarioid=DB::table('users')->where('id',$id)->first();
        return view('admin.confirmElim', compact('usuarioid'));
    }
    
    public function destroyusuario($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('home')->with('mensaje', 'Recuerdo eliminado');
    }

}