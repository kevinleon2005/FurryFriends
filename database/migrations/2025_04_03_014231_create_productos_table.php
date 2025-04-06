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
        Schema::create('productos', function (Blueprint $table) {
            $table->string('id')->primary(); // ID personalizado con prefijo PROD
            $table->string('nombreProducto');
            $table->string('descripcionProducto');
            $table->decimal('precio');
            $table->integer('stock');
            $table->string('marca');
            $table->string('id_categoria')->nullable();
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('set null');
            $table->string('id_inventario')->nullable();
            $table->foreign('id_inventario')->references('id')->on('inventario')->onDelete('set null');
            $table->string('id_orden')->nullable();
            $table->foreign('id_orden')->references('id')->on('orden_compras')->onDelete('set null');
            $table->string('estadoProducto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

