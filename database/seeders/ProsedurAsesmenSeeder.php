<?php

namespace Database\Seeders;

use App\Models\ProsedurAsesmen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProsedurAsesmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProsedurAsesmen::create([
            'name' => 'Rencana asesmen',
        ]);
        ProsedurAsesmen::create([
            'name' => 'Persiapan asesmen',
        ]);
        ProsedurAsesmen::create([
            'name' => 'Implementasi asesmen',
        ]);
        ProsedurAsesmen::create([
            'name' => 'Keputusan asesmen',
        ]);
        ProsedurAsesmen::create([
            'name' => 'Umpan balik asesmen',
        ]);
    }
}
