<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'andrian',
            'email' => 'andrian@gmail.com',
            'password' => Hash::make('password',),
            'role' => 'asesi',
            'jns_kelamin'=> 'laki_laki',
            'no_telp' => "08782378232",
        ]);
        User::create([
            'name' => 'Hana',
            'email' => 'hana@gmail.com',
            'password' => Hash::make('password',),
            'role' => 'asesi',
            'jns_kelamin'=> 'laki_laki',
            'no_telp' => "08782378232",
        ]);
        User::create([
            'name' => 'Rengga Asmara',
            'email' => 'rengga@gmail.com',
            'password' => Hash::make('password',),
            'role' => 'asesor',
            'jns_kelamin'=> 'laki_laki',
            'no_telp' => "08782378232",
        ]);
        User::create([
            'name' => 'Fadilah Fakhrul',
            'email' => 'fadilah@gmail.com',
            'password' => Hash::make('password',),
            'role' => 'asesor',
            'jns_kelamin'=> 'laki_laki',
            'no_telp' => "08782378232",
        ]);
        User::create([
            'name' => 'adminLSP',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password',),
            'role' => 'admin',
            'jns_kelamin'=> 'laki_laki',
            'no_telp' => "08782378232",
        ]);
    }
}
