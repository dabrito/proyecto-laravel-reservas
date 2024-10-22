<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
  use HasFactory;

  protected $table = 'reservas';

  protected $fillable = [
    'usuario_id',
    'mesa_id',
    'fecha_reserva',
    'hora_reserva',
    'numero_personas',
    'estado',
  ];

  // Relación con Usuario
  public function usuario()
  {
    return $this->belongsTo(Usuario::class, 'usuario_id');
  }

  // Relación con Mesa
  public function mesa()
  {
    return $this->belongsTo(Mesa::class, 'mesa_id');
  }
}
