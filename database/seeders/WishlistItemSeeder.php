<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WishlistItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\WishlistItem::factory(40)->create();
    }
}
