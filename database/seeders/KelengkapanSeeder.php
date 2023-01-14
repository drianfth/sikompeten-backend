<?php

namespace Database\Seeders;

use App\Models\Kelengkapan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelengkapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kelengkapan::create([
            "schema_id" => 1,
            "name"=> "Copy transkrip nilai yang menyatakan telah lulus salah satu mata kuliah Rekayasa Perangkat Lunak, Workshop Produksi Perangkat Lunak, Manajemen Perangkat Lunak",
        ]);
        Kelengkapan::create([
            'schema_id'=> 1,
            "name"=> "Salinan Sertifikat/ Surat Keterangan PKL/Magang bidang Software Testing",
            
        ]);
        Kelengkapan::create([
            'schema_id'=> 1,
            "name"=> "Pas foto berwarna 3x4 (4 lembar) background merah",
            
        ]);
        Kelengkapan::create([
            'schema_id'=> 1,
            "name"=> "Fotocopy KTP",
            
        ]);
    }
}
