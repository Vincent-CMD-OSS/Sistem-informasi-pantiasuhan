<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nama' => 'Admin 1',
            'email' => 'jeremimangatur21s08@gmail.com',
            'password' => Hash::make('password123'), // Gunakan Hash!
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
    }
}