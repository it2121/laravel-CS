<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use SoftDeletes;

protected $guarded =[];


public function featuers():HasOne{


return $this->hasOne(CarFeatures::class);
    
}
public function primaryImage():HasOne{


    return $this->hasOne(CarImage::class )->oldestOfMany('position');
        
    }
    
    

}

