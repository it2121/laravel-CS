<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maker extends Model
{ use HasFactory;
    public $timestamps = false;
    protected $guarded =[];




    
    public function cars():HasMany{

        return $this-> hasMany(Car::class);
        
        }
        public function models():HasMany{

            return $this-> hasMany(Model::class);
            
            }
        

}
