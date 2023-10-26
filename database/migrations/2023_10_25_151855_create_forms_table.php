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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ci');
            $table->string('email');
            $table->integer('telefono'); // Campo "telefono" como entero
            $table->string('denunciado');
            $table->string('direccion');
            $table->string('unipolicial');
            $table->string('cargo');
            $table->string('ciudad');
            $table->string('departamento');
            $table->text('detalle');
            $table->date('fecha');
            $table->string('archivo');
            $table->string('Estado')->default('No verificado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
