<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario extends Model
{
    use HasFactory,SoftDeletes;

    public function negocios()
    {
        return $this->belongsTo(Negocio::class,'negocios_id','id');
    }
    public function nego_horario(){
        return $this->belongsToMany(Negocio::class,'negocio_horario','horarios_id','negocios_id');
    }

}
