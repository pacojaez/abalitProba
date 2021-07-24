<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $password = Hash::make('12345678', [
                    'rounds' => 12,
        ]);
        $passwordAbalit = Hash::make('1234', [
            'rounds' => 12,
        ]);

        User::create([
            'name' => 'Paco',
            'email' => 'pacojaez@gmail.com',
            'password' => $password,
            'user_type' => 'Admin',
            'email_verified_at' => now(),
            'phone' => '606563646',
            'adress' => 'C/ Manresa, 61',
            'city' => 'Terrassa',
            'country' => 'Spain',
            'is_admin' => 1,
        ]);

        User::create([
            'name' => 'Abalit',
            'email' => 'apple@abalit.org',
            'password' => $passwordAbalit,
            'user_type' => 'Admin',
            'email_verified_at' => now(),
            'phone' => '656565655',
            'adress' => 'C/ Manresa, 61',
            'city' => 'Terrassa',
            'country' => 'Spain',
            'is_admin' => 1,
        ]);

         \App\Models\User::factory(10)->create();
    }
}
