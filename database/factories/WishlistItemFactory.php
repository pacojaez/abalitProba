<?php

namespace Database\Factories;

use App\Models\WishlistItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class WishlistItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WishlistItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'wishlist_id' => $this->faker->numberBetween(1,10),
            'product_id' => $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(2,10),
        ];
    }
}
