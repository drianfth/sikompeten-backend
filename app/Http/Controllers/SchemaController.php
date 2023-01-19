<?php

namespace App\Http\Controllers;

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
}
