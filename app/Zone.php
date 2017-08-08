<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone extends Model implements Transformable
{
    use SoftDeletes;
    use TransformableTrait;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    
     public function Assets()
     {
         return $this->hasMany(Asset::class, 'zone_id');
     }


    public static function getInstance($name,$description)
    {
        return new static(compact('name','description'));
    }
}
