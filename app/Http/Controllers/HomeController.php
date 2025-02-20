<?php

namespace App\Http\Controllers;

use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Car;
use App\Models\Maker;
use App\Models\State;
use App\Models\City;
use App\Models\Model;
use App\Models\CarFeatures;

class HomeController extends Controller
{
    public function index(){

    //   $cars = Car::where('publicshed_at','!=' , null)->get();

    //    $cars = Car::where('publicshed_at','!=' , null)->first() ;
   
   
    // $cars = Car::find(id: 3);
    // $cars = Car::orderBy("created_at","desc")->get();
    // $cars = Car::orderBy("created_at","desc")->limit(2)->get();
    // $car = new Car();
    // $car->maker_id = 1;
    // $car->model_id = 1;
    // $car->year = 1999;
    // $car->price = 123;
    // $car->vin = 123;
    // $car->mileage = 123;
    // $car->car_type_id = 1;
    // $car->fuel_type_id = 1;
    // $car->user_type_id = 0;
    // $car->city_type_id = 1;
    // $car->address = "somewhere";
    // $car->phone = "123";
    // $car->description = "123";
    // $car->published_at = now();
    //         $car->save();

    //         $cars = Car::get();


    // return view('Home.index',[
    //     'name' => 'mohammed',
    //     'surename' => 'Talib'
    // ]);
    
    
    
    // $cars = Car::find(1);
    // $cars ->price = 12100;
    // $cars->save();
    // Car::updateOrCreate(['vin'=>'123' , 'price'=>123],
    //                                 ['price'=>9999]);
  
    // Car::where('published_at' , null)
    // ->where('user_type_id',0)
    // ->update(['published_at'=> now()]);



        // $car =Car::find(5);
        // $car->delete();



        //actually deletes them - hard delete
        // Car::truncate();



// Car::destroy([6,7]) ;

  //  dump( $cars);



  // $car =Car::find(0);



// $car->featuers ->abs =0;
// $car->featuers->save();


// dump($car->featuers , $car->primaryImage);



// $car =Car::find(1);



//   $feater =  new CarFeatures();
// $feater = CarFeatures::find(0);
// $feater->car_id = 1;
//  $feater->create($feater->getAttributes());


// $car->featuers()->save($feater->n);

// dump(Car::find(1)->featuers);


// $cars = Car::find(0);
// $users = User::find(0);



// $users ->favouriteCars()->attach([0,1]);
// $users ->favouriteCars()->detach();

// $users ->favouriteCars()->sync([0]); //delete all but the provided id 





// $image = new CarImage();

// $image = CarImage::find(1);
// $image->car_id = 1;
// $image->id = 2;

// $image->create($image->getAttributes());

// $image->id = 3;
// $image->create($image->getAttributes());

// $cars = Car::whereBelongsTo(CarType::where('name','Sedan')->first())->get();
// dd(CarType::where(column: 'name','Sedan')->first()->cars);

// dd($users->favouriteCars); 

// $user = User::factory()->create();
// dd($user);

// //create 2 and add them 
// $maker = Maker::factory()->count(2)->create();




// //create 2 and add dont add them just leave them in $maker 
// $maker = Maker::factory()->make();

//  $maker = Maker::factory()->make();

// dd($maker);




// //create and using a callback function that will exe after creating showing the created item
//  State::factory()
// ->afterCreating(function (State $state){

// dump($state);

// }




// //craete the main record and 5 models to each 25 in total 
// Maker::factory()
// ->count(5)
// ->hasModels(5)
// ->create();



// // //craete the main record and 5 models to each 25 in total but in reverse
// Model::factory()->count(3)
// ->forMaker()
// ->create();



// // //craete the main record and 5 models to each 25 in total but in reverse
// Model::factory()->count(3)
// ->for(Maker::factory()->state(['name' => 'ass']))
// ->create();
// User ::factory()
// ->has( Car::factory()->count(5),'favouriteCars')
// ->create();


// Maker::factory()->count(5)->Create();


// Model::factory()
// ->forMaker()
// ->count(5)->create();

// city::factory()->has(State::factory()->count(5))->count(5)->create();

// City::factory()
// ->forState()
// ->count(5)->create();
// User::factory()
// ->count(3)->create();

// User::factory()
// ->has( Car::factory()->count(50)
// ->has(CarImage::factory()->count(5)->sequence (fn ()=>['position'=>1]),'images')
// ->hasFeatuers()
// ,'favouriteCars')
// ->count(2)->create();

// Model::factory()->count(5)
// ->forMaker()
// ->create();

// User ::factory()
// ->create();

//one to many
// User::factory()
// ->has(Car::factory()->count(5),'favouriteCars')
// ->create();

// dd(Model::where('maker_id',13)->inRandomOrder()->first()->id);

// User::factory()
// ->hasCar()
// ->count(3)
// ->create();
//FuelType::factory(10)->create();


// Model::factory()->count(5)
// ->hasMaker()->count(5)
// ->create();

// User ::factory()
// ->has( Car::factory()->count(5),'favouriteCars')
// ->create();

// Car::factory()
// ->for(User::factory(),'owner')
// ->create();
// FuelType::factory()->count(3)->create();
// state::factory()->count(5)->hasCities()->count(5)->Create();

//dd($carimage);

//  $cars =Car::find(1);
//  dd($cars->primaryImage->image_path);
 CarImage::find(1);
 $cars = Car::where('published_at','<' ,now())
 ->limit(30)
 ->get();
// dd($car->primaryImage());


// $columns = CarFeatures::find(2)->getAttributes();
// $se = array_keys((array) $columns);
// dd($se[0]);


    return view('Home.index',['cars' => $cars]);
    //return view('Home.index');
}
 
}
