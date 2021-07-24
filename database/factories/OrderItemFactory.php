<?php

namespace Database\Factories;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween(1,10),
            'product_id' => $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(1,10),
            'quantity' => $this->faker->numberBetween( 1, 8),
            'subtotal' => $this->faker->numberBetween(25, 100),
            ];
    }
}
