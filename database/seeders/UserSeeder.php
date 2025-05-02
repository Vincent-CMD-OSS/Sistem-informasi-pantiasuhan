<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $email = 'jeremimangatur21s08@gmail.com';

        // Cek apakah email sudah ada, kalau belum baru insert
        if (!User::where('email', $email)->exists()) {
            User::create([
                'nama' => 'Admin 1', // ← ganti 'name' jadi 'nama'
                'email' => $email,
                'password' => Hash::make('password123'),
            ]);            
                // Bisa tambah user lain juga:
            // User::create([
            //     'name' => 'User Biasa',
            //     'email' => 'user@example.com',
            //     'password' => Hash::make('userpass'),
            // ]);

            // User::create([
            //     'name' => 'Pemain',
            //     'email' => 'user@example.com',
            //     'password' => Hash::make('userpass'),
            // ]);
            // Bisa tambah user lain juga:
            // User::create([
            //     'name' => 'User Biasa',
            //     'email' => 'user@example.com',
            //     'password' => Hash::make('userpass'),
            // ]);

            // User::create([
            //     'name' => 'Pemain',
            //     'email' => 'user@example.com',
            //     'password' => Hash::make('userpass'),
            // ]);
        }
    }
}
