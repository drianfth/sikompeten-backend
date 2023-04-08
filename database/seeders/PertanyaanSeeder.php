<?php

namespace Database\Seeders;

use App\Models\Pertanyaania07;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pertanyaania07::create([
            'unit_kompetensi_id' => 7,
            'schema_id' => 1,
            'name' => 'Apa tindakan yang anda lakukan jika ditemukan tahapan yang tidak sesuai dengan tahapan pengembangan perangkat lunak yang disepakati dan digunakan dalam tim development?',
        ]);
        Pertanyaania07::create([
            'unit_kompetensi_id' => 8,
            'schema_id' => 1,
            'name' => 'Apa tindakan yang anda lakukan jika saat menyusun prosedur uji coba ternyata ada requirement pengujian yang tidak sesuai dengan requirement awal pembuatan software?',
        ]);
        Pertanyaania07::create([
            'unit_kompetensi_id' => 8,
            'schema_id' => 1,
            'name' => 'Pengujian standar yang dilakukan oleh perusahaan anda adalah UAT (User Acceptance Test). Suatu saat ada client yang meminta untuk melakukan pengujian performa dengan beberapa metode yang mereka tentukan. Apa yang anda lakukan?',
        ]);
        Pertanyaania07::create([
            'unit_kompetensi_id' => 9,
            'schema_id' => 1,
            'name' => 'Apa tindakan yang anda lakukan jika setelah beberapa kali iterasi menjalankan pengujian otomatis ternyata software yang diuji menolak bot atau sistem otomatis dan memblokir pengujian anda?',
        ]);
        Pertanyaania07::create([
            'unit_kompetensi_id' => 10,
            'schema_id' => 1,
            'name' => 'Bagaimana anda memilih aspek keamanan perangkat lunak yang akan diuji?',
        ]);
        Pertanyaania07::create([
            'unit_kompetensi_id' => 11,
            'schema_id' => 1,
            'name' => 'Bagaimana cara membuat rekomendasi penjaminan yang bersifat preventif untuk peningkatan kualitas perangkat lunak yang diuji?',
        ]);
        Pertanyaania07::create([
            'unit_kompetensi_id' => 11,
            'schema_id' => 1,
            'name' => 'Bagaimana cara membuat rekomendasi penjaminan yang bersifat preventif untuk peningkatan kualitas perangkat lunak yang diuji?',
        ]);
    }
}
