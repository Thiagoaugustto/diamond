<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserAdminRepository;
use App\Entities\UserAdmin;
use App\Validators\UserAdminValidator;

/**
 * Class UserAdminRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserAdminRepositoryEloquent extends BaseRepository implements UserAdminRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserAdmin::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return UserAdminValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
