<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo_usuario extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['nombre'];
    public function users(){
        return $this->hasMany(User::class,'users_id','id');
    }

    protected $table = 'tipo_usuarios';
}
