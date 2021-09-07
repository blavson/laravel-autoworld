<?php

namespace Database\Seeders;

use App\Models\CarMaker;
use App\Models\CarModel;
use App\Models\Car;
use Illuminate\Database\Seeder;
use Database\Seeders\CarMakerSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    private $jsonFile;
    private $parsedJson;

    private function init() {
        $this->jsonFile = File::get(storage_path('carmodels.json'));
        $this->parsedJson = json_decode($this->jsonFile, true);
    }

    private function refactorParsedArray() {
        $allcars = $this->parsedJson;
        foreach($allcars as $key=> $car) {
            $db_maker = DB::table('car_makers')->where('maker', $car['brand'])->first();
            if (empty($db_maker)) {
                $db_maker =  CarMaker::create(['maker'=> $car['brand'], 'country' => null]);
            }
                foreach ($car['models'] as $model)
                    DB::table('car_models')->insert(['model_name' => $model, 'maker_id' => $db_maker->id, 'slug' => str_slug($model, '-')]);
        }

//        echo "brand " . $element['brand'] . "  , models " . var_dump($element['models']);
    }


    public function run()
    {
//        Car::truncate();
//        CarModel::truncate();
//        CarMaker::truncate();


        // \App\Models\User::factory(10)->create();
//        \App\Models\CarMaker::factory()->create();


        $cm = new CarMakerSeeder();
        $cm->run();
        $this->init();
        $this->refactorParsedArray();


        $car = new CarSeeder();
        $car->run();

    }

}
