<?php

namespace App\Http\Controllers;

use App\Models\HasilAk01;
use App\Models\HasilApl01;
use App\Models\JawabanBuktiAk01;
use Illuminate\Http\Request;

class HasilAk01Controller extends Controller
{
    //

    public function store(Request $request){
        $data = collect($request)->toArray();
        $apl01 = HasilApl01::where('sesi_id',$data['sesi_id'])->where('asesor_id',$data['asesor_id'])->get(['user_id']);
        $createMultipleAk01 = array(); 

        for ($i=0; $i <$apl01->count() ; $i++) { 
            array_push($createMultipleAk01,[
                'asesor_id'=> $data['asesor_id'],
                'asesi_id' => $apl01[$i]['user_id'],
                'sesi_id' => $data['sesi_id'],
                'tuk' => $data['tuk'],
                'bukti' => $data['bukti'],
            ]);
        }
        $result = HasilAk01::insert($createMultipleAk01);
        $all = HasilAk01::all();
        return response()->json($all);
    }

    public function edit(Request $request,$id){
        $data = collect($request)->toArray();
        $result = HasilAk01::where('asesi_id',$id);
        $result->update($data);
        
        // return response()->json($data['konfirmasi']);
        return response()->json($result);

    }

    public function show($id){
        $result = HasilAk01::where('asesi_id',$id)->get();
        // dd($result);
        $result[0]->sesi->paket_skema->schema;
        $result[0]->sesi->paket_skema->tuk;
        $result[0]->asesor;
        return response()->json($result);
    }

    public function check ($id1,$id2){
        $result = HasilAk01::where('sesi_id',$id1)-> where('asesor_id',$id2)->first();
        return response()->json($result);
    }
}
