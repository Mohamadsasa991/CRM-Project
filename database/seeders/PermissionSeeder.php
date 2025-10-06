<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'manage_users']);
        Permission::create(['name' => 'delete_clients']);
        Permission::create(['name' => 'delete_projects']);
        Permission::create(['name' => 'delete_tasks']);


        $role = Role::findByName('admin');
        $role->givePermissionTo([
            'manage_users',
            'delete_clients',
            'delete_projects',
            'delete_tasks'
        ]);
    }
}
