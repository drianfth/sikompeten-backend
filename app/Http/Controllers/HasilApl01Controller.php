<?php

namespace App\Http\Controllers;

use App\Models\HasilApl01;
use App\Models\PaketAsesmen;
use App\Models\Schema;
use Illuminate\Http\Request;
use Carbon\Carbon;




class HasilApl01Controller extends Controller
{
    //

    public function show($id) {
        $result = HasilApl01::where('user_id',$id)->get();
        return response()->json($result);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'schema_id'=> 'required',
            'user_id'=> 'required',
            'paket_asesmen_id'=> '',
            // 'paket_asesmen_id'=> 'required',
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




        $paketFilter = PaketAsesmen::where('schema_id',$data['schema_id'])->get();
        $paket = $paketFilter->map(function ($value) {
            $jumlah = $value->hasil_apl01s->filter(function($a){
                    return $a->konfirmasi == 0;
                })->count();
            return [
                'id' => $value->id,
                'name' => $value->name,
                "jumlah" => $jumlah,
            ];
        });
        $hasil =  $paket->firstWhere('jumlah','<',3);
        $data['paket_asesmen_id'] = $hasil['id'];
        $data['tgl_lahir'] = new Carbon($request->tgl_lahir);
        $result = HasilApl01::create($data);
        return response()->json($result);
        
    }
}
