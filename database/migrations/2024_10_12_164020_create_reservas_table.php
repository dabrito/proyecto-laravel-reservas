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
    Schema::create('reservas', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('usuario_id');
      $table->unsignedBigInteger('mesa_id');
      $table->string('nombre');
      $table->date('fecha_reserva');
      $table->time('hora_reserva');
      $table->unsignedInteger('numero_personas');
      $table->enum('estado', ['pendiente', 'confirmada', 'cancelada'])->default('pendiente');
      $table->timestamps();

      // Claves foráneas
      $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
      $table->foreign('mesa_id')->references('id')->on('mesas')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('reservas');
  }
};
