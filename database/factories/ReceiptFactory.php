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
            'datetime' => $this->faker->safeColorName,
            'payment-method' => $this->faker->creditCardType,
            'discount-usd' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
            'store-id' => $this->faker->randomDigit
        ];
    }
}
