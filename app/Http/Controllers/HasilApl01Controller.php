<?php

namespace App\Http\Controllers;

use App\Models\HasilApl01;
use Illuminate\Http\Request;
use Carbon\Carbon;




class HasilApl01Controller extends Controller
{
    //
    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'schema_id'=> 'required',
            'user_id'=> 'required',
            'kk_ktp_paspor'=> 'required',
            'tempat_lhr'=> 'required',
            'jns_kelamin'=> 'required',
            'kebangsaan'=> 'required',
            'alamat'=> 'required',
            'no_telp'=> 'required',
            'email'=> 'required',
            'pendidikan'=> 'required',
            'kode_pos'=> 'required',
            'perusahaan'=> "",
            'jabatan'=> "",
            'almt_kantor'=> "",
            'telp_kantor'=> "",
            'email_kantor'=> "",
            'kode_pos_kantor'=> "",
            'fax'=> "",
            'tujuan_asesmen'=> "",
            'kelengkapan1'=> "",
            'kelengkapan2'=> "",
            'kelengkapan3'=> "",
            'kelengkapan4'=> "",
            'kelengkapan5'=> "",

        ]);
        $data['tgl_lahir'] = new Carbon($request->tgl_lahir);
        $result = HasilApl01::create($data);
        return response()->json($result);
        
    }
}
