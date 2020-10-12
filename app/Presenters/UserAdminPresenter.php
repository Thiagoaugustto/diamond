<?php

namespace App\Presenters;

use App\Transformers\UserAdminTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserAdminPresenter.
 *
 * @package namespace App\Presenters;
 */
class UserAdminPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserAdminTransformer();
    }
}
