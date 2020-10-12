<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['user_id','status'];

    public function pedido_produtos()
    {
    	return $this->hasMany(PedidoProduto::class)
    		->select( \DB::raw('evento_id, sum(desconto) as descontos, sum(valor) as valores, count(1) as qtd') )
    		->groupBy('evento_id')
    		->orderBy('evento_id', 'desc');
    }

    public function pedido_produtos_itens()
    {
        return $this->hasMany(PedidoProduto::class);
    }

    public static function consultaId($where)
    {
    	$pedido = self::where($where)->first(['id']);
    	return !empty($pedido->id) ? $pedido->id : null;
    }
}