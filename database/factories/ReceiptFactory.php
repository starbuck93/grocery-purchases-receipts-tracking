<?php

namespace Database\Factories;

use App\Models\receipt;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = receipt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'purchase_date' => $this->faker->dateTime(),
            'payment_method' => $this->faker->creditCardType,
            'discount_usd' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            'store_id' => $this->faker->numberBetween($min = 1, $max = 2)
        ];
    }
}
