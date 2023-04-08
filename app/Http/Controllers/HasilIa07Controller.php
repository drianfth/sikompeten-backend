<?php

namespace App\Http\Controllers;

use App\Models\HasilIa07;
use App\Models\JawabanIa07;
use Illuminate\Http\Request;

class HasilIa07Controller extends Controller
{
    //


    public function store(Request $request){
        $data_inti = $request['data_inti'];
        $data_pertanyaan = collect($request['data_pertanyaan_lisan']['data_pertanyaan']);
        $data_jawaban = collect($request['data_pertanyaan_lisan']['data_jawaban']);
        $data_rekomendasi = collect($request['data_pertanyaan_lisan']['data_rekomendasi']);

        $result_ia07 = HasilIa07::create($data_inti);
        $multipleJawabanIa07 = array();
        for ($i=0; $i < $data_pertanyaan->count(); $i++) { 
            # code...
            array_push($multipleJawabanIa07,[
                'hasil_ia07_id' => $result_ia07['id'],
                'pertanyaania07_id' => $data_pertanyaan['pertanyaania07'.($i+1)],
                'jawaban' => $data_jawaban['jawaban'.($i+1)],
                'rekomendasi' => $data_rekomendasi['rekomendasi'.($i+1)],
            ]);
        }

        $result_jawaban = JawabanIa07::insert($multipleJawabanIa07);

        return response()->json([
            'result_ia07' => $result_ia07,
            'result_jawaban' => $result_jawaban,
        ]);
    }

    public function show(Request $request,$id){
        $result = HasilIa07::where('hasil_apl01_id',$id)->get();
        $result[0]->hasil_ak01;
        $result[0]->hasil_apl01;
        $result[0]->sesi->paket_skema;
        $result[0]->jawaban_ia07s->map(function($jawab){
            $jawab->pertanyaania07->unit_kompetensi;
        });
        return response()->json($result);
    }
}
