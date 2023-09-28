<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed data
        User::create([
            'username' => 'admin',
            'fullname' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'phone' => '+628123456789',
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'username' => 'user' . $i,
                'fullname' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => bcrypt('password'),
                'phone' => '+62812345678' . $i,
            ]);
        }
    }
}
