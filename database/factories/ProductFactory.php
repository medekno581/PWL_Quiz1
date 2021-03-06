<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'harga' => $this->faker->numberBetween(0, 10000000),
            'stock' => $this->faker->randomDigit,
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl(640, 480),
            // 'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'supplier_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
