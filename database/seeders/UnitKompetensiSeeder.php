<?php

namespace Database\Seeders;

use App\Models\UnitKompetensi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitKompetensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.001.1",
            "judul_unit"=> "Menentukan Metode/Framework",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.002.1",
            "judul_unit"=> "Menentukan Lingkup Quality Assurance untuk Perangkat Lunak",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.003.1",
            "judul_unit"=> "Menentukan Lingkup Quality Assurance untuk Proses Pengembangan Perangkat Lunak",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.004.1",
            "judul_unit"=> "Mengelola Risiko Penjaminan Kualitas",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.005.1",
            "judul_unit"=> "Mendefiniskan Sumber Daya yang Dibutuhkan",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.006.1",
            "judul_unit"=> "Mengintegrasikan Penjaminan Kualitas ke Dalam Organisasi Pengembang",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.007.1",
            "judul_unit"=> "Memverifikasi Pelaksanaan Tahapan Pengembangan Perangkat Lunak",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.008.1",
            "judul_unit"=> "Melakukan Pengujian Kualitas Perangkat Lunak Secara Manual",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.009.1",
            "judul_unit"=> "Melakukan Pengujian Kualitas Perangkat Lunak Secara Otomatis",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.010.1",
            "judul_unit"=> "Melakukan Pengujian Keamanan Perangkat Lunak",
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.011.1",
            "judul_unit"=> "Menyusun Rekomendasi Penjaminan Kualitas Perangkat Lunak bagi Stakeholder",
            "jenis_standar"=> "SKKNI"
        ]);
    }
}
