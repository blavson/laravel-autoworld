<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller {

    public function index(Request $request) {
        $maker_id = $request->input('select_maker');
        $model_id = $request->input('select_model');


//        dd($request);
        $query = DB::table('cars')
            ->join('car_makers', 'cars.maker_id', '=', 'car_makers.id')
            ->join('car_models', 'cars.model_id', '=', 'car_models.id')
            ->select('cars.*', 'car_models.model_name', 'car_makers.maker')
            ->where('cars.maker_id', $maker_id);
         if ($model_id > 0)
            $query->where('cars.model_id', $model_id);
        $cars = $query->get();
//        dd($cars);
        return view('search/index', ['cars' => $cars]);
    }
}
