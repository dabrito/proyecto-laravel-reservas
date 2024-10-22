<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory, Notifiable;

  protected $table = 'usuarios';
  protected $fillable = [
    'nombre',
    'email',
    'password',
    'rol',
  ];

  // Ocultar campos sensibles
  protected $hidden = [
    'password',
    'remember_token',
  ];
  
  // Relación con Reservas
  public function reservas()
  {
    return $this->hasMany(Reserva::class, 'usuario_id');
  }
  
      /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
