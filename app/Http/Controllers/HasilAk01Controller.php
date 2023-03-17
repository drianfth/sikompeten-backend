<?php

namespace App\Http\Controllers;

use App\Models\HasilAk01;
use App\Models\JawabanBuktiAk01;
use Illuminate\Http\Request;

class HasilAk01Controller extends Controller
{
    //

    public function store(Request $request){
        $data = [
            "asesor_id"=> $request['asesor_id'],
            "asesi_id"=> $request['asesi_id'],
            "sesi_id"=> $request['sesi_id'],
        ];
        $jawaban_bukti = collect($request['jawaban_bukti']);
        $result = HasilAk01::create($data);
        $createMultipleBukti = array(); 
        for ($i=0; $i < $jawaban_bukti->count() ; $i++) { 
            # code...
            array_push($createMultipleBukti,[
                'hasil_ak01_id'=> $result['id'],
                'nama_bukti'=> $jawaban_bukti[$i]
            ]);
        }
        $result2 = JawabanBuktiAk01::insert($createMultipleBukti);


        return response()->json($result2);
    }
}
