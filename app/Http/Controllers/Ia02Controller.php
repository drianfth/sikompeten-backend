<?php

namespace App\Http\Controllers;

use App\Models\Ia02;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class Ia02Controller extends Controller
{
    //

    public function upload(Request $request){
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $path = $file->store('public/ia02');

            $uploadedFile = Ia02::create([
                'schema_id' => $request['schema_id'],
                'filename' => $filename,
                'path' => $path,
            ]);

            return response()->json(['message' => 'File uploaded successfully', 'file' => $uploadedFile]);
        }

        return response()->json(['error' => 'No file found'], 400);
        // dd($request);
        // return response()->json($request);
    }

    public function preview($filename){
        // $result = Ia02::where('schema_id',$id)->get();

        $file = storage_path('app/public/ia02/' . $filename);

        if (file_exists($file)) {
            $content = file_get_contents($file);
            $response = Response::make($content, 200);
            $response->header('Content-Type', 'application/pdf');
            return $response;
        } else {
            abort(404, 'File not found.');
        }
        // return response()->json($result);
    }
}
