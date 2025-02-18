<?php

namespace Database\Seeders;

use App\Models\CarImage;
use App\Models\FuelType;
use App\Models\User;
use App\Models\City;
use App\Models\Cartype;
use App\Models\Model;
use App\Models\Car;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Model::factory()->count(5)
        ->forMaker()
        ->create();


        Model::factory()->count(5)
        ->forMaker()
        ->create();

        Model::factory()->count(5)
        ->forMaker()
        ->create();


        Model::factory()->count(5)
        ->forMaker()
        ->create();


        Model::factory()->count(5)
        ->forMaker()
        ->create();


        Model::factory()->count(5)
        ->forMaker()
        ->create();


        Cartype::factory()->count(9)->create();
        FuelType::factory()->count(4)->create();


            City::factory()->count(5)
            ->forState()
            ->create();
        
            City::factory()->count(5)
            ->forState()
            ->create();
            City::factory()->count(5)
            ->forState()
            ->create();
            City::factory()->count(5)
            ->forState()
            ->create();
            City::factory()->count(5)
            ->forState()
            ->create();
            City::factory()->count(5)
            ->forState()
            ->create();
        

       

User::factory()
->count(3)->create();

User::factory()
->count(3)->create();

User::factory()
->has( Car::factory()->count(50)
->has(CarImage::factory()->count(5)->sequence (fn (Sequence $sequence)=>
['position'=>$sequence->index%5+1]),'images')
->hasFeatuers()
,'favouriteCars')
->count(2)->create();


    }
}
