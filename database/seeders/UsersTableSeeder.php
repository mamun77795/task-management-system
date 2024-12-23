<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password123'), 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);


        DB::table('tasks')->insert([
            [
                'title' => 'Demo Task',
                'description' => 'This is Demo Task Description',
                'status' => 'pending',
                'due_date' => '2025-01-01', 
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Demo Task',
                'description' => 'This is Second Demo Task Description',
                'status' => 'in_progress',
                'due_date' => '2025-01-01', 
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Demo Task',
                'description' => 'This is Third Demo Task Description',
                'status' => 'completed',
                'due_date' => '2025-01-01', 
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
