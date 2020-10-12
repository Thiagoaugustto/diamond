<?php

namespace App\Presenters;

use App\Transformers\ConfigTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ConfigPresenter.
 *
 * @package namespace App\Presenters;
 */
class ConfigPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ConfigTransformer();
    }
}
