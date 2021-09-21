<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Models\VehicleModel;
use App\Http\Controllers\HomeController;
use App\Models\Manufacturer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/jsonmodels/{maker_id}', [HomeController::class , 'getCarModels']);
Route::get('/search', [SearchController::class , 'index']);


