<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMesa extends Model
{
  use HasFactory;

  protected $table = 'tipos_mesa';

  protected $fillable = [
    'nombre_tipo',
    'descripcion',
  ];

  // Relación con Mesas
  public function mesas()
  {
    return $this->hasMany(Mesa::class, 'tipo_id');
  }
}
