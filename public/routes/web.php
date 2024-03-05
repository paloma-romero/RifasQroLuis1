<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\BoletoController;
use App\Http\Controllers\ControladorPaginas;
use Illuminate\Http\Response;
use App\Http\Controllers\NumeroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/home', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
    
});




Route::group(['middleware' => 'auth'], function () {
    Route::get('/vista-protegida', 'LoginController@accion')->name('vista.protegida');
    // Otras rutas que deseas proteger...

//USUARIO
Route::get('/usuario/{id}/edit',[HomeController::class,'editusuario'])->name('usuario.edit');
Route::put('/usuario/{id}', [HomeController::class,'updateusuario'])->name('usuario.update');
Route::get('/usuario/{id}/confirm',[HomeController::class,'confirmusuario'])->name('usuario.confirm');
Route::delete('/usuario/{id}',[HomeController::class,'destroyusuario'])->name('usuario.destroy');

//PARTICIPANTE
Route::get('/participante',[ParticipanteController::class,'participanteindex'])->name('participante.index');
Route::get('/participante/create',[ParticipanteController::class,'participantecreate'])->name('participante.create');
Route::post('/participante',[ParticipanteController::class,'participantestore'])->name('participante.store');
Route::get('/participante/{id}/edit',[ParticipanteController::class,'participanteedit'])->name('participante.edit');
Route::put('/participante/{id}', [ParticipanteController::class,'participanteupdate'])->name('participante.update');
Route::get('/participante/{id}/confirm',[ParticipanteController::class,'participanteconfirm'])->name('participante.confirm');
Route::delete('/participante/{id}',[ParticipanteController::class,'participantedestroy'])->name('participante.destroy');
Route::get('/buscarParticipante', [ParticipanteController::class, 'buscarParticipante'])->name('participante.buscar');


//BOLETOS
Route::get('/boleto',[BoletoController::class,'boleto'])->name('participante.boletos');
Route::get('/boleto/{id}/confirmFECHA',[BoletoController::class,'boletoconfirmFECHA'])->name('boleto.confirmFECHA');
Route::put('/boleto/{id}/updateFECHA',[BoletoController::class,'boletouptadeFECHA'])->name('boleto.updateFECHA');
Route::get('/boleto/{id}/confirmTODO',[BoletoController::class,'boletoconfirmTODO'])->name('boleto.confirmTODO');
Route::put('/boleto/{id}/updateTODO',[BoletoController::class,'boletoupdateTODO'])->name('boleto.updateTODO1');
Route::get('/boleto/{id}/editarParticipante',[BoletoController::class,'boletoconfirmParticipante'])->name('boleto.confirmParticipante');
Route::put('/boleto/{id}/updateparticipante',[BoletoController::class,'updateparticipante'])->name('boleto.updateparticipante');
Route::get('/buscarBoletoAdmin', [BoletoController::class, 'buscarBoletoAdmin'])->name('boleto.buscarAdmin');
});

Route::fallback(function () {
    return response()->view('error', [], 404);
});
//CLIENTE
///
///

Route::get('/', [ControladorPaginas::class,'home'])->name('NIngresar');
Route::get('/preguntas', [ControladorPaginas::class,'preguntas'])->name('NPreguntas');
Route::get('/tarjeta', [ControladorPaginas::class,'tarjeta'])->name('NTarjetas');

//BOLETOS
Route::get('/boletos', [ControladorPaginas::class,'boletos'])->name('NBoletos');
Route::get('/pruebas/{numeros}', [ControladorPaginas::class,'pruebas'])->name('NPruebas');
Route::post('/enviarlista', [ControladorPaginas::class,'enviarlista'])->name('enviarlista');
Route::post('/apartar', [ControladorPaginas::class,'apartar'])->name('apartar');
Route::get('/buscarBoletos', [ControladorPaginas::class, 'buscarBoletos'])->name('boletos.buscar');


    //MAQUINA DE LA SUERTE
Route::post('/maquina', [ControladorPaginas::class,'maquina'])->name('maquina');
Route::post('/maquinaapartar', [ControladorPaginas::class,'apartarmaquina'])->name('maquinaapartar');
Route::get('/maquinasuerte/{numeros}', [ControladorPaginas::class,'maquinasuerte'])->name('maquinasuerte');



