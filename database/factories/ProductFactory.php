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
            'name' => $this->faker->company(),
            'category_id' => $this->faker->numberBetween(1,8),
            'franchise' => $this->faker->city('es_ES'),
            'image' => $this->faker->image('public/storage/images',640,480, 'technics', false, true, null, false),
            'size' => $this->faker->randomElement(['XXL', 'XL', 'L', 'M', 'S']),
            'user_id' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(10,30),
            'weight' => $this->faker->numberBetween(0.50 , 2.00)
            ];
    }
}
