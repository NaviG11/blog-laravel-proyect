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
            $table->string('sexo_denunciante');
            $table->string('ci');
            $table->string('extension');
            $table->integer('edad');
            $table->string('direccion');
            $table->string('email');
            $table->integer('telefono'); // Campo "telefono" como entero
            $table->string('denunciado');
            $table->string('direccion_denunciado');
            $table->string('cargo_ocupa');
            $table->string('ci_denunciado');
            $table->integer('edad_denunciado');
            $table->integer('telefono_denunciado');
            $table->string('parentezco');
            $table->string('testigo');
            $table->string('parentezco_testigo');
            $table->date('fecha_denuncia');
            $table->string('lugar');
            $table->string('departamento');
            $table->text('detalle');
            $table->date('fecha');
            $table->string('archivo');
            $table->string('tipo_violencia');
            $table->string('Estado')->default('No verificado');
            $table->double('latitud', 10, 8); // Campo para la latitud (números con 10 dígitos en total y 6 decimales)
            $table->double('longitud', 10, 8);
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
