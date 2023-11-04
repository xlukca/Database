<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoginRetention>
 */
class LoginRetentionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'    => User::inRandomOrder()->first()->id,
            'login_ip'   => fake()->ipv4(),
            'login_time' => fake()->dateTimeBetween(),
            'user_agent' => fake()->userAgent(),
        ];
    }
}
