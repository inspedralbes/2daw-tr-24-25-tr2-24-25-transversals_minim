<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->string('operacion');
            $table->integer('respuesta_correcta'); 
            $table->integer('respuestas_incorrectas_1');
            $table->integer('respuestas_incorrectas_2');
            $table->integer('respuestas_incorrectas_3');
            $table->string('modo'); 
            $table->integer('duracion'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidas');
    }
};
