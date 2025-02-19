<?php

namespace App\Models;
use app\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarImage extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded =[];
    public function car(): BelongsTo {

        return $this->belongsTo(Car::class);
    }
    
}
