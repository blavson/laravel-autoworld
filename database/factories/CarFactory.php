<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\CarMaker;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'maker_id' => CarMaker::factory(),
            'model_Id' => CarModel::factory(),
            'description' => $this->faker->paragraph,
            'mileage' => $this->faker->randomDigit()*11000,
            'price' => $this->faker->randomDigit() * 1500,

        ];
    }
}
