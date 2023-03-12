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
            'pertanyaan' => 'Dapatkah Saya Menentukan Metode/Framework?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.002.1",
            "judul_unit"=> "Menentukan Lingkup Quality Assurance untuk Perangkat Lunak",
            'pertanyaan' => 'Dapatkah Saya Menentukan Lingkup Quality Assurance untuk Perangkat Lunak?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.003.1",
            "judul_unit"=> "Menentukan Lingkup Quality Assurance untuk Proses Pengembangan Perangkat Lunak",
            'pertanyaan' => 'Dapatkah Saya Menentukan Lingkup Quality Assurance untuk Proses Pengembangan Perangkat Lunak?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.004.1",
            "judul_unit"=> "Mengelola Risiko Penjaminan Kualitas",
            'pertanyaan' => 'Dapatkah Saya Mengelola Risiko Penjaminan Kualitas?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.005.1",
            "judul_unit"=> "Mendefiniskan Sumber Daya yang Dibutuhkan",
            'pertanyaan' => 'Dapatkah Saya Mendefiniskan Sumber Daya yang Dibutuhkan?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.006.1",
            "judul_unit"=> "Mengintegrasikan Penjaminan Kualitas ke Dalam Organisasi Pengembang",
            'pertanyaan' => 'Dapatkah Saya Mengintegrasikan Penjaminan Kualitas ke Dalam Organisasi Pengembang?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.007.1",
            "judul_unit"=> "Memverifikasi Pelaksanaan Tahapan Pengembangan Perangkat Lunak",
            'pertanyaan' => 'Dapatkah Saya Memverifikasi Pelaksanaan Tahapan Pengembangan Perangkat Lunak?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.008.1",
            "judul_unit"=> "Melakukan Pengujian Kualitas Perangkat Lunak Secara Manual",
            'pertanyaan' => 'Dapatkah Saya Melakukan Pengujian Kualitas Perangkat Lunak Secara Manual?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.009.1",
            "judul_unit"=> "Melakukan Pengujian Kualitas Perangkat Lunak Secara Otomatis",
            'pertanyaan' => 'Dapatkah Saya Melakukan Pengujian Kualitas Perangkat Lunak Secara Otomatis?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.010.1",
            "judul_unit"=> "Melakukan Pengujian Keamanan Perangkat Lunak",
            'pertanyaan' => 'Dapatkah Saya Melakukan Pengujian Keamanan Perangkat Lunak?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 1,
            "kode_unit"=> "J.62SQA00.011.1",
            "judul_unit"=> "Menyusun Rekomendasi Penjaminan Kualitas Perangkat Lunak bagi Stakeholder",
            'pertanyaan' => 'Dapatkah Saya Menyusun Rekomendasi Penjaminan Kualitas Perangkat Lunak bagi Stakeholder?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 2,
            "kode_unit"=> "TIK.JK02.001.01",
            "judul_unit"=> "Membuat desain jaringan lokal (LAN)",
            'pertanyaan' => 'Dapatkah Saya Menyusun Rekomendasi Penjaminan Kualitas Perangkat Lunak bagi Stakeholder?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 2,
            "kode_unit"=> "TIK.JK02.005.01",
            "judul_unit"=> "Memasang kabel UTP dan BNC pada jaringan",
            'pertanyaan' => 'Dapatkah Saya Menyusun Rekomendasi Penjaminan Kualitas Perangkat Lunak bagi Stakeholder?',
            "jenis_standar"=> "SKKNI"
        ]);
        UnitKompetensi::create([
            "schema_id" => 2,
            "kode_unit"=> "TIK.JK02.007.01",
            "judul_unit"=> "Memasang jaringan nirkabel",
            'pertanyaan' => 'Dapatkah Saya Menyusun Rekomendasi Penjaminan Kualitas Perangkat Lunak bagi Stakeholder?',
            "jenis_standar"=> "SKKNI"
        ]);
    }
}
