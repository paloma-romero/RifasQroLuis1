<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LimpiarBoletos extends Command
{
    protected $signature = 'boletos:limpiar';

    protected $description = 'Elimina automáticamente los boletos que no han sido comprados en un tiempo determinado.';

    public function handle()
    {
       
        // Calcular la fecha hace 12 horas
        $fechaLimite = now()->subHours(12);

        // Actualizar boletos que no tienen fecha de compra y han pasado más de 12 horas desde la fecha de apartado
        $boletos = DB::table('boleto')
            ->whereNull('fechaCompra')
            ->whereNotNull('fechaApartado')
            ->where('fechaApartado', '<', $fechaLimite)
            ->update(['fechaApartado' => null]);

        $this->info('Se han eliminado las fechas de apartado de ' . $boletos . ' boletos.');
    }
    
}

