<?php

namespace Database\Seeders;

use App\Models\PaketAsesmen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PaketAsesmenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PaketAsesmen::create([
            'schema_id' => 1,
            'name' => 'Lab GIS',
            'tanggal' => Carbon::create(2023, 3, 12, 0)
        ]);
        PaketAsesmen::create([
            'schema_id' => 2,
            'name' => 'Lab RPL',
            'tanggal' => Carbon::create(2023, 10, 12, 0)
        ]);
    }
}
