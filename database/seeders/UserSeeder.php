<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'first_name'        => 'Lukáš', 
            'last_name'         => 'Lukča', 
            'email'             => 'lukca.lukas@gmail.com', 
            'email_verified_at' => now(),
            'password'          => Hash::make('password'), 
            'remember_token'    => Str::random(10),
            'created_at'        => now(),
            'street'            => fake()->streetName(),
            'street_number'     => fake()->buildingNumber(),
            'city'              => fake()->city(),
            'postcode'          => fake()->randomNumber(5),
            'position_id'       => 1, //fake()->numberBetween(1, 3),
            'is_admin'          => 1, 
        ]);
        User::factory()->count(20)->create();
    }
}
