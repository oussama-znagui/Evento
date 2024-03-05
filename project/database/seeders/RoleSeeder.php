<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $role = Role::create(['name' => 'Customer']);
          $role = Role::create(['name' => 'Orginizer']);
        $role = Role::create(['name' => 'Admin']);
    
    }
}
