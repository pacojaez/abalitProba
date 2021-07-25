<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ UserSeeder::class, ProductSeeder::class, OrderSeeder::class, CategorySeeder::class, OrderItemSeeder::class, WishlistSeeder::class, WishlistItemSeeder::class ]);
    }
}
