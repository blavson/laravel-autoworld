<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarMaker;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index() {
        $cars = Car::with('model')->limit(20)->get();
        $models = CarModel::all();
//        dd($cars);
        $makers = CarMaker::all();
        return view('homepage/index', ['makers' => $makers , 'models' => $models, 'cars' => $cars]);
    }

    public function getCarModels($maker_id)  {
        return json_encode(DB::table('car_models')->where('maker_id', $maker_id)->pluck('model_name', 'id'));
    }
}
