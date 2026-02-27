<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('zona_id')->constrained()->onDelete('cascade');
            $table->string('direccion');
            $table->decimal('precio_alquiler', 10, 2);
            $table->integer('habitaciones');
            $table->boolean('disponible')->default(true);
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propiedads');
    }
};