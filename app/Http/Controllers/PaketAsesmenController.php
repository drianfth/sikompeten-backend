<?php

namespace App\Http\Controllers;

use App\Models\PaketAsesmen;
use Illuminate\Http\Request;

class PaketAsesmenController extends Controller
{
    //
    public function index()
    {
        $paketAsesmen = PaketAsesmen::all();
        
        $paket = $paketAsesmen->map(function ($value) {
            $jumlah = $value->hasil_apl01s->filter(function($a){
                    return $a->konfirmasi == 0;
                })->count();
            return [
                'id' => $value->id,
                'name' => $value->name,
                "jumlah" => $jumlah,
            ];
        });
        $result = $paketAsesmen->map(function ($item) {
            $jumlah = $item->hasil_apl01s->filter(function($a){
                return $a->konfirmasi == 0;
            })->count();
            return [
                'id'=> $item->id,
                'name'=> $item->name,
                'skema'=> $item->schema->name,
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
}
