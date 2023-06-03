<?php

namespace App\Http\Controllers;

use App\Models\HasilIa01;
use App\Models\JawabanIa01;
use App\Models\JawabanSop;
use Illuminate\Http\Request;

class HasilIa01Controller extends Controller
{
    //
    public function store(Request $request){
        $data_inti = $request['data_inti'];
        $data_sub_elemen = collect($request['data_ujian']['data_soal']);
        // $data_elemen = collect($request['data_sop']['data_elemen']);
        // $hasil_sop = collect($request['data_sop']['hasil_sop']);
        $data_rekomendasi = collect($request['data_ujian']['rekomendasi']);
        $data_penilaian = collect($request['data_ujian']['penilaian_lanjut']);
        $result_ia01 = HasilIa01::create($data_inti);
        $multipleJawabanIa01 = array();
        // $multipleJawabanIa01Sop = array();
        for ($i=0; $i < $data_sub_elemen->count(); $i++) { 
            array_push($multipleJawabanIa01,[
                'hasil_ia01_id' => $result_ia01['id'],
                'sub_elemen_id' => $data_sub_elemen['sub_elemen'.($i+1)],
                'rekomendasi' => $data_rekomendasi['rekomendasi'.($i+1)],
                'penilaian_lanjut' => $data_penilaian['penilaian'.($i+1)],
            ]);
        }
        // for ($i=0; $i < $data_elemen->count(); $i++) { 
        //     array_push($multipleJawabanIa01Sop,[
        //         'hasil_ia01_id' => $result_ia01['id'],
        //         'elemen_id' => $data_elemen['elemen'.($i+1)],
        //         'jawab_sop' => $hasil_sop['sop'.($i+1)]
        //     ]);
        // }
        $result_jawaban = JawabanIa01::insert($multipleJawabanIa01);
        // $result_sop = JawabanSop::insert($multipleJawabanIa01Sop);
        return response()->json([
            'result' => $result_ia01,
            'result-jawaban' => $result_jawaban
        ]);
    }
    public function show($id){
        $result = HasilIa01::where('hasil_apl01_id',$id)->get();
        $result[0]->hasil_ak01;
        $result[0]->hasil_apl01;
        $result[0]->sesi->paket_skema;
        $result[0]->jawaban_sops->map(function($sop){
            $sop->elemen;
        });
        $result[0]->jawaban_ia01s->map(function($jawab){
            $jawab->sub_elemen->elemen->unit_kompetensi;
        });
        return response()->json($result);
    }
    public function index($id){
        $result = HasilIa01::where("sesi_id",$id)->get();
        return response()->json($result);
    }
}
