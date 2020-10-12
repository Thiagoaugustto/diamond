<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    protected $fillable = ['pedido_id','evento_id','status', 'area', 'tipo', 'valor', 'taxa'];

    public function evento()
    {
    	return $this->belongsTo('App\Entities\Eventos', 'evento_id', 'id');
    }
}