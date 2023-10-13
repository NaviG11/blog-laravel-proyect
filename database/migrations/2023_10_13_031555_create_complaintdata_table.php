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
        Schema::create('complaintdata', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('ci')->nullable();
            $table->string('email')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('denunciado')->nullable();
            $table->string('direccion')->nullable();
            $table->string('unipolicial')->nullable();
            $table->string('cargo')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('departamento')->nullable();
            $table->string('detalle')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('archivo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaintdata');
    }
};
