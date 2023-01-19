<?php

namespace App\Http\Controllers;

use App\Models\Kelengkapan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class KelengkapanController extends Controller
{
    //
    public function index($id)
    {
        $kelengkapan = Kelengkapan::where('schema_id',$id)->get();
        return response()->json($kelengkapan,Response::HTTP_OK);
    }
}
