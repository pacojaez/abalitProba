<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'total' => $this->faker->numberBetween( 20, 100 ),
            'pick_up_day' => $this->faker->dateTimeBetween('now', '+3 months'),
            'pick_up_time' => $this->faker->time(),
            'adress' => $this->faker->address(),
            'payment_type' => $this->faker->randomElement(['VISA', 'PAYPAL', 'MASTERCARD', 'BANK']),
        ];
    }
}
