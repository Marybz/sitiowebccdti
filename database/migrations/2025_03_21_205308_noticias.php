<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id(); // Columna 'id' autoincremental
            $table->string('titulo'); // Columna 'titulo' de tipo string
            $table->string('imagen')->nullable(); // Columna 'imagen' (puede ser nula)
            $table->text('descripcion'); // Columna 'descripcion' de tipo text
            $table->timestamps(); // Columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias'); // Elimina la tabla si existe
    }
};