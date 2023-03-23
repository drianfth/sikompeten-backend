<?php

namespace App\Http\Controllers;

use App\Models\HasilApl01;
use App\Models\PaketAsesmen;
use App\Models\PaketSkema;
use App\Models\RKelengkapan;
use App\Models\Schema;
use App\Models\Sesi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HasilApl01Controller extends Controller
{
    //

    public function show($id) {
        $result = HasilApl01::where('user_id',$id)->get();
        return response()->json($result);
    }
    public function showDetail($id) {
        $result = HasilApl01::where('id',$id)->get();
        $result[0]->schema;
        $result[0]->sesi->asesor1;
        $result[0]->sesi->asesor2;
        $result[0]->r_kelengkapans->map(function($hasil){
            $data = [
                'soal' => $hasil->kelengkapan,
                'jawaban' => $hasil->jawaban_kelengkapan,
            ];
            return $data;
        });
        return response()->json($result);
        // dd($result->toJson());
    }


    public function store(Request $request){
        $data_diri = $request['data_diri'];
        $data_r_kelengkapan = $request['data_r_kelengkapan'];
        $data_kelengkapan = collect($request['data_kelengkapan']); 
        $paket = PaketSkema::where('schema_id',$data_diri['schema_id'])->get();
        $sesi= $paket->map(function($tes){
            return $tes->sesis->map(function($value){
                $jumlah = $value->hasil_apl01s->filter(function($a){
                    return $a;
                })->count();
                return [
                    'id' => $value->id,
                    'name' => $value->nama_sesi,
                    "jumlah" => $jumlah,
                ];

            });
        });
        
        for ($i=0; $i < $sesi->count(); $i++) { 
            $hasil =  $sesi[$i]->firstWhere('jumlah','<',20); // jika data apl01 lebih dari 3 maka akan dimasukkan ke paket hasesmen yang lain 
            if ($hasil != 0) {
                break;
            }
        }   
        $data_diri['sesi_id'] = $hasil['id'];
        $createMultipleKelengkapan = array();
        for ($i=0; $i < $data_kelengkapan->count(); $i++) { 
            array_push($createMultipleKelengkapan,['hasil_apl01_id'=> $data_diri['id'],'kelengkapan' => $data_kelengkapan['kelengkapan'.($i+1)],'jawaban_kelengkapan'=>$data_r_kelengkapan['r_kelengkapan'.($i+1)]]);
        }
        $result = HasilApl01::create($data_diri);
        $result_kelengkapan = RKelengkapan::insert($createMultipleKelengkapan);

        return response()->json([
            'data_diri' => $result,
            'kelengkapan' => $result_kelengkapan
        ]);

    }

    public function edit(Request $request,$id){
        $data = collect($request)->toArray();
        $result = HasilApl01::findOrFail($id);
        $result->update($data);

        return response()->json($result);

    }
}
