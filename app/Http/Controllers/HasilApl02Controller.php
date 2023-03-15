<?php

namespace App\Http\Controllers;

use App\Models\HasilApl02;
use App\Models\JawabanApl02;
use Illuminate\Http\Request;

class HasilApl02Controller extends Controller
{
    //
    public function store(Request $request){
        // $data = $request->validate([
        //     'name'=> 'required',
        //     'schema_id'=> 'required',
        //     'user_id'=> 'required',
        //     'paket_asesmen_id'=> 'required',
        //     'soal1' => '',
        //     'soal2' => '',
        //     'soal3' => '',
        //     'soal4' => '',
        //     'soal5' => '',
        //     'soal6' => '',
        //     'soal7' => '',
        //     'soal8' => '',
        //     'soal9' => '',
        //     'soal10' => '',
        //     'soal11' => '',
        //     'soal12' => '',
        //     'soal13' => '',
        //     'soal14' => '',
        //     'soal15' => '',
        //     'soal16' => '',
        //     'soal17' => '',
        //     'soal18' => '',
        //     'soal19' => '',
        //     'soal20' => '',
        //     'soal21' => '',
        //     'soal22' => '',
        //     'soal23' => '',
        //     'soal24' => '',
        //     'soal25' => '',
        //     'soal26' => '',
        //     'soal27' => '',
        //     'soal28' => '',
        //     'soal29' => '',
        //     'soal30' => '',
        //     'soal31' => '',
        //     'soal32' => '',
        //     'soal33' => '',
        //     'soal34' => '',
        //     'soal35' => '',
        //     'soal36' => '',
        //     'soal37' => '',
        //     'soal38' => '',
        //     'soal38' => '',
        //     'soal39' => '',
        //     'soal40' => '',
        //     'bukti1' => '',
        //     'bukti2' => '',
        //     'bukti3' => '',
        //     'bukti4' => '',
        //     'bukti5' => '',
        //     'bukti6' => '',
        //     'bukti7' => '',
        //     'bukti8' => '',
        //     'bukti9' => '',
        //     'bukti10' => '',
        //     'bukti11' => '',
        //     'bukti12' => '',
        //     'bukti13' => '',
        //     'bukti14' => '',
        //     'bukti15' => '',
        //     'bukti16' => '',
        //     'bukti17' => '',
        //     'bukti18' => '',
        //     'bukti19' => '',
        //     'bukti20' => '',
        //     'bukti21' => '',
        //     'bukti22' => '',
        //     'bukti23' => '',
        //     'bukti24' => '',
        //     'bukti25' => '',
        //     'bukti26' => '',
        //     'bukti27' => '',
        //     'bukti28' => '',
        //     'bukti29' => '',
        //     'bukti30' => '',
        //     'bukti31' => '',
        //     'bukti32' => '',
        //     'bukti33' => '',
        //     'bukti34' => '',
        //     'bukti35' => '',
        //     'bukti36' => '',
        //     'bukti37' => '',
        //     'bukti38' => '',
        //     'bukti38' => '',
        //     'bukti39' => '',
        //     'bukti40' => '',
        // ]);
        
        // $result = HasilApl02::create($data);
        // return response()->json($data);
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
