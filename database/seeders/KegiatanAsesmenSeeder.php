<?php

namespace Database\Seeders;

use App\Models\KegiatanAsesmen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanAsesmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        KegiatanAsesmen::create([
            'name' => 'Instruksi perangkat asesmen dan kondisi asesmen diidentifikasi dengan jelas ',
        ]);
        KegiatanAsesmen::create([
            'name' => 'Informasi tertulis dituliskan secara tepat',
        ]);
        KegiatanAsesmen::create([
            'name' => 'Kegiatan asesmen membahas persyaratan bukti untuk kompetensi atau kompetensi yang diases',
        ]);
        KegiatanAsesmen::create([
            'name' => 'Tingkat kesulitan bahasa, literasi, dan berhitung sesuai dengan tingkat unit kompetensi yang dinilai.',
        ]);
        KegiatanAsesmen::create([
            'name' => 'Tingkat kesulitan kegiatan sesuai dengan kompetensi atau kompetensi yang diases.',
        ]);
        KegiatanAsesmen::create([
            'name' => 'Contoh, benchmark dan / atau ceklis asesmen tersedia untuk digunakan dalam pengambilan keputusan asesmen.',
        ]);
        KegiatanAsesmen::create([
            'name' => 'Diperlukan modifikasi (seperti yang diidentifikasi dalam Komentar)',
        ]);
        KegiatanAsesmen::create([
            'name' => 'Tugas asesmen siap digunakan:',
        ]);
    }
}
