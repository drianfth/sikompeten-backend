<?php

namespace Database\Seeders;

use App\Models\Elemen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 1,
            'name'=> 'Mengidentifikasi metode penjaminan kualitas proses dan produk pengembangan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 1,
            'name'=> 'Menentukan metode penjaminan kualitas proses dan produk pengembangan perangkat lunak  
            ',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 1,
            'name'=> 'Menganalisis acuan-acuan penjaminan kualitas perangka lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 2,
            'name'=> 'Menggali kebutuhan kualitas proses pengembangan perangkat lunak yang ditentukan
            ',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 2,
            'name'=> 'Menyusun metrik kualitas proses pengembangan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 2,
            'name'=> 'Menentukan batasan aktivitas penjaminan proses pengembangan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 2,
            'name'=> 'Menentukan batasan nilai metrik kualitas proses pengembangan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 2,
            'name'=> 'Menentukan keluaran (deliverable) dari review kualitas proses pengembangan perangkat lunak
            ',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 3,
            'name'=> 'Menggali kebutuhan kualitas proses pengembangan perangkat lunak yang ditentukan
            ',
        ]);
       
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 3,
            'name'=> 'Menyusun metrik kualitas proses pengembangan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 3,
            'name'=> 'Menentukan batasan aktivitas penjaminan proses pengembangan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 3,
            'name'=> 'Menentukan batasan nilai metrik kualitas proses pengembangan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 3,
            'name'=> 'Menentukan keluaran (deliverable) dari review kualitas proses pengembangan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 4,
            'name'=> 'Melakukan identifikasi risiko jika proses penjaminan perangkatlunak tidak dilakukan',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 4,
            'name'=> 'Melakukan identifikasi risiko bisnis yang terkait dengan review kualitas proses dan produk perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 4,
            'name'=> 'Merencanakan mitigasi risiko',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 5,
            'name'=> ' Menentukan kebutuhan sumber daya proses pelaksanaan review kualitas proses dan produk pengembangan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 5,
            'name'=> 'Menentukan alat bantu penjaminan perangkat lunak yang akan digunakan',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 6,
            'name'=> 'Menentukan struktur pemanfaatan sumber daya yang sesuai dengan organisasi',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 6,
            'name'=> 'Menentukan pembagian tugas dan tanggung jawab SDM dalam pelaksanaan penjaminan kualitas',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 6,
            'name'=> 'Menyusun prosedur acuan pelaksanaan penjaminan kualitas PL',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 7,
            'name'=> ' Mengumpulkan hasil tahapan pengembangan',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 7,
            'name'=> 'Menghitung nilai metriks berdasarkan data-data tersedia',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 8,
            'name'=> 'Melaksanakan pengujian perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 8,
            'name'=> 'Melaksanakan review kode sumber',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 9,
            'name'=> 'Melaksanakan pengujian perangkat lunak otomatis',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 9,
            'name'=> 'Melaksanakan review kode sumber otomatis',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 10,
            'name'=> 'Menentukan aspek keamanan perangkat lunak yang akan diuji',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 10,
            'name'=> 'Melaksanakan pengujian keamanan',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 10,
            'name'=> 'Menilai kebijakan mengenai keamanan yang digunakan',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 11,
            'name'=> 'Membuat rekomendasi penjaminan perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 1,
            'unit_kompetensi_id' => 11,
            'name'=> 'Mentrasfer pengalaman penjaminan kualitas perangkat lunak',
        ]);
        Elemen::create([
            "schema_id" => 2,
            'unit_kompetensi_id' => 1,
            'name'=> 'Mengidentifikasi Workstation',
        ]);
        Elemen::create([
            "schema_id" => 2,
            'unit_kompetensi_id' => 2,
            'name'=> 'Mengumpulkan informasi internetworking',
        ]);
        Elemen::create([
            "schema_id" => 2,
            'unit_kompetensi_id' => 3,
            'name'=> 'Menginstal protokol TCP/IP',
        ]);
    }
}
