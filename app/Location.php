<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Location extends Model implements Transformable
{
    use TransformableTrait;

    protected $guarded=['id'];

     public static  function getInstance($name,$description)
         {
             return new static(compact('name','description'));
         }

    public function Assets()
    {
        return $this->hasMany(Asset::class, 'location_id');
    }
}
