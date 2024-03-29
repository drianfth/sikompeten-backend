<?php

namespace App\Http\Controllers;

use App\Models\HasilApl01;
use App\Models\Sesi;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SesiController extends Controller
{
    //
    public function show ($id) {
        $sesi = Sesi::where('paket_skema_id',$id)->get();
        return response()->json($sesi);
    }
    public function showNow ($id) {
        $sesi = Sesi::where('id',$id)->get();
        $sesi[0]->paket_skema->schema;
        $sesi[0]->paket_skema->tuk;
        return response()->json($sesi);
    }
    public function store(Request $request){
        $data = $request->validate([
            'paket_skema_id'=> 'required',
            'nama_sesi'=> 'required',
            'jam'=> 'required',
            'asesor1_id' => '',
            'asesor2_id' => ''
        ]);
        // $data['jam'] = new Carbon($request->jam);
        $result = Sesi::create($data);
        return response()->json($result);
    }
    public function destroy($id){
        $paketSkema = Sesi::find($id);
        return $paketSkema->delete();
    }

    public function showPeserta($id){
        $apl01 = HasilApl01::where('sesi_id',$id)->get();
        return response()->json($apl01);
    }
    public function edit(Request $request,$id){

        $data = $request->validate([
            'paket_skema_id'=> 'required',
            'nama_sesi'=> 'required',
            'jam'=> 'required',
            'open' => '',
            'asesor1_id' => '',
            'asesor2_id' => ''
        ]);
        $paket = Sesi::findOrFail($id);
        $paket->update($data);

        return response()->json($paket);
    }
}
