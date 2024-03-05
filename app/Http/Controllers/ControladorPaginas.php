<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Requests\validarBuscar;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;




class ControladorPaginas extends Controller
{
    function error(){
        return view('error');
    }
    function home(){
        return view('cliente.welcome');
    }
    function preguntas(){
        return view('cliente.preguntas');
    }
    function tarjeta(){
        return view('cliente.tarjeta');
    }

    
    /////BOLETOS////
    function boletos()
    {
        $consulta = DB::table('boleto')->get();
        $resultado = DB::table('boleto')->whereNull('fechaApartado')->pluck('idboleto')->toArray();
    
        // Retorna la vista con los resultados solo si $consultaB no está vacío
       
        return view('cliente.boletos', compact('consulta', 'resultado'));

    }
    
    

    function enviarlista(Request $req) {
        $numerosRecibidos = $req->input('numerosRecibidos');
        $numerosInput = $req->input('numerosInput');

        // Si no se proporcionan nuevos números, utilizamos los números recibidos
        if (empty($numerosInput)) {
            return redirect()->route('NBoletos')->with('mensaje', 'Tus datos se han actualizado');
        }

        // Si se proporcionan nuevos números, los procesamos y los enviamos de vuelta
        return redirect()->route('NPruebas', ['numeros' => $numerosInput])->with('mensaje', 'Tus datos se han actualizado');
    }
    
