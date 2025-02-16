<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DogsController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowCar;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\SumController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home'); 
Route::get('/signup' , [SignupController ::class,'create'])->name('signup');
Route::get('/login' , [LogInController ::class,'create'])->name('login');

Route::get('/car/search' , [CarController ::class,'search'])->name('car.search');

Route::resource('car', CarController::class);


// Route::get('/test/{color}/{colorr}/{text}/{message}' , [HomeController::class,'index'])->name('testing');

// Route::get('/hello/{name}/{surname}' , [HelloController::class,'welcome'])
// ->whereAlpha(['name','surname'])
// ->name('welcome');










// Route::view('/about', "about"
// )->name ('about');



// Route::get('/brother', function () {

// return view('brother');


// });

// Route::get('/product/{ID}', function (string $ID) {


// return "works  = $ID";

// })->whereNumber("ID");


// Route::get('/user/{username}', function (string $username) {


//     return "works  = $username";
    
//     })->whereAlphaNumeric("username")
//     ->where("username",'[a-z,0-9]+')
//     ;
    

// Route::get("{Lang}/product/{ID}",
//  function (
//     string $Lang , string $ID 
// ) {

//     return "$ID - $Lang  ";


// }) ->where(['Lang' => '[a-z]{2}','ID' => '\d{4,}']) 
// ->name ('product.view');

// // Route::get("/product/{cat?}",
// // function (string $cat = "kys")

// // {    return $cat;
// // });


// Route::get('/search/{search}',function (string $search){

// return $search;

// }  )->where('search' ,'.+') ;



// Route::prefix('admin')->group(function (){



//     Route ::get('/user/profile',function (){

// return '/admin/users';
//     })->name('profile');
//     Route::get('/current-user',function (){
    
//         //return redirect()->route('profile');
//         return to_route('profile');
//     })->name('');
    
  

// });

// Route::name('admin.')->group(function (){

// Route::get('/users',function (){
// return '/users';

// })->name('users');


        
// });

// Route::fallback(function (){
//     return view('welcome');
// }
// );

// Route::get('/GetSum/{F}/{S}',function(int $F, int $S){

// return $F+$S;

// })->whereNumber('F',)->whereNumber('S');

//Route::get('/car',[CarController::class,'index']);

// Route::controller(CarController::class)->group(function (){


// Route::get('/car','index');
// Route::get('/mycar','mycar');
// Route::get('/gta','gta');

// Route::fallback(function (){
    
//     return 'this is the fall back of the car controller thing';
// });





// });
//Route::get('car',CarController::class);




// Route::apiResource('/product',ProductController::class)
// ;

// Route::apiResources(
//     ['Product'=> ProductController::class , 
// 'Dogs'=> DogsController::class]);


// Route::get('/sum/{F}/{S}',[SumController::class,'add'])->whereNumber(['F','S']);
// Route::get('/sub/{F}/{S}',SubController::class)->whereNumber(['F','S']);



