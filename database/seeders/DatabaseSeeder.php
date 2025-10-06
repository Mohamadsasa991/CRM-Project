<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        RoleSeeder::class,
        PermissionSeeder::class,
    ]);
        User::factory()->create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>'secret'
        ])->syncRoles(['admin']);

        User::factory(10)->create();
        Client::factory(20)->create();
        Project::factory(20)->create();
        Task::factory(20)->create();
    }
}
