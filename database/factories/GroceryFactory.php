<?php

namespace Database\Factories;

use App\Models\grocery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroceryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = grocery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item-id' => $this->faker->randomDigit,
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            'qty' => $this->faker->numberBetween($min = 1, $max = 5),
            'receipt-id' => $this->faker->randomDigit
        ];
    }
}
