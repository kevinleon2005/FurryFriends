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
        Schema::create('servicios', function (Blueprint $table) {
            $table->string('id')->primary(); // ID personalizado con prefijo SER
            $table->string('nombreServicio');
            $table->string('descripcionServicio');
            $table->decimal('precio', 10, 2);
            $table->string('id_agendamiento')->nullable(); // Crea la columna de clave foránea
            $table->foreign('id_agendamiento')->references('id')->on('agendamientos')->onDelete('set null');
            $table->string('id_pago')->nullable(); // Crea la columna de clave foránea
            $table->foreign('id_pago')->references('id')->on('pagos')->onDelete('set null');
            $table->string('id_mascota')->nullable(); // Crea la columna de clave foránea
            $table->foreign('id_mascota')->references('id')->on('mascotas')->onDelete('set null');
            $table->string('id_calificacion')->nullable(); // Crea la columna de clave foránea
            $table->foreign('id_calificacion')->references('id')->on('calificacions')->onDelete('set null');
            $table->time('duracionServicio');
            $table->date('fechaServicio');
            $table->string('tipoMedio');
            $table->string('estadoServicio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};