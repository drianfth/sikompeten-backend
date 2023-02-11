<?php

namespace App\Http\Controllers;

use App\Models\HasilApl01;
use App\Models\Schema;
use Illuminate\Http\Request;
use Illuminate\Http\Response;



class SchemaController extends Controller
{
    //
    public function index()
    {
        $schema = Schema::all();
        return response()->json($schema);
    }
    public function show($id)
    {
        $schema = Schema::where('id',$id)->get();
        return response()->json($schema);
    }
    public function showSchema($id){
        $idHasil = HasilApl01::where('konfirmasi',0)->where('user_id',$id)->pluck('schema_id');
        $schema = Schema::where('id',$idHasil)->get();
        return response()->json($schema);
        
    }
}
