<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\Schema;
use App\Models\UnitKompetensi;
use Illuminate\Database\Seeder;
use App\Models\KelengkapanApl01;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Schema::create([
            'name' => 'Software Quality Tester',
            'schema_sertifikasi' => 'Okupasi',
            "nomor" => 'SS-31-SQT-00-2022'
        ]);
        Schema::create([
            'name' => 'Instalasi Jaringan Lokal (LAN)',
            'schema_sertifikasi' => 'Okupasi',
            "nomor" => 'SS-32-SQT-00-2022'
        ]);
       
        Jadwal::create([
            'name' => 'Pra-Asesmen',
            'tanggal' => Carbon::create(2023, 3, 12, 0),
            'status' => true,
            'href'=> '/dashboard/apl01'
        ]);
        Jadwal::create([
            'name' => 'Asesmen',
            'href'=> '/apl02',
            'status' => true,
        ]);
        // Jadwal::create([
        //     'name' => 'Pelaksanaan Asesmen',
        // ]);
        
        $this->call([
        UserSeeder::class,
        UnitKompetensiSeeder::class,
        KelengkapanSeeder::class,
        TukSeeder::class,
        PaketSkemaSeeder::class,
        SesiSeeder::class,
        // PaketAsesmenSeeder::class,
        ElemenSeeder::class,
        SubElemenSeeder::class
    ]);
    }
}


