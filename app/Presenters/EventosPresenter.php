<?php

namespace App\Presenters;

use App\Transformers\EventosTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EventosPresenter.
 *
 * @package namespace App\Presenters;
 */
class EventosPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EventosTransformer();
    }
}
