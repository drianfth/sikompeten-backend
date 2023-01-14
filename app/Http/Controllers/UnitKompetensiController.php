<?php

namespace App\Http\Controllers;

use App\Models\Schema;
use App\Models\UnitKompetensi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UnitKompetensiController extends Controller
{
    //
    public function index(){
        $unitKompetensi = UnitKompetensi::all();
        return response()->json($unitKompetensi,Response::HTTP_OK);
    }
}
