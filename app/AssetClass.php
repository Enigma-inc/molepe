<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetClass extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name','description'];

    public function AssetSubclasses()
    {
        return $this->hasMany(AssetSubclass::class,'asset_class_id');
    }

    public static  function createAssetClass($name, $description)
    {
        $assetClass=new static(compact('name','description'));
        //Raise Event for New Asset Class
        return $assetClass;
    }

    public static  function updateAssetClass($name,$description)
    {
        $assetClass=new static(compact('name','description'));

        //Raise Events for Updates

        return $assetClass->attributes;
    }

}
