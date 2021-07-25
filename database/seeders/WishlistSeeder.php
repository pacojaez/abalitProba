<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Wishlist::factory(10)->create();
    }
}
