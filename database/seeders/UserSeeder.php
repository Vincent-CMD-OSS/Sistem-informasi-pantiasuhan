<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'nama' => 'Admin 1',
                'email' => 'jeremimangatur21s08@gmail.com',
                'password' => 'password123',
            ],
            [
                'nama' => 'User Biasa',
                'email' => 'user1@example.com',
                'password' => 'userpass1',
            ],
            [
                'nama' => 'Pemain 1',
                'email' => 'player1@example.com',
                'password' => 'playerpass1',
            ],
            [
                'nama' => 'Pemain 2',
                'email' => 'player2@example.com',
                'password' => 'playerpass2',
            ],
            [
                'nama' => 'Hepaestus',
                'email' => 'maro@gmail.com',
                'password' => 'marojahan',
            ],
        ];

        foreach ($users as $data) {
            if (!User::where('email', $data['email'])->exists()) {
                User::create([
                    'nama' => $data['nama'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);
            }
        }
    }
}
