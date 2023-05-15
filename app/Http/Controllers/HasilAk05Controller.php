<?php

namespace App\Http\Controllers;

use App\Models\HasilAk05;
use App\Models\HasilApl01;
use App\Models\JawabanAk05;
use App\Models\UnitKompetensi;
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

    public function showAsesi($id1,$id2){
        $result = collect(HasilApl01::where('sesi_id',$id1)->where('asesor_id',$id2)->get());
        if ($result->isEmpty()) {
            return response()->json([]);
        }
        return response()->json($result);
    }

    public function show($id1,$id2){
        $result = HasilAk05::where('sesi_id',$id1)->where('asesor_id',$id2)->get();
        if ($result->isEmpty()) {
            return response()->json([
                'result'=> [],
            ]);
        }
        $unit_kompetensi = UnitKompetensi::where('schema_id',$result[0]->schema_id)->get();

        $result[0]->sesi;
        $result[0]->paket_skema;
        $result[0]->asesor;
        $result[0]->schema;
        $result[0]->jawaban_ak05s->map(function($jawaban){
            $jawaban->hasil_apl01;
        });
        return response()->json([
            'result' =>$result[0],
            'unit_kompetensi' => $unit_kompetensi 
        ]);
    }
}