    function pruebas($numeros) {
        $numerosArray = $numeros ? explode(',', $numeros) : [];
    
        $numeros1 = explode(',', $numeros);
        $cantidadNumeros = count($numeros1);
    
        return view('cliente.apartado', ['numeros' => $numerosArray, 'cantidadNumeros' => $cantidadNumeros]);
    }
    
    
    function apartar(Request $req){
        // Obtener los números recibidos del formulario
        $numerosRecibidos = $req->input('numerosRecibidos');
    
        // Convertir los números en un array
        $numerosArray = explode(',', $numerosRecibidos);
    
        // Procesa y guarda los números en la base de datos
        foreach ($numerosArray as $numero1) {
            DB::table('apartados')->insert([
                'boleto' => $numero1,
                'fechaapartados'=>Carbon::now(),
                'boleto_id' => $numero1,
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now(),
            ]);
            
            DB::table('boleto')->where('idboleto', $numero1)->update([
                'fechaApartado' => now(),
                'fechaCompra' => null,
                'comprado' => '0',
                
                
            ]);
            DB::table('participante')->insert([
                'nombre' => $req->input('nombreInput') . ' ' . $req->input('apellidosInput'),
                'telefono' => $req->input('whatsappInput'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => null,
                'boleto_id' =>  $numero1
            ]);
           
        }
        
        $numeros = explode(',', $numerosRecibidos);

    // Contar la cantidad de elementos en el array
         $saltoLinea = "\n";
        $cantidadNumeros = count($numeros);
        $nombre = $req->input('nombreInput') . ' ' . $req->input('apellidosInput');
        $numeroTelefono = $req->input('whatsappInput');
        $numeroTelefono1 = '4424874968'; // Número de teléfono al que deseas enviar el mensaje
        $mensaje = urlencode("Hola, Aparte boletos de la rifa!!" . $saltoLinea . 
        "XTRAIL 2016!!" . $saltoLinea . 
                "———————————" . $saltoLinea . 
                "🍀" . $cantidadNumeros . " BOLETO: " 
                . $numerosRecibidos . $saltoLinea . 
                "Nombre: " . $nombre . $saltoLinea . 
                "🎫 1 BOLETO POR $15" . $saltoLinea .
                "  2 BOLETOS POR $30" . $saltoLinea .
                "  3 BOLETOS POR $45" . $saltoLinea .
                "  4 BOLETOS POR $60" . $saltoLinea .
                "  5 BOLETOS POR $75" . $saltoLinea .
                "  10 BOLETOS POR $150" . $saltoLinea .
                "————————————" . $saltoLinea .
        "👇CUENTAS DE PAGO AQUÍ: www.rifasdanielpineda.com/pagos" . $saltoLinea .
        "Celular: " . $numeroTelefono . $saltoLinea . 
        "El siguiente paso es enviar foto del comprobante de pago por aquí");

        // Construimos la URL de redirección
        $url = 'https://api.whatsapp.com/send/?phone=' . $numeroTelefono1 . '&text=' . $mensaje;

        // Redireccionamos al usuario a la URL de WhatsApp
        return Redirect::away($url);
    }


    //VENTANA EMERGENTE DE LOS BOLETOS (MAQUINA DE LA SUERTE)
    function maquina(Request $req) {
        $numerosRecibidos = urldecode($req->input('inputCantidadBoletos'));


        // Si no se proporcionan nuevos números, utilizamos los números recibidos
        
        return redirect()->route('maquinasuerte', ['numeros' => $numerosRecibidos])->with('mensaje', 'Tus datos se han actualizado');
    }
    
    function maquinasuerte($numeros){
 
        $numerosArray = $numeros ? explode(',', str_replace(' ', '', $numeros)) : [];
        $numeros1 = explode(',', $numeros);
        $cantidadNumeros = count($numeros1);
    
        return view('cliente.apartado',['numeros' => $numerosArray, 'cantidadNumeros' => $cantidadNumeros]);
    }

 

    function maquinaapartar(Request $req)
    {
        // Obtener los números recibidos del formulario
        $numerosRecibidos = $req->input('numerosRecibidos1');
    
        // Convertir los números en un array
        $numerosArray = explode(',', $numerosRecibidos);
    
        // Procesar y guardar los números en la base de datos
        foreach ($numerosArray as $numero1) {
            DB::table('apartados')->insert([
                'boleto' => $numero1,
                'fechaapartados' => Carbon::now(),
                'boleto_id' => $numero1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
    
            DB::table('boleto')->where('idboleto', $numero1)->update([
                'fechaApartado' => now(),
                'fechaCompra' => null,
                'comprado' => '0',
    
                "participante_id" => null,
            ]);
    
            DB::table('participante')->insert([
                'nombre' => $req->input('nombreInput') . ' ' . $req->input('apellidosInput'),
                'telefono' => $req->input('whatsappInput'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => null,
                'boleto_id' => $numero1
            ]);
        }
    
            $numeros = explode(',', $numerosRecibidos);

            // Contar la cantidad de elementos en el array
                 $saltoLinea = "\n";
                $cantidadNumeros = count($numeros);
                $nombre = $req->input('nombreInput') . ' ' . $req->input('apellidosInput');
                $numeroTelefono = $req->input('whatsappInput');
                $numeroTelefono1 = '4424874968'; // Número de teléfono al que deseas enviar el mensaje
                $mensaje = urlencode("Hola, Aparte boletos de la rifa!!" . $saltoLinea . 
                "XTRAIL 2016!!" . $saltoLinea . 
                "———————————" . $saltoLinea . 
                "🍀" . $cantidadNumeros . " BOLETO: " 
                . $numerosRecibidos . $saltoLinea . 
                "Nombre: " . $nombre . $saltoLinea . 
                "🎫 1 BOLETO POR $15" . $saltoLinea .
                "  2 BOLETOS POR $30" . $saltoLinea .
                "  3 BOLETOS POR $45" . $saltoLinea .
                "  4 BOLETOS POR $60" . $saltoLinea .
                "  5 BOLETOS POR $75" . $saltoLinea .
                "  10 BOLETOS POR $150" . $saltoLinea .
                "————————————" . $saltoLinea .
                "👇CUENTAS DE PAGO AQUÍ: www.rifasdanielpineda.com/pagos" . $saltoLinea .
                "Celular: " . $numeroTelefono . $saltoLinea . 
                "El siguiente paso es enviar foto del comprobante de pago por aquí");
        
                // Construimos la URL de redirección
                $url = 'https://api.whatsapp.com/send/?phone=' . $numeroTelefono1 . '&text=' . $mensaje;
        
                // Redireccionamos al usuario a la URL de WhatsApp
                return Redirect::away($url);
}
    


    public function buscarBoletos(validarBuscar $request)
    {
        $consulta = DB::table('boleto')->get();
        // Consulta base para obtener todos los boletos
        $consultaB = DB::table('boleto');

        // Verifica si hay un término de búsqueda
        if ($request->has('buscar')) {
            $terminoBusqueda = $request->input('buscar');
            $consultaB->where(function ($query) use ($terminoBusqueda) {
                $query->where('idboleto', 'like', '%' . $terminoBusqueda . '%');
                    
            });
        }

        // Ejecuta la consulta y obtén los resultados
        $consultaB = $consultaB->get();
        $resultado = DB::table('boleto')->whereNull('fechaApartado')->pluck('idboleto')->toArray();

       

        // Retorna la vista con los resultados
        return view('cliente.boletosbuscar', compact('consulta', 'consultaB', 'resultado'));
    }

}
