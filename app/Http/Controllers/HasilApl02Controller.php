<?php

namespace App\Http\Controllers;

use App\Models\HasilApl02;
use App\Models\JawabanApl02;
use Illuminate\Http\Request;

class HasilApl02Controller extends Controller
{
    //
    public function store(Request $request){

        $data_diri = $request['data_diri'];
        $data_soal = collect($request['data_soal']);
        $data_jawaban = $request['data_jawaban'];
        $data_bukti = $request['data_bukti'];
        $createMultipleJawaban = array();
        for ($i=0; $i < $data_soal->count(); $i++) { 
            array_push($createMultipleJawaban,[
                "hasil_apl02_id"=> $data_diri['id'],
                "elemen_id"=> $data_soal['elemen'.($i+1)],
                "jawaban"=> $data_jawaban['jawaban'.($i+1)],
                "bukti"=> $data_bukti['bukti'.($i+1)],
            ]);
        }
        $resul1 = HasilApl02::create($data_diri);
        $result2 = JawabanApl02::insert($createMultipleJawaban);
        $resul1->jawaban_apl02s->map(function($jawaban){
            return $jawaban;
        });
        return response()->json($resul1);
        // dd($data_bukti);
    }

    public function show($id) {
        $result = HasilApl02::where('user_id',$id)->get();
        return response()->json($result);
    }

    public function showDetail($id) {
        $result = HasilApl02::where('hasil_apl01_id',$id)->get();
        $result[0]->jawaban_apl02s->map(function($jawaban){
            $jawaban->elemen->sub_elemens;
            $jawaban->elemen->unit_kompetensi;
        });
        $result[0]->schema;
        return response()->json($result);
    }

    public function edit(Request $request,$id){
        $data = collect($request)->toArray();
        $result = HasilApl02::findOrFail($id);
        $result->update($data);

        return response()->json($result);

    }
}
