<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use SoftDeletes;

public function images():HasMany            {
return $this->hasMany(CarImage::class);

}


//many to one //
public function carType():BelongsTo            {
    return $this->belongsTo(CarType::class);
    
    }
     

    public function favouredUsers():BelongsToMany {

        return $this->belongsToMany(User::class,'favourite_cars');
    }

protected $guarded =[];


public function featuers():HasOne{


return $this->hasOne(CarFeatures::class);
    
}
public function primaryImage():HasOne{


    return $this->hasOne(CarImage::class )->oldestOfMany('position');
        
    }
    
    

}

