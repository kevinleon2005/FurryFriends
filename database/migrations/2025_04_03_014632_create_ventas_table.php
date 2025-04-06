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
        Schema::create('ventas', function (Blueprint $table) {
            $table->string('id')->primary(); // ID personalizado con prefijo VEN
            $table->date('fechaVenta');
            $table->integer('cantidad');
            $table->decimal('total', 10,2);
            $table->string('estado');
            $table->string('id_producto')->nullable();
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('set null');
            $table->string('id_servicio')->nullable();
            $table->foreign('id_servicio')->references('id')->on('servicios')->onDelete('set null');
            $table->string('id_propietario')->nullable();
            $table->foreign('id_propietario')->references('id')->on('propietarios')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};