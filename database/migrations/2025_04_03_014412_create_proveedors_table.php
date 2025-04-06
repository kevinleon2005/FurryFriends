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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->string('id')->primary(); // ID personalizado con prefijo PROV
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('correo');
            $table->string('descripcionRecargo');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};