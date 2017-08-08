<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $dates = ['created_at'];

    protected $guarded = ['id'];

    public function assetClass()
    {
        return $this->belongsTo(AssetSubclass::class,'class_id');
    }
     public function zone()
     {
         return $this->belongsTo(Zone::class);
     }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
     public function functionalGroup()
     {
        return $this->belongsTo(AssetGroup::class);
     }
     public function childAssets()
     {
         return $this->hasMany(Asset::class, 'parent_id');
     }
     public function parent()
     {
         return $this->belongsTo(Asset::class, 'parent_id');
     }

}
