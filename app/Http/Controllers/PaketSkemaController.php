<?php

namespace App\Http\Controllers;

use App\Models\HasilApl01;
use App\Models\PaketAsesmen;
use App\Models\PaketSkema;
use Illuminate\Http\Request;
use Carbon\Carbon;



class PaketSkemaController extends Controller
{
    public function index(){
        $paketskema = PaketSkema::all();
        $paketskema->map(function($item){
            $item->tuk;
            $item->schema;
            return $item;
        });
        // $paketskema[0]->tuk;
        // $paketskema[0]->schema;
        return response()->json($paketskema);

        // dd($paketskema);
    }
    //
    // public function index()
    // {
    //     $paketAsesmen = PaketAsesmen::all();
    //     $result = $paketAsesmen->map(function ($item) {
    //         $jumlah = $item->hasil_apl01s->filter(function($a){
    //             return $a->konfirmasi == 0;
    //         })->count();
    //         return [
    //             'id'=> $item->id,
    //             'name'=> $item->name,
    //             'skema'=> $item->schema->name,
    //             'schema_id'=> $item->schema->id,
    //             'tanggal'=> $item->tanggal,
    //             'asesor1_id'=> $item->asesor1_id,
    //             'asesor2_id'=> $item->asesor2_id,
    //             'tuk'=> $item->tuk,
    //             'jumlah' => $jumlah,
    //             'created_at'=> $item->created_at,
    //             'updated_at'=> $item->updated_at,
    //         ];
    //     });
    //     return response()->json($result);
    // }

    public function store(Request $request){
        $data = $request->validate([
            'schema_id'=> 'required',
            'tuk_id'=> 'required',
        ]);
        $data['tanggal'] = new Carbon($request->tanggal);
        $result = PaketSkema::create($data);
        return response()->json($result);
    }

    public function destroy($id){
        $paketSkema = PaketSkema::find($id);
        return $paketSkema->delete();
    }

    public function edit(Request $request,$id){

        $data = $request->validate([
            'schema_id'=> 'required',
            'tuk_id'=> 'required',
        ]);
        $data['tanggal'] = new Carbon($request->tanggal);
        $paket = PaketSkema::findOrFail($id);
        $paket->update($data);

        return response()->json($paket);
    }

    // public function showAllUser($id) {
    //     $result = HasilApl01::where('paket_asesmen_id',$id)->where('konfirmasi',0)->get();
    //     return response()->json($result);
        
    // }
}

