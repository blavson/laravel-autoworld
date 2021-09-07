<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private function selectModel() {
       $cr = CarModel::get()->random(1)->first();
       return $cr;
    }


    private function createModel($model) {
        $car = new Car(['model_id' => $model->id, 'maker_id' => $model->maker_id, 'mileage' =>rand(0, 120) * 1000, 'price' =>rand(1,20) * 1000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed volutpat lacus, ac vestibulum nisl. Vivamus feugiat dui eget libero congue mollis. Etiam feugiat convallis purus sit amet blandit. In hac habitasse platea dictumst. Ut imperdiet, lacus quis congue vulputate, sem odio eleifend est, ut pellentesque neque felis sit amet nisi. Ut sit amet tincidunt turpis. Sed sagittis blandit luctus. Nullam eget nisi convallis lorem ornare aliquam. Curabitur iaculis diam. '
        ]);
        $car->save();
    }

    public function run()    {
        for ($i = 0; $i < 1000; $i++) {
            $m = $this->selectModel();
            $this->createModel($m);
        }
    }
}
