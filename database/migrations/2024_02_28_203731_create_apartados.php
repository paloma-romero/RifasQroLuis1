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
        Schema::create('apartados', function (Blueprint $table) {
            $table->id('idapartados');
            $table->integer('boleto');
            $table->datetime('fechaapartados');
            $table->unsignedBigInteger('boleto_id')->nullable();;
            // Definir la restricción de la llave foránea
            $table->foreign('boleto_id')->references('idboleto')->on('boleto');
            $table->timestamps();

            
                
            
        });

        // Agregar varios números por defecto
        
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('apartados');
    }
};
