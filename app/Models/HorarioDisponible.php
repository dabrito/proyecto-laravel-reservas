<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioDisponible extends Model
{
  use HasFactory;

  protected $table = 'horarios_disponibles';

  protected $fillable = [
    'mesa_id',
    'fecha',
    'hora',
    'disponible',
  ];

  // Relación con Mesa
  public function mesa()
  {
    return $this->belongsTo(Mesa::class, 'mesa_id');
  }
}
