<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class CupomDesconto extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['name', 'localizador', 'desconto', 'modo_desconto', 'limite', 'modo_limite', 'dthr_validade', 'ativo'];
}

