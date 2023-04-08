<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaania07;
use Illuminate\Http\Request;

class Pertanyaania07Controller extends Controller
{
    //
    public function index($id) {
        $pertanyaan = Pertanyaania07::where('schema_id', $id)->get();
        $pertanyaan->map(function($p){
            $p->unit_kompetensi;
        });

        return response()->json($pertanyaan);
    }
}
