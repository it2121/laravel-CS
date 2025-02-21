<?php

namespace App\Http\Controllers;

use App\Models\CarImage;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       
        $images = CarImage::get();

        $cars = User::find(7)

        ->cars()
        ->with(relations: ['primaryImage','maker','model'])

        ->orderBy('created_at','desc')
        ->paginate(15);



        return view ("car.index",['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("car.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        CarImage::get();
        $carr =$car;

        return view ("car.show",['car' => $carr]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view ("car.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
    public function search()
    {
$images = CarImage::get();
        $query = Car::where('published_at','<' ,now())
        ->with(relations: ['primaryImage','city','carType','fuelType','maker','model'])

        ->orderBy('published_at','desc');

        //how to join sh*t together
            $query ->join('cities','cities.id','=','cars.city_id')
            // ->where ('cities.state_id','=',1)
            ;
       
       
        //     $carCount = $query->count();
        // $cars = $query->limit(30)->get(); 

        $cars =$query->paginate(15);

        return view ("car.search",['cars'=>$cars ]);

    }
    public function watchlist()
    {
$images = CarImage::get();
        $cars = User::find(7)
        ->favouriteCars()
        ->with(relations: ['primaryImage','city','carType','fuelType','maker','model'])
        ->paginate(15);
     

        return view ("car.watchlist",['cars'=>$cars ]);

    }
}
