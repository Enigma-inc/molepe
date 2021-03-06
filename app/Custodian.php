<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Custodian extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'last_name', 'email', 'phone'];

    public function Assets()
    {
        return $this->hasMany(AssetAccountability::class, 'custodian_id');
    }
}
