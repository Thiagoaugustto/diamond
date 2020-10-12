<?php

namespace App\Presenters;

use App\Transformers\IngressoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class IngressoPresenter.
 *
 * @package namespace App\Presenters;
 */
class IngressoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new IngressoTransformer();
    }
}
