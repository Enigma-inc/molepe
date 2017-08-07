<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Zone extends Model implements Transformable
{
    use TransformableTrait;

    protected $guarded = ['id'];
    
     public function Assets()
     {
         return $this->hasMany(Asset::class, 'zone_id');
     }


    public static function getInstance($name,$description)
    {
        return new static(compact('name','description'));
    }
}
