<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Eventos;

/**
 * Class EventosTransformer.
 *
 * @package namespace App\Transformers;
 */
class EventosTransformer extends TransformerAbstract
{
    /**
     * Transform the Eventos entity.
     *
     * @param \App\Entities\Eventos $model
     *
     * @return array
     */
    public function transform(Eventos $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
