<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Michael Johnson',
            'email' => 'michael.johnson@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Emily Davis',
            'email' => 'emily.davis@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'David Williams',
            'email' => 'david.williams@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Sophie Brown',
            'email' => 'sophie.brown@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Daniel Lee',
            'email' => 'daniel.lee@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Olivia Martinez',
            'email' => 'olivia.martinez@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'William Garcia',
            'email' => 'william.garcia@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Isabella Wilson',
            'email' => 'isabella.wilson@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
