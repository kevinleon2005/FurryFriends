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
        Schema::create('inventario', function (Blueprint $table) {
            $table->string('id')->primary(); // ID personalizado con prefijo INV
            $table->string('descripcionStock');
            $table->string('ubicacion');
            $table->date('fechaActualizacion');
            $table->integer('stockActual');
            $table->string('id_proveedor')->nullable(); // Crea la columna de clave foránea
            $table->foreign('id_proveedor')->references('id')->on('proveedors')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};