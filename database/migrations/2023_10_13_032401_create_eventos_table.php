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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->string('Imagen');
            $table->string('Descripcion');
            $table->string('Lugar');
            $table->date('Fecha', $precision = 0);
            // $table->Time('Hora', $precision = 0);
            $table->string('Link');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
