<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Carrinho;

/**
 * Class CarrinhoTransformer.
 *
 * @package namespace App\Transformers;
 */
class CarrinhoTransformer extends TransformerAbstract
{
    /**
     * Transform the Carrinho entity.
     *
     * @param \App\Entities\Carrinho $model
     *
     * @return array
     */
    public function transform(Carrinho $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
