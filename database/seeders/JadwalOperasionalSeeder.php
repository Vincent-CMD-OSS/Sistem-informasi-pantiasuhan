<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JadwalOperasional;

class JadwalOperasionalSeeder extends Seeder

{
    public function run()
    {
        $hariList = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

        foreach ($hariList as $hari) {
            JadwalOperasional::updateOrCreate(
                ['hari' => $hari],
                [
                    'jam_buka' => '08:00',
                    'jam_tutup' => '17:00',
                    'status' => 'buka'
                ]
            );
        }
    }
}
