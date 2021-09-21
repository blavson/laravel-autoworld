<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller {

    public function index(Request $request) {

        $maker_id = $request->input('select_maker');
        $model_id = $request->input('select_model');
        $page_id = $request->input('page_id');
        if (empty($page_id))
            $page_id = 0;
        $query = DB::table('cars')
            ->join('car_makers', 'cars.maker_id', '=', 'car_makers.id')
            ->join('car_models', 'cars.model_id', '=', 'car_models.id')
            ->select('cars.*', 'car_models.model_name', 'car_makers.slug' ,'car_makers.maker')
            ->where('cars.maker_id', $maker_id)->limit(10)->offset(($page_id -1) * 10);
         if ($model_id > 0)
            $query->where('cars.model_id', $model_id);
        $cars = $query->get();
//        dd($cars);
        return view('search/index', ['cars' => $cars, 'model_id'=> $model_id]);
    }

}
