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
    Schema::create('horario_disponibles', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('mesa_id');
      $table->date('fecha');
      $table->time('hora');
      $table->boolean('disponible')->default(true);
      $table->timestamps();

      // Clave foránea
      $table->foreign('mesa_id')->references('id')->on('mesas')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('horario_disponibles');
  }
};
