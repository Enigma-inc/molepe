<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class AssetAccountability extends Model
{
    use TransformableTrait;
    use SoftDeletes;
    
    protected $dates = ['created_at'];

    protected $guarded = ['id'];

    protected $fillable = ['custodian', 'department', 'section', 'costCenter'];

    public function custodian()
     {
         return $this->belongsTo(Custodian::class);
     }
     public function costCenter()
     {
         return $this->belongsTo(CostCenter::class);
     }
     public function department()
     {
         return $this->belongsTo(Department::class);
     }
     public function section()
     {
         return $this->belongsTo(Section::class);
     }
}
