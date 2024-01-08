<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'role' => 'Owner',
            'type' => 'user',
            'status' => 'active',
        ]);
        
        DB::table('roles')->insert([
            'role' => 'Architect',
            'type' => 'user',
            'status' => 'active',
        ]);
        DB::table('roles')->insert([
            'role' => 'Plumber',
            'type' => 'user',
            'status' => 'active',
        ]);
        DB::table('roles')->insert([
            'role' => 'Carpenter',
            'type' => 'user',
            'status' => 'active',
        ]);
        DB::table('roles')->insert([
            'role' => 'Electrician',
            'type' => 'user',
            'status' => 'active',
        ]);
        DB::table('roles')->insert([
            'role' => 'Builder',
            'type' => 'company',
            'status' => 'active',
        ]);
        // ,,
        DB::table('roles')->insert([
            'role' => 'Supplier',
            'type' => 'company',
            'status' => 'active',
        ]);
        DB::table('roles')->insert([
            'role' => 'Dealer',
            'type' => 'company',
            'status' => 'active',
        ]);
        DB::table('roles')->insert([
            'role' => 'Subcontractor',
            'type' => 'company',
            'status' => 'active',
        ]);
        
    }
}
