<?php

namespace Database\Factories;

use App\Models\ProductPrice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductPrice>
 */
class ProductPriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ProductPrice::class;
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1,60),
            'price' => $this->faker->numberBetween(100,1000),
            'discount' => $this->faker->numberBetween(10,100),
        ];
    }
}
