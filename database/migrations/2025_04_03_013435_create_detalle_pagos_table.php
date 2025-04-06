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
        Schema::create('detalle_pagos', function (Blueprint $table) {
            $table->string('id')->primary(); // ID personalizado con prefijo DET
            $table->decimal('montoPago', 10, 2);
            $table->date('fechaPago');
            $table->string('medioPago');
            $table->string('estadoPago');
            $table->string('descripcionPago');
            $table->string('comprobantePago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pagos');
    }
};