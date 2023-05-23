<?php

namespace App\Http\Controllers;

use App\Models\HasilAk06;
use App\Models\JkesesuaianPrinsip;
use App\Models\JpemenuhanDimensi;
use App\Models\KeputusanAsesmen;
use App\Models\ProsedurAsesmen;
use Illuminate\Http\Request;

class HasilAk06Controller extends Controller
{
    //
    public function store(Request $request){
        $data_inti = $request['data_inti'];
        $data_prosedur_asesmen = collect($request['data_jkesesuaian_prinsip']['data_prosedur_asesmen']);
        $data_jawaban_prosedurAs = collect($request['data_jkesesuaian_prinsip']['data_jawaban_prosedurAs']);
        $data_keputusan_asesmen = collect($request['data_jpemenuhan_dimensi']['data_keputusan_asesmen']);
        $data_jawaban_keputusanAs = collect($request['data_jpemenuhan_dimensi']['data_jawaban_keputusanAs']);

        $result = HasilAk06::create($data_inti);
        $multipleJkesesuaianprinsi = array();
        $multipleJpemenuhandimensi = array();

        for ($i=0; $i < $data_prosedur_asesmen->count() ; $i++) { 
            array_push($multipleJkesesuaianprinsi,[
                'hasil_ak06_id' => $result['id'],
                'prosedur_asesmen_id' => $data_prosedur_asesmen['prosedur_asesmen'.($i+1)],
                'jawaban' => $data_jawaban_prosedurAs['j_prosedur'.($i+1)],
            ]);
        }

        for ($i=0; $i < $data_keputusan_asesmen->count() ; $i++) { 
            array_push($multipleJpemenuhandimensi,[
                'hasil_ak06_id' => $result['id'],
                'keputusan_asesmen_id' => $data_keputusan_asesmen['keputusan_asesmen'.($i+1)],
                'jawaban' => $data_jawaban_keputusanAs['j_keputusan'.($i+1)],
            ]);
        }

        $result_kesesuaian_prinsip = JkesesuaianPrinsip::insert($multipleJkesesuaianprinsi);
        $result_pemenuhan_dimensi = JpemenuhanDimensi::insert($multipleJpemenuhandimensi);


        return response()->json([
            'result_ak06' => $result,
            'result_kesesuaian_prinsip' => $result_kesesuaian_prinsip,
            'result_pemenuhan_dimensi' => $result_pemenuhan_dimensi,
        ]);
    }

    public function showData(){
        $result_prosedur = ProsedurAsesmen::all();
        $result_keputusan = KeputusanAsesmen::all();

        return response()->json([
            'result_prosedur' => $result_prosedur,
            'result_keputusan' => $result_keputusan
        ]);
    }

    public function show($id1,$id2){
        $result = HasilAk06::where('sesi_id',$id1)->where('asesor_id',$id2)->get();
        if ($result->isEmpty()) {
            return response()->json([
                'result'=> [],
                'result_prosedur'=> [],
                'result_keputusan'=> [],
            ]);
        }
        $result[0]->schema;
        $result[0]->sesi;
        $result[0]->paket_skema;
        $result[0]->asesor;

        $result[0]->jpemenuhan_dimensis->map(function($jawaban){
            $jawaban->keputusan_asesmen;
        });
        $result[0]->jkesesuaian_prinsips->map(function($jawaban){
            $jawaban->prosedur_asesmen;
        });

        // $result_prosedur = ProsedurAsesmen::all();
        // $result_keputusan = KeputusanAsesmen::all();
        return response()->json([
            'result' =>$result[0],
            // 'result_prosedur' => $result_prosedur,
            // 'result_keputusan' => $result_keputusan
        ]);
        
    }
}
