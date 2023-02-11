<?php

namespace App\Http\Controllers;

use App\Models\Schema;
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
}
