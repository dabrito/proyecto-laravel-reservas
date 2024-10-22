<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
  use HasFactory;

  protected $table = 'mesas';

  protected $fillable = [
    'numero_mesa',
    'capacidad',
    'tipo_id',
    'disponible',
  ];

  // Relación con Tipo de Mesa
  public function tipo()
  {
    return $this->belongsTo(TipoMesa::class, 'tipo_id');
  }

  // Relación con Reservas
  public function reservas()
  {
    return $this->hasMany(Reserva::class, 'mesa_id');
  }

  // Relación con Horarios Disponibles
  public function horariosDisponibles()
  {
    return $this->hasMany(HorarioDisponible::class, 'mesa_id');
  }
}
