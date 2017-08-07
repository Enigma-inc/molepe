<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class AssetSubclass extends Model implements Transformable
{
    use TransformableTrait;


    protected $guarded=['id'];

    //SETTERS AND GETTERS
    public function setMinUsefulLifeAttribute($value)
    {

        $this->attributes['min_useful_life'] = (int)$value;
    }
    public function setMaxUsefulLifeAttribute($value)
    {

        $this->attributes['max_useful_life'] = (int) $value;
    }
    public function setAssetClassIdAttribute($value)
    {
        $this->attributes['asset_class_id'] = (int)$value;
    }
    //RELATIONSHIPS
    public function Assets()
    {
        return $this->hasMany(Asset::class,'class_id');

    }
    public function parentClass()
    {
        return $this->belongsTo(AssetClass::class,'asset_class_id');

    }




    //MEMBERS FUNCTIONS
    public static function createAssetSubclass($assetClassId,$name,$description,$minUsefulLife,$maxUsefulLife)
    {

        $assetSubclass=new static(compact(['asset_class_id'=> 'assetClassId','name','description','minUsefulLife','maxUsefulLife']));

       return $assetSubclass;
    }
    public static  function RaiseAssetSubclassUpdatedEvents()
    {
        //Raise asset subclass saved events here..
    }
}
