<?php

namespace App\Http\Controllers;

use App\Models\HasilAk03;
use App\Models\HasilApl01;
use App\Models\JawabanAk03;
use App\Models\Komponen;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HasilAk03Controller extends Controller
{
    //
    public function store(Request $request){
        $data_inti = $request['data_inti'];
        $data_komponen = collect($request['data_umpan_balik']['data_komponen']);
        $data_hasil = collect($request['data_umpan_balik']['data_hasil']);
        $data_catatan = collect($request['data_umpan_balik']['data_catatan']);

        $data_inti['tanggal'] = new Carbon($data_inti['tanggal']);

        $result = HasilAk03::create($data_inti);
        $multipleJawabanAk03 = array();

        for ($i=0; $i < $data_komponen->count() ; $i++) { 
            array_push($multipleJawabanAk03,[
                'hasil_ak03_id' => $result['id'],
                'komponen_id' => $data_komponen['komponen'.($i+1)],
                'hasil' => $data_hasil['hasil'.($i+1)],
                'catatan' => $data_catatan['catatan'.($i+1)],
            ]);
        }

        $result_jawaban = JawabanAk03::insert($multipleJawabanAk03);


        return response()->json([
            "result_ak03" => $result,
            "result_jawaban" => $result_jawaban,
        ]);
    }

    public function showKomponenApl01($id){
        $resultApl01 = HasilApl01::where("id",$id)->get();
        $resultApl01[0]->asesor;
        $resultKomponen = Komponen::all();

        return response()->json([
            'apl01' =>  $resultApl01[0],
            'komponens' =>  $resultKomponen,
        ]);
    }

    public function show($id) {
        $result = HasilAk03::where('hasil_apl01_id',$id)->get();
        if ($result->isEmpty()) {
            return response()->json([
                'result' => $result,
            ]);
        }
        $result[0]->asesor;
        $result[0]->user;
        $result[0]->jawaban_ak03s->map(function($jawaban){
            $jawaban->komponen;
        });
        return response()->json([
            'result' => $result[0],
        ]);
    }
}
