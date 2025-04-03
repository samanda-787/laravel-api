<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'John Smith',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Emily Johnson',
                'email' => 'emily@example.com',
                'password' => Hash::make('password123'),
                
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Michael Brown',
                'email' => 'michael@example.com',
                'password' => Hash::make('password123'),
              
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Add 6 more users with different roles
            [
                'id' => 5,
                'name' => 'Sarah Wilson',
                'email' => 'sarah@example.com',
                'password' => Hash::make('password123'),
               
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'David Lee',
                'email' => 'david@example.com',
                'password' => Hash::make('password123'),
              
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'Jennifer Davis',
                'email' => 'jennifer@example.com',
                'password' => Hash::make('password123'),
                
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'Robert Miller',
                'email' => 'robert@example.com',
                'password' => Hash::make('password123'),
             
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'name' => 'Lisa Wilson',
                'email' => 'lisa@example.com',
                'password' => Hash::make('password123'),
                
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'name' => 'Thomas Moore',
                'email' => 'thomas@example.com',
                'password' => Hash::make('password123'),
               
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('users')->insert($users);
    }
}