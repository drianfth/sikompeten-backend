<?php

namespace Database\Seeders;

use App\Models\Sesi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sesi::create([
            'paket_skema_id' => 1,
            'asesor1_id'=> 3 ,
            'asesor2_id' => 4,
            'nama_sesi' => 'sesi pertama',
            'jam' => new Carbon(),
        ]);
        Sesi::create([
            'paket_skema_id' => 1,
            'nama_sesi' => 'Sesi Kedua',
            'jam' => new Carbon(),
        ]);
    }
}
