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
        Schema::create('centros_locales', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->string('Logo');
            $table->string('Descripcion');
            $table->string('Ubicacion');
            $table->string('Ciudad');
            $table->string('Telefono');
            $table->string('Correo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centros_locales');
    }
};
