<?php

namespace App\Http\Controllers;

use App\Models\HasilIa03;
use App\Models\JawabanIa03;
use App\Models\JawabanUnitIa03;
use App\Models\PertanyaanIa03;
use Illuminate\Http\Request;

class HasilIa03Controller extends Controller
{
    //
    public function store(Request $request){
        $data_inti = $request['data_inti'];
        $data_pertanyaan = collect($request['data_jawaban']['data_pertanyaan']);
        $data_tanggapan = collect($request['data_jawaban']['data_tanggapan']);
        $data_rekomendasi = collect($request['data_jawaban']['data_rekomendasi']);
        $data_unit_kompetensi = collect($request['data_jawaban_unit']['data_unit_kompetensi']);
        $data_umpan_balik = collect($request['data_jawaban_unit']['data_umpan_balik']);

        $result_ia03 = HasilIa03::create($data_inti);
        $multipleJawabanUnitIa03 = array();
        $multipleJawabanIa03 = array();

        for ($i=0; $i < $data_unit_kompetensi->count(); $i++) {
            array_push($multipleJawabanUnitIa03,[
                "hasil_ia03_id" => $result_ia03['id'],
                "unit_kompetensi_id" => $data_unit_kompetensi['unit_kompetensi'.($i+1)],
                "umpan_balik" => $data_umpan_balik['umpan_balik'.($i+1)],
            ]); 
        }

        $result_jawaban_unit = JawabanUnitIa03::insert($multipleJawabanUnitIa03);

        for ($i=0; $i < $data_pertanyaan->count(); $i++) {
            array_push($multipleJawabanIa03,[
                "hasil_ia03_id" => $result_ia03['id'],
                "pertanyaania03_id" => $data_pertanyaan['pertanyaan'.($i+1)],
                "rekomendasi" => $data_rekomendasi['rekomendasi'.($i+1)],
                "tanggapan" => $data_tanggapan['tanggapan'.($i+1)],
            ]); 
        }

        $result_jawaban = JawabanIa03::insert($multipleJawabanIa03);



        return response()->json([
            "result_ia03" =>$result_ia03,
            "result_jawaban_unit" =>$result_jawaban_unit,
            "result_jawaban" =>$result_jawaban
        ]);
        // return response()->json($data_unit_kompetensi);
    }

    public function showPertanyaan($id){
        $result = PertanyaanIa03::where('schema_id',$id)->get();
        $result->map(function($pertanyaan){
            $pertanyaan->unit_kompetensi;
        });
        return response()->json($result);
    }

    public function showDetail($id){
        $result = HasilIa03::where('hasil_apl01_id', $id)->get();
        $result[0]->jawaban_ia03s->map(function($jawab){
            $jawab->pertanyaania03->unit_kompetensi;
        });
        $result[0]->jawaban_unit_ia03s->map(function($jawab){
            $jawab->unit_kompetensi;
        });
        $result[0]->hasil_ak01;
        $result[0]->hasil_apl01;
        $result[0]->sesi->paket_skema;
        return response()->json($result);
    }
    public function index($id){
        $result = HasilIa03::where("sesi_id",$id)->get();
        return response()->json($result);
    }
}
