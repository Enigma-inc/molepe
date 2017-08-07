<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class AssetGroup extends Model implements Transformable
{
    use TransformableTrait;

    protected $guarded = ['id'];

     public function Assets()
         {
             return $this->hasMany(Asset::class,'functional_group_id');
         }

}
