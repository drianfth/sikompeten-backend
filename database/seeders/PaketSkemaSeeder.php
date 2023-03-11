<?php

namespace Database\Seeders;

use App\Models\PaketAsesmen;
use App\Models\PaketSkema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PaketSkemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PaketSkema::create([
            'schema_id' => 1,
            'tuk_id' => 1,
            'tanggal' => Carbon::create(2023, 3, 12, 0)
        ]);
        PaketSkema::create([
            'schema_id' => 1,
            'tuk_id' => 2,
            'tanggal' => Carbon::create(2023, 10, 12, 0)
        ]);
        PaketSkema::create([
            'schema_id' => 2,
            'tuk_id' => 1,
            'tanggal' => Carbon::create(2023, 10, 12, 0)
        ]);
    }
}
