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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->string('id')->primary(); // ID personalizado con prefijo MAS
            $table->string('nombre');
            $table->string('especie');
            $table->string('raza');
            $table->string('sexo');
            $table->string('informacionMedica');
            $table->integer('edad');
            $table->string('id_propietario')->nullable(); // Crea la columna de clave foránea
            $table->foreign('id_propietario')->references('id')->on('propietarios')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
