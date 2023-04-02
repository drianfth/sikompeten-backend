<?php

namespace App\Http\Controllers;

use App\Models\Schema;
use App\Models\SubElemen;
use Illuminate\Http\Request;

class ElemenController extends Controller
{
    //
    public function index($id) {
        $result = Schema::where('id',$id)->get();
        $result[0]->elemens->map(function($elemen) {
            $data = [
                'unit_kompetensi' => $elemen->unit_kompetensi,
                'sub_elemens' => $elemen->sub_elemens
            ];
            return $data;
        });
        return response()->json($result);
    }

    public function showSubElemen($id){
        $result = SubElemen::where('schema_id',$id)->get();
        $result->map(function ($subElemen){
            $subElemen->elemen->unit_kompetensi;
        });
        return response()->json($result);
    }
}
