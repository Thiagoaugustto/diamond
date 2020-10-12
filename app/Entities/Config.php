<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Config.
 *
 * @package namespace App\Entities;
 */
class Config extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['logo', 'icon', 'banner1', 'banner2', 'banner3', 'newsletter', 'payment', 'whatsapp', 'facelink', 'instalink'];

}
