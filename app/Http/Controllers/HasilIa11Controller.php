<?php

namespace App\Http\Controllers;

use App\Models\HasilIa11;
use App\Models\JawabanIa11;
use App\Models\KegiatanAsesmen;
use App\Models\UnitKompetensi;
use Illuminate\Http\Request;

class HasilIa11Controller extends Controller
{
    //
    public function store(Request $request){
        $data_inti = $request['data_inti'];
        $data_kegiatan = collect($request['data_komentar_kegiatan']['data_kegiatan']);
        $data_yatidak = collect($request['data_komentar_kegiatan']['data_yatidak']);
        $data_komentar = collect($request['data_komentar_kegiatan']['data_komentar']);
        
        $result_ia11 = HasilIa11::create($data_inti);
        $multipleJawabanIa11 = array();
        for ($i=0; $i < $data_kegiatan->count(); $i++) { 
            # code...
            array_push($multipleJawabanIa11,[
                'hasil_ia11_id' => $result_ia11['id'],
                'kegiatan_asesmen_id' => $data_kegiatan['kegiatan'.($i+1)],
                'ya/tidak' => $data_yatidak['konfirmasi'.($i+1)],
                'komentar' => $data_komentar['komentar'.($i+1)],
            ]);
        }
        
        $result_jawaban = JawabanIa11::insert($multipleJawabanIa11);

        return response()->json([
            'result_ia11' => $result_ia11,
            'result_jawaban' => $result_jawaban
        ]);
    }
    public function index($id){
        $result = HasilIa11::where("sesi_id",$id)->get();
        return response()->json($result);
    }
    public function showUnitKegiatan($id){
        $unitKompetensi = UnitKompetensi::where("schema_id",$id)->get();
        $kegiatanAsesmen = KegiatanAsesmen::all();
        return response()->json([
            "unit_kompetensi" => $unitKompetensi,
            "kegiatan_asesmen" => $kegiatanAsesmen,
        ]);
    }
    public function show($id){
        $resultData = HasilIa11::where('hasil_apl01_id',$id)->get();
        $resultData[0]->jawaban_ia11s->map(function($jawaban){
            $jawaban->kegiatan_asesmen;
        });
        $resultData[0]->hasil_apl01;
        $unitKompetensi = UnitKompetensi::where("schema_id",$resultData[0]['hasil_apl01']['schema_id'])->get();

        return response()->json([
            'result' => $resultData,
            'unitKompetensis' => $unitKompetensi,
        ]);
    }
}
