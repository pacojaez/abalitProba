<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = array('BY THE WEIGHT', 'ITEMS', 'COMBOS', 'OUTFITS',
                            'RECYCLED', 'COLLECTORS', 'WHOLESALE', 'MYSTERYBOX');

        foreach($categorie as $cat){
            $ins = [
                'name' => $cat
            ];
            \App\Models\Category::create($ins);
        }
    }
}
