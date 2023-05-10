<?php

namespace App\Http\Controllers;

use App\Models\HasilAk05;
use App\Models\JawabanAk05;
use Illuminate\Http\Request;

class HasilAk05Controller extends Controller
{
    //
    public function store(Request $request){
        $data_inti = $request['data_inti'];
        $data_apl01 = collect($request['data_jawaban']['data_apl01']);
        $data_rekomendasi = collect($request['data_jawaban']['data_rekomendasi']);
        $data_keterangan = collect($request['data_jawaban']['data_keterangan']);

        $result= HasilAk05::create($data_inti);
        $multipleJawabanAk05 = array();
        
        for ($i=0; $i < $data_apl01->count() ; $i++) { 
            array_push($multipleJawabanAk05,[
                'hasil_ak05_id' => $result['id'],
                'hasil_apl01_id' => $data_apl01['apl01'.($i+1)],
                'rekomendasi' => $data_rekomendasi['rekomendasi'.($i+1)],
                'keterangan' => $data_keterangan['keterangan'.($i+1)],
            ]);
        }
        $result_jawaban = JawabanAk05::insert($multipleJawabanAk05);

        return response()->json([
            "result_ak05" => $result,
            "result_jawaban" => $result_jawaban,
        ]);
    }

    public function showAsesi(){
        
    }
}
