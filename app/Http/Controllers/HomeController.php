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
    public function index(Request  $request) {
//        $cars = Car::with('model')->limit(20)->orderBy('created_at', 'desc')->get();
        $cars = DB::table('cars')
            ->join('car_models', 'cars.model_id', '=', 'car_models.id')
            ->join('car_makers', 'cars.maker_id', '=', 'car_makers.id')
            ->select('cars.*', 'car_models.model_name', 'car_makers.maker')->limit(20)
            ->orderBy('created_at', 'desc')->get();
//            ->where('cars.model_id', $model_Id)->where('cars.maker_id', $maker_id)->get();
        $models = CarModel::all();
//        dd($cars);
        $makers = CarMaker::all();
        return view('homepage/index', ['makers' => $makers , 'models' => $models, 'cars' => $cars]);
    }

    public function getCarModels($maker_id)  {
        return json_encode(DB::table('car_models')->where('maker_id', $maker_id)->pluck('model_name', 'id'));
    }
}
