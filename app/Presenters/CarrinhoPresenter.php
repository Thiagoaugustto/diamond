<?php

namespace App\Presenters;

use App\Transformers\CarrinhoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CarrinhoPresenter.
 *
 * @package namespace App\Presenters;
 */
class CarrinhoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CarrinhoTransformer();
    }
}
