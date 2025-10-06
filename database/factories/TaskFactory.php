<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(),
            'desc'=>fake()->paragraph(),
            'user_id'=>User::all()->random()->id,
            'client_id'=>Client::all()->random()->id,
            'deadline'=>fake()->dateTimeBetween('+1 month','+6 month'),
            'status'=>fake()->randomElement(['open','busy'])
        ];
    }
}
