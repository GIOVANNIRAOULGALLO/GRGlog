<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function searchCar(){
        $cars=Car::all();
        return view('cars.search',compact('cars'));
    }
    public function createCar(){
        $brands=Brand::all();
        return view('cars.create',compact('brands'));
    }
    public function storeCar(Request $req){
        // dd($req->all());
        $car=Car::create([
            'model'=>$req->model,
            'img'=>$req->file('img')->store('public/img')
        ]);
        $car->brands()->attach($req->brand);
        return redirect(route('homepage'));
    }
   
}
