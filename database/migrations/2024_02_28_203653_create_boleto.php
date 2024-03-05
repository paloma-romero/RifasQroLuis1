<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('boleto', function (Blueprint $table) {
            $table->id('idboleto');
            $table->string('boleto', 7)->default('00001'); // Establece el valor por defecto de 'boleto' a 1
            $table->datetime('fechaApartado')->nullable();
            $table->datetime('fechaCompra')->nullable();
            $table->bigInteger('comprado')->default(0); // Cambiado a un campo booleano para indicar si el boleto está comprado o no
            $table->timestamps();
        });
        

        // Agregar varios números por defecto
        for ($i = 00001; $i <= 60000; $i++) {
            $numeroBoleto = sprintf('%05d', $i);
            DB::table('boleto')->insert([
                
                'boleto' => $numeroBoleto,
                
                // Añade aquí los valores para las otras columnas si es necesario
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('boleto');
    }

};
