<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'nombre',
        'nickname',
        'correo',
        'telefono',
        'foto_perfil',
        'contrasena',
        'tipo_usuarios_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'contrasena',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tipo_usuario(){
        return $this->belongsTo(Tipo_usuario::class,'tipo_usuarios_id','id');
    }

    public function empleado(){
        return $this->belongsTo(Empleado::class,'usuarios_id','id');
    }

    public function historialPedidos(){
        return $this->hasMany(Pedido::class,'cliente_id','id');
    }

    public function pedidosRepartidos(){
        return $this->hasMany(Pedido::class,'cliente_id','id');
    }

}

