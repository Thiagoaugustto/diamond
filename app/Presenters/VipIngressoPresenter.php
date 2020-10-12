<?php

namespace App\Presenters;

use App\Transformers\VipIngressoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class VipIngressoPresenter.
 *
 * @package namespace App\Presenters;
 */
class VipIngressoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new VipIngressoTransformer();
    }
}
