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
        Schema::create('agendamientos', function (Blueprint $table) {
            $table->string('id')->primary(); // ID personalizado con prefijo AGE
            $table->date('fechaAgendamiento');
            $table->string('tipoServicio');
            $table->string('estadoAgendamiento');
            $table->string('id_propietario')->nullable(); // Crea la columna de clave foránea
            $table->foreign('id_propietario')->references('id')->on('propietarios')->onDelete('cascade')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamientos');
    }
};