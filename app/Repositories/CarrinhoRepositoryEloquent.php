<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CarrinhoRepository;
use App\Entities\Carrinho;
use App\Validators\CarrinhoValidator;

/**
 * Class CarrinhoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CarrinhoRepositoryEloquent extends BaseRepository implements CarrinhoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Carrinho::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CarrinhoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
