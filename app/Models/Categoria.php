<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory,SoftDeletes;
    public function negocios()
    {
        return $this->hasMany(Negocio::class,'categorias_id','id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class,'categorias_id','id');
    }
}
