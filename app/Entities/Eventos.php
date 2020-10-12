<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Eventos.
 *
 * @package namespace App\Entities;
 */
class Eventos extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['image','name','name_pos','start', 'address', 'age', 'date', 'link', 'city', 'state', 'place', 'gate_opening', 'scaner_password', 'start_time', 'closing_time', 'description', 'url_video', 'area', 'lote', 'qtd', 'tipo_a', 'valor_a', 'taxa_a', 'tipo_b', 'valor_b', 'taxa_b', 'area_v', 'lote_v', 'qtd_v', 'tipo_v', 'valor_v', 'taxa_v', 'tipo_p', 'valor_p', 'taxa_p', 'ativo'];
}
