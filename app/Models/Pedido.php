<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use HasFactory,SoftDeletes;
    public function negocio()
    {
        return $this->belongsTo(Negocio::class,'negocios_id','id');
    }
    public function productos(){
        return $this->belongsToMany(Producto::class,'detalle_pedidos','pedidos_id','productos_id')->withPivot('cantidad','precio','total','comentario');
    }
    public function cliente()
    {
        return $this->belongsTo(User::class,'cliente_id','id');
    }

    public function repartidor()
    {
        return $this->belongsTo(User::class,'repartidor_id','id');
    }
}
