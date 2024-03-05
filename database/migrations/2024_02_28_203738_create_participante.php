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
        Schema::create('participante', function (Blueprint $table) {
           
                $table->id('idparticipante');
                $table->string('nombre');
                $table->string('telefono');
              
                $table->timestamps();
                $table->unsignedBigInteger('user_id')->nullable();
                $table->unsignedBigInteger('boleto_id')->nullable();
               
                // Definir la restricción de la llave foránea
                $table->foreign('user_id')->references('id')->on('users');
                // Definir la restricción de la llave foránea
                $table->foreign('boleto_id')->references('idboleto')->on('boleto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('participante');
    }
};
