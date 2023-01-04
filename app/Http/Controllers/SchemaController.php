<?php

namespace App\Http\Controllers;

use App\Models\Schema;
use Illuminate\Http\Request;

class SchemaController extends Controller
{
    //
    public function index()
    {
        $schema = Schema::all();
        return response()->json($schema);
    }
}
