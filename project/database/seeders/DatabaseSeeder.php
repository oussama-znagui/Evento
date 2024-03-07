<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Role::create([
            'name' => 'Customer',
            'Guard_name' => 'web'
        ]);

        \App\Models\Role::create([
            'name' => 'Organizer',
            'Guard_name' => 'web'
        ]);
        \App\Models\Role::create([
            'name' => 'Admin',
            'Guard_name' => 'web'
        ]);
 
        Category::factory()->count(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
