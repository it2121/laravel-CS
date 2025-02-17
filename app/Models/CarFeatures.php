<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeatures extends Model
{
    protected $primaryKey = "car_id";
    public $timestamps = false;
    protected $guarded =[];



    public function car(): BelongsTo {

        return $this->belongsTo(Car::class);
    }
    
    

}
