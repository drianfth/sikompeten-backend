<?php

namespace Database\Seeders;

use App\Models\SubElemen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubElemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 1,
            'name' => 'Jenis-jenis metode penjaminan kualitas proses dan produk pengembangan perangkat lunak diidentifikasi sebagai dasar kegiatan assurance.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 1,
            'name' => 'Prasyarat setiap metode penjaminan kualitas proses dan produk pengembangan perangkat lunak diidentifikasi untuk dipergunakan dalam proses selanjutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 1,
            'name' => 'Metode Software Quality Assurance (SQA) yang berlaku di organisasi diidentifikasi sesuai dengan standar yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 2,
            'name' => 'Kesesuaian metode penjaminan dengan metode pengembangan diidentifikasi sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 2,
            'name' => 'Metode-metode penjaminan kualitas proses dan produk pengembangan perangkat lunak ditentukan sebagai dasar proses selanjutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 3,
            'name' => 'Acuan-acuan Software Quality Assurance (SQA) diidentifikasi sesuai konteks dari industri.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 3,
            'name' => 'Acuan penjaminan kualitas ditentukan berdasarkan kesesuaian dengan standar yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 3,
            'name' => 'Acuan yang telah ditentukan didokumentasikan sesuai standar yang berlaku untuk dipergunakan pada proses berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 4,
            'name' => 'Material penjaminan proses pengembangan perangkat lunak yang telah ditentukan diidentifikasi sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 4,
            'name' => 'Kualitas proses pengembangan perangkat lunak diidentifikasi sebagai dasar kegiatan berikutnya.Semua pihak yang berkepentingan terhadap proses dan hasil assurance diidentifikasi sebagai dasar kegiatan berikutnya.
            '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 5,
            'name' => 'Metrik kualitas proses berdasarkan metode dan acuan yang terpilih diidentifikasi sesuai dengan kebutuhan kualitas dan prioritas yang ada.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 5,
            'name' => '2.2	Metrik kualitas ditentukan berdasar pada kesesuaian dengan kebutuhan kualitas dan prioritas yang ada. Metriks kualitas yang terpilih didokumentasikan untuk menjadi acuan dalam pelaksanaan kegiatan pengembangan sistem.
            '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 6,
            'name' => 'Objektif penjaminan kualitas proses pengembangan perangkat lunak ditentukan sesuai kebutuhan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 6,
            'name' => 'Batasan penjaminan berdasarkan metode pengembangan yang terpilih diidentifikasi sebagai dasar kegiatan berikutnya. '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 6,
            'name' => 'Batasan aktivitas dari acuan penjaminan perangkat lunak diidentifikasi sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 6,
            'name' => 'Batasan aktivitas penjaminan perangkat lunak ditentukan sesusai standar yang ditetapkan Dampak pembatasan aktivitas penjaminan perangkat lunak diidentifikasikan sebagai dasar kegiatan berikutnya.
            '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 7,
            'name' => 'Dampak nilai maksimal metrik kualitas diidentifikasikan sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 7,
            'name' => 'Batasan atas dibawah maksimal metrik kualitas ditentukan sesuai standar yang ditetapkan. 
            Batasan nilai metrik yang telah ditentukan didokumentasikan sebagai acuan untk proses penjaminan kualitas.
            '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 8,
            'name' => 'Semua keluaran proses pelaksanaan Quality Assurance (QA) didokumentasikan sesuai standar dokumentasi yang digunakan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 8,
            'name' => 'Tahapan (waktu) dihasilkannya keluaran didokumentasikan sesuai standar dokumentasi yang digunakan. 
            Semua keluaran dan waktu dihasilkannya dikoordinasikan dan dikomunikasikan kepada semua stakeholder.
            '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 9,
            'name' => 'Material penjaminan proses pengembangan perangkat lunak yang telah ditentukan diidentifikasi sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 9,
            'name' => 'Kualitas proses pengembangan perangkat lunak diidentifikasi sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 9,
            'name' => 'Semua pihak yang berkepentingan terhadap proses dan hasil assurance diidentifikasi sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 10,
            'name' => 'Metrik kualitas proses berdasarkan metode dan acuan yang terpilih diidentifikasi sesuai dengan kebutuhan kualitas dan prioritas yang ada.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 10,
            'name' => 'Metrik kualitas ditentukan berdasar pada kesesuaian dengan kebutuhan kualitas dan prioritas yang ada. '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 10,
            'name' => 'Metriks kualitas yang terpilih didokumentasikan untuk menjadi acuan dalam pelaksanaan kegiatan pengembangan sistem.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 11,
            'name' => 'Objektif penjaminan kualitas proses pengembangan perangkat lunak ditentukan sesuai kebutuhan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 11,
            'name' => 'Batasan penjaminan berdasarkan metode pengembangan yang terpilih diidentifikasi sebagai dasar kegiatan berikutnya. '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 11,
            'name' => 'Batasan aktivitas dari acuan penjaminan perangkat lunak diidentifikasi sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 11,
            'name' => 'Batasan aktivitas penjaminan perangkat lunak ditentukan sesusai standar yang ditetapkan'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 11,
            'name' => 'Dampak pembatasan aktivitas penjaminan perangkat lunak diidentifikasikan sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 12,
            'name' => 'Dampak nilai maksimal metrik kualitas diidentifikasikan sebagai dasar kegiatan berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 12,
            'name' => 'Batasan atas dibawah maksimal metrik kualitas ditentukan sesuai standar yang ditetapkan. '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 12,
            'name' => 'Batasan nilai metrik yang telah ditentukan didokumentasikan sebagai acuan untk proses penjaminan kualitas.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 13,
            'name' => 'Semua keluaran proses pelaksanaan Quality Assurance (QA) didokumentasikan sesuai standar dokumentasi yang digunakan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 13,
            'name' => 'Tahapan (waktu) dihasilkannya keluaran didokumentasikan sesuai standar dokumentasi yang digunakan. '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 13,
            'name' => 'Semua keluaran dan waktu dihasilkannya dikoordinasikan dan dikomunikasikan kepada semua stakeholder.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 14,
            'name' => 'Kemungkinan risiko akibat rendahnya kualitas perangkat lunak diidentifikasi guna proses selanjutnya.
            Berdasarkan analisis risiko, kemungkinan perubahan deliverable didokumentasikan sesuai standar dokumentasi yang digunakan.
            
            '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 15,
            'name' => 'Semua faktor risiko dari Quality Assurance (QA) didokumentasikan sesuai standar dokumentasi yang digunakan.
            Berdasarkan analisa risiko, kemungkinan perubahan lingkup, didokumentasikan sesuai standar dokumentasi yang digunakan.
            '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 16,
            'name' => 'Setiap risiko yang telah diidentifikasikan dibuat mitigasinya.
            Risiko dan mitigasi didokumentasikan untuk menjadi salah satu acuan pengembangan sistem.
            '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 17,
            'name' => 'Kualifikasi pelaksana proses penjaminan diidentifikasi berdasarkan objektif, batasan, dan keluaran pelaksanaan penjaminan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 17,
            'name' => 'Waktu pelaksanaan tiap tahapan pekerjaan review ditentukan sesuai dengan metoda Quality Assurance (QA) yang telah ditentukan.
            Kebutuhan sumber daya pelaksanaan review didokumentasikan untuk setiap tahapan pekerjaan.
            '
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 18,
            'name' => 'Alat bantu yang tersedia dianalisis kesesuaiannya dengan metode pengembangan yang telah ditentukan.Alat bantu diidentifikasi sesuai dengan metode dan acuan Quality Assurance (QA) yang telah ditentukan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 18,
            'name' => 'Alat bantu yang tersedia dianalisis kesesuaiannya dengan metode pengembangan yang telah ditentukan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 19,
            'name' => 'Struktur organisasi yang diperlukan untuk melaksanakan proses Quality Assurance(QA) dibandingkan dengan struktur organisasi yang ada untuk dijadikan masukan proses berikutnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 19,
            'name' => 'Struktur organisasi yang mendukung penjaminan kualitas disusun sesuai dengan standard yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 19,
            'name' => 'Rancangan struktur dikordinasikan dengan para stakeholders sesuai dengan standard pengelolaan sumber daya yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 20,
            'name' => 'Pembagian tahapan pelaksanaan penjaminan kualitas oleh SDM organisasi ditentukan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 20,
            'name' => 'Pemanfaatan alat bantu dialokasikan sesuai dengan ketentuan dari SDM organisasi.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 21,
            'name' => 'Prosedur acuan pelaksanaan Standard Operating Procedure (SOP) dikembangkan sesuai dengan format prosedur yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 21,
            'name' => 'Prosedur standard pelaksanaan didokumentasikan sesuai standar dokumentasi yang telah ditetapkan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 21,
            'name' => 'Prosedur standard pelaksanaan disosialisasikan kepada para stakeholdersuntuk menjadi acuan dalam pelaksanaan proses penjaminan kualitas PL.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 22,
            'name' => 'Hasil tahapan diidentifikasi sesuai dengan metodologi pengembangan perangkat lunak yang dipergunakan..'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 22,
            'name' => 'Kualitas hasil tahapan ditentukan berdasarkan standar/acuan yang telah disepakati sebelumnya'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 22,
            'name' => 'Hasil penilaian kualitas dikomunikasikan ke pihak yang terkait.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 23,
            'name' => 'Nilai metriks yang applicable berdasarkan data historis kode sumber hasil tahapan pengembangan dihitung.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 23,
            'name' => 'Nilai proses pengembangan dari dokumentasi pekerjaan pengembangan ditentukan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 24,
            'name' => 'Prosedur uji coba unit dilaksanakan sesuai standar yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 24,
            'name' => 'Prosedur uji coba integrasi antar unit dilaksanakan sesuai dengan standar yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 24,
            'name' => 'Menyiapkan skenario uji coba dan data uji coba.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 25,
            'name' => 'Penulisan kode sumber dianalisis sesuai dengan guidelines dan best-practices.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 25,
            'name' => 'Analisis kode statis dilakukan dengan menggunakan tool.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 25,
            'name' => 'Data hasil review dikumpulkan untuk perhitungan metriks.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 26,
            'name' => 'Alat bantu pelaksanaan uji coba otomatis ditentukan sesuai konteks industri.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 26,
            'name' => 'Prosedur uji coba unit dikembangkan sesuai practices yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 26,
            'name' => 'Prosedur uji coba integrasi antar unit dikembangkan sesuai dengan best practice yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 27,
            'name' => 'Skema penilaian kode sumber sesuai tool yang digunakan dibuat.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 27,
            'name' => 'Kesesuaian penulisan kode sumber dengan guidelines dan best-practices dinilai berdasarkan skema dan tool.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 27,
            'name' => 'Analisis kode statis dengan menggunakan tool secara otomatis dilakukan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 28,
            'name' => 'Aspek keamanan yang akan diuji dipilih sesuai dengan konteks dan standar perangkat lunak yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 28,
            'name' => 'Skenario pengujian dikembangkan untuk menguji aspek keamanan yang telah ditentukan.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 29,
            'name' => 'Pengujian keamanan dilakukan sesuai dengan aspek keamanan yang telah ditentukan sebelumnya.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 29,
            'name' => 'Tingkat keamanan perangkat lunak dinilai berdasarkan hasil tiap aspek pengujian.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 30,
            'name' => 'Kebijakan terkait keamanan keamanan yang digunakan diidentifikasi sesuai dengan standar yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 30,
            'name' => 'Tingkat dukungan kebijakan terhadap keamanan perangkat lunak diukur menggunakan best practice atau standar yang berlaku.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 31,
            'name' => 'Rekomendasi penjaminan yang bersifat preventif terhadap risiko dibuat.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 31,
            'name' => 'Rekomendasi penjaminan yang bersifat korektif untuk peningkatan kualitas dibuat.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 32,
            'name' => '1.3.	Dokumentasi hasil rekomendasi dibuat.'
        ]);
        SubElemen::create([
            "schema_id" => 1,
            'elemen_id' => 32,
            'name' => 'Hasil rekomendasi dikomunikasikan kepada para stakeholder.'
        ]);
        SubElemen::create([
            "schema_id" => 2,
            'elemen_id' => 33,
            'name' => 'Mengidentifikasi sistem operasi yang berjalan di Workstation'
        ]);
        SubElemen::create([
            "schema_id" => 2,
            'elemen_id' => 33,
            'name' => 'Mengumpulkan informasi cara menginstal dan mengkonfigurasi TCP/IP pada sistem operasi  yang bersangkutan'
        ]);
        SubElemen::create([
            "schema_id" => 2,
            'elemen_id' => 34,
            'name' => 'Mengidentifikasi subnet mask untuk jaringan.'
        ]);
        SubElemen::create([
            "schema_id" => 2,
            'elemen_id' => 34,
            'name' => 'Mengidentifikasi IP address untuk workstation yang bersangkutan.'
        ]);
        SubElemen::create([
            "schema_id" => 2,
            'elemen_id' => 35,
            'name' => 'Memastikan NIC sudah terdeteksi oleh sistem operasi.'
        ]);
        SubElemen::create([
            "schema_id" => 2,
            'elemen_id' => 35,
            'name' => 'Menjalankan perintah untuk menginstalasi protokol TCP/IP. (sesuai dengan sistem operasi yang digunakan).'
        ]);

    }
}
