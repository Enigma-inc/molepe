<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CostCenter extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillable = ['name'];

    public function Assets()
    {
        return $this->hasMany(Asset::class,'section_id');
    }
}
