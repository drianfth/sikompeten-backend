<?php

namespace Database\Seeders;

use App\Models\KeputusanAsesmen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeputusanAsesmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        KeputusanAsesmen::create([
            'name' => 'Bukti dari berbagai asesmen diperiksa untuk konsistensi dimensi kompetensi',
        ]);
    }
}
