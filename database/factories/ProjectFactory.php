<?php

namespace Database\Factories;

use App\Enums\ProjectStatus;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::pluck('id'); //return a collection
        $clients = Client::pluck('id');
        return [
            'user_id' => $users->random(),
            'client_id' => $clients->random(),
            'title' => fake()->title(),
            'desc' => fake()->sentence(),
            'deadline' => fake()->dateTime(),
            'status' => fake()->randomElement(ProjectStatus::cases()),
        ];
    }
}
