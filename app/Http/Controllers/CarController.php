<?php

namespace App\Http\Controllers;

use App\Models\CarImage;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ("car.index");
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
        ->orderBy('published_at','desc');

        $carCount = $query->count();
        $cars = $query->limit(30)->get(); 

        return view ("car.search",['cars'=>$cars , 'carCount'=>$carCount]);

    }
}
