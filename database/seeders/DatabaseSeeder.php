<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Schema;
use App\Models\User;
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
            'name_schema' => 'Software Quality Tester',
            'schema_sertifikasi' => 'Okupasi',
            "nomor_schema" => 'SS-31-SQT-00-2022'
        ]);
        Schema::create([
            'name_schema' => 'Web Dinamis',
            'schema_sertifikasi' => 'Okupasi',
            "nomor_schema" => 'SS-32-SQT-00-2022'
        ]);
        User::create([
            'name' => 'andrian',
            'email' => 'andrian@gmail.com',
            'password' => Hash::make('password',),
            'role' => 'asesi',
            'jns_kelamin'=> 'laki-laki',
            'no_telp' => "08782378232",
        ]);
    }
}