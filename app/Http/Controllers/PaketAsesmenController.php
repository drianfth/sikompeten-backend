<?php

namespace App\Http\Controllers;

use App\Models\PaketAsesmen;
use Illuminate\Http\Request;
use Carbon\Carbon;



class PaketAsesmenController extends Controller
{
    //
    public function index()
    {
        $paketAsesmen = PaketAsesmen::all();
        $result = $paketAsesmen->map(function ($item) {
            $jumlah = $item->hasil_apl01s->filter(function($a){
                return $a->konfirmasi == 0;
            })->count();
            return [
                'id'=> $item->id,
                'name'=> $item->name,
                'skema'=> $item->schema->name,
                'schema_id'=> $item->schema->id,
                'tanggal'=> $item->tanggal,
                'asesor1_id'=> $item->asesor1_id,
                'asesor2_id'=> $item->asesor2_id,
                'tuk'=> $item->tuk,
                'jumlah' => $jumlah,
                'created_at'=> $item->created_at,
                'updated_at'=> $item->updated_at,
            ];
        });
        return response()->json($result);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'schema_id'=> 'required',
            'tanggal'=> '',
            'asesor1_id'=> '',
            'asesor2_id'=> '',
            'tuk'=> '',
        ]);
        $data['tanggal'] = new Carbon($request->tanggal);
        $result = PaketAsesmen::create($data);
        return response()->json($result);
    }

    public function destroy($id){
        $paketAsesmen = PaketAsesmen::find($id);
        return $paketAsesmen->delete();
    }

    public function edit(Request $request,$id){

        $data = $request->validate([
            'name'=> 'required',
            'schema_id'=> 'required',
            'tanggal'=> '',
            'asesor1_id'=> '',
            'asesor2_id'=> '',
            'tuk'=> '',
        ]);
        $data['tanggal'] = new Carbon($request->tanggal);
        $paket = PaketAsesmen::findOrFail($id);
        $paket->update($data);

        return response()->json($paket);
    }
}
