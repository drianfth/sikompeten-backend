<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jadwal;
use App\Models\Schema;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
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
            'name' => 'Web Dinamis',
            'schema_sertifikasi' => 'Okupasi',
            "nomor" => 'SS-32-SQT-00-2022'
        ]);
        User::create([
            'name' => 'andrian',
            'email' => 'andrian@gmail.com',
            'password' => Hash::make('password',),
            'role' => 'asesi',
            'jns_kelamin'=> 'laki-laki',
            'no_telp' => "08782378232",
        ]);
        User::create([
            'name' => 'adminLSP',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password',),
            'role' => 'admin',
            'jns_kelamin'=> 'laki-laki',
            'no_telp' => "08782378232",
        ]);
        Jadwal::create([
            'name' => 'Pilih Skema & Pengisian Form APL-01',
            'tanggal' => Carbon::create(2023, 3, 12, 0),
            'status' => true
        ]);
        Jadwal::create([
            'name' => 'Pengisian Form APL-02',
        ]);
        Jadwal::create([
            'name' => 'Pelaksanaan Asesmen',
        ]);
    }
}
