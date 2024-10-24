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
    Schema::create('mesas', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('numero_mesa');
      $table->unsignedInteger('capacidad');
      $table->unsignedBigInteger('tipo_id');
      $table->boolean('disponible')->default(true);
      $table->timestamps();

      // Clave foránea
      $table->foreign('tipo_id')->references('id')->on('tipos_mesas')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('mesas');
  }
};
