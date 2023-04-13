<?php

namespace App\Http\Controllers;

use App\Models\Tuk;
use Illuminate\Http\Request;

class TukController extends Controller
{
    //
    public function index () {
        $tuk = Tuk::all();
        return response()->json($tuk);
    }
    public function store (Request $request) {
        // $tuk = Tuk::all();
        $data = collect($request)->toArray();
        $tuk = TUK::create($data);
        return response()->json($tuk);
    }
}
