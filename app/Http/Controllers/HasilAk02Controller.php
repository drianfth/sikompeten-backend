<?php

namespace App\Http\Controllers;

use App\Models\HasilAk02;
use App\Models\HasilApl01;
use App\Models\JawabanAk02;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HasilAk02Controller extends Controller
{
    //
    public function store(Request $request) {
        // $data = collect($request);
        $data_inti = $request['data_inti'];
        $data_unit = collect($request['data_bukti_jawaban']['data_unit']);
        $data_jawaban = collect($request['data_bukti_jawaban']['data_jawaban']);


        $data_inti['tanggal_mulai'] = new Carbon($data_inti['tanggal_mulai']);
        $data_inti['tanggal_selesai'] = new Carbon($data_inti['tanggal_selesai']);

        $result = HasilAk02::create($data_inti);
        $multipleJawabanAk02 = array();

        for ($i=0; $i < $data_unit->count() ; $i++) { 
            array_push($multipleJawabanAk02,[
                'hasil_ak02_id' => $result['id'],
                'unit_kompetensi_id' => $data_unit['unit'.($i+1)],
                'jawaban' => $data_jawaban['jawaban'.($i+1)]
            ]);
        }

        $result_jawaban = JawabanAk02::insert($multipleJawabanAk02);


        return response()->json([
            "result_ak02" => $result,
            "result_jawaban" => $result_jawaban,
        ]);
    }
    public function showApl01($id){
        $data = HasilApl01::where('id',$id)->get();
        $data[0]->schema->unit_kompetensis;
        $data[0]->asesor;
        return response()->json($data[0]);
    }

    public function show($id){
        $data = HasilAk02::where('hasil_apl01_id',$id)->get();
        $data[0]->hasil_apl01->schema->unit_kompetensis;
        $data[0]->asesor;
        $data[0]->user;
        $data[0]->jawaban_ak02s->map(function($jawaban){
            $jawaban->unit_kompetensi;
        });

        return response()->json($data[0]);
    }

    public function index($id){
        $result = HasilAk02::where("sesi_id",$id)->get();
        return response()->json($result);
    }
}
