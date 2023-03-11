<?php

namespace Database\Seeders;

use App\Models\Tuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tuk::create([
            'nama_tuk' => 'Lab Gis',
            'pic_tuk' => 'Bu Fitrah',
        ]);
        Tuk::create([
            'nama_tuk' => 'Lab Sistem Informasi',
            'pic_tuk' => 'Bapak Yanuar',
        ]);
        Tuk::create([
            'nama_tuk' => 'Lab Jaringan',
            'pic_tuk' => 'Bapak Iwan',
        ]);
    }
}
