<?php

namespace Database\Seeders;

use App\Models\Komponen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Komponen::create([
            'name' => 'Saya mendapatkan penjelasan yang cukup memadai mengenai proses asesmen/uji kompetensi ',
        ]);
        Komponen::create([
            'name' => 'Saya diberikan kesempatan untuk mempelajari standar kompetensi yang akan diujikan dan menilai diri sendiri terhadap pencapaiannya',
        ]);
        Komponen::create([
            'name' => 'Asesor memberikan kesempatan untuk mendiskusikan/menegosiasikan metoda, instrumen dan sumber asesmen serta jadwal asesmen ',
        ]);
        Komponen::create([
            'name' => 'Asesor berusaha menggali seluruh bukti pendukung yang sesuai dengan latar belakang pelatihan dan pengalaman yang saya miliki',
        ]);
        Komponen::create([
            'name' => 'Saya sepenuhnya diberikan kesempatan untuk mendemonstrasikan kompetensi yang saya miliki selama asesmen',
        ]);
        Komponen::create([
            'name' => 'Saya mendapatkan penjelasan yang memadai mengenai keputusan asesmen',
        ]);
        Komponen::create([
            'name' => 'Asesor memberikan umpan balik yang mendukung setelah asesmen serta tindak lanjutnya',
        ]);
        Komponen::create([
            'name' => 'Asesor bersama saya mempelajari semua dokumen asesmen serta menandatanganinya ',
        ]);
        Komponen::create([
            'name' => 'Saya mendapatkan jaminan kerahasiaan hasil asesmen serta penjelasan penanganan dokumen asesmen',
        ]);
        Komponen::create([
            'name' => 'Asesor menggunakan keterampilan komunikasi yang efektif selama asesmen',
        ]);
    }
}
