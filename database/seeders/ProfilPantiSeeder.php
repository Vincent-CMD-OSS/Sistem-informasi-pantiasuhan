<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilPanti;

class ProfilPantiSeeder extends Seeder
{
    public function run(): void
    {
        ProfilPanti::updateOrCreate(['id' => 1], [
            'nama' => 'Panti Asuhan Rumah Harapan',
            'tentang' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et 
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros 
            bibendum tellus, nec vulputate sem neque sed sapien. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, 
            ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. 
            Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.',
            'visi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore 
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'misi' => 'Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est 
            eros bibendum tellus, nec vulputate sem neque sed sapien. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, 
            ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin 
            porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.',
            'alamat' => 'Jl. Harapan No. 123, Porsea, Kec. Porsea, Kab. Porsea, Prov. Porsea 12345',
            'nomor_telepon' => '081234567890',
            'email' => 'info@rumahharapan.com',
        ]);
    }
}
