<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class JadwalController extends Controller
{
    //
    public function index(){
        $jadwal = Jadwal::all();
        return response()->json($jadwal,Response::HTTP_OK);
    }
    public function update(Request $request,$id){
        $data = $request->validate([
            // 'deskripsi' => 'required',
            'status' => 'required',
            'tanggal' => 'required',
        ]);
        $data['tanggal'] = new Carbon($request->tanggal);
        $data['deskripsi'] = $request->deskripsi;
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($data);

        return response()->json($jadwal);

    }
}
