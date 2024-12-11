<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Data dummy untuk pengguna
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // Pastikan password dienkripsi
                'email_verified_at' => now(),
            ],
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password'), // Pastikan password dienkripsi
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password'), // Pastikan password dienkripsi
                'email_verified_at' => now(),
            ],
        ];

        // Masukkan data ke database
        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
