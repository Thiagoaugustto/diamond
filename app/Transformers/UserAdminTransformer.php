<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\UserAdmin;

/**
 * Class UserAdminTransformer.
 *
 * @package namespace App\Transformers;
 */
class UserAdminTransformer extends TransformerAbstract
{
    /**
     * Transform the UserAdmin entity.
     *
     * @param \App\Entities\UserAdmin $model
     *
     * @return array
     */
    public function transform(UserAdmin $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
