<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show($id) {
        $car = Car::findorFail($id);
//        dd($car);
        return View('car.show', ['car' => $car]);

    }
}
