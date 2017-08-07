<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Coordinates extends Model implements Transformable
{
    use TransformableTrait;

    protected $guarded=['id'];

     public function assets()
         {
             return $this->hasMany(Asset::class);
         }

}
