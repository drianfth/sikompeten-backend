<?php

namespace App\Http\Controllers;

use App\Models\HasilApl01;
use App\Models\PaketAsesmen;
use App\Models\RKelengkapan;
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
    public function showDetail($id) {
        $result = HasilApl01::where('id',$id)->get();
        // $result[0]->schema->name;
        $result[0]->r_kelengkapans->map(function($hasil){
            $data = [
                'soal' => $hasil->kelengkapan,
                'jawaban' => $hasil->jawaban_kelengkapan,
            ];
            return $data;
        });
        return response()->json($result);
        // dd($result->toJson());
    }

    public function store(Request $request){
        // $data = $request->validate([
        //     'name'=> 'required',
        //     'schema_id'=> 'required',
        //     'user_id'=> 'required',
        //     'paket_asesmen_id'=> '',
        //     // 'paket_asesmen_id'=> 'required',
        //     'kk_ktp_paspor'=> 'required',
        //     'tempat_lhr'=> 'required',
        //     'jns_kelamin'=> 'required',
        //     'kebangsaan'=> 'required',
        //     'alamat'=> 'required',
        //     'no_telp'=> 'required',
        //     'email'=> 'required',
        //     'pendidikan'=> 'required',
        //     'kode_pos'=> 'required',
        //     'perusahaan'=> "",
        //     'jabatan'=> "",
        //     'almt_kantor'=> "",
        //     'telp_kantor'=> "",
        //     'email_kantor'=> "",
        //     'kode_pos_kantor'=> "",
        //     'fax'=> "",
        //     'tujuan_asesmen'=> "",
        //     'kelengkapan1'=> "",
        //     'kelengkapan2'=> "",
        //     'kelengkapan3'=> "",
        //     'kelengkapan4'=> "",
        //     'kelengkapan5'=> "",

        // ]);
        $data_diri = $request['data_diri'];
        $data_r_kelengkapan = $request['data_r_kelengkapan'];
        $data_kelengkapan = collect($request['data_kelengkapan']);


        $paketFilter = PaketAsesmen::where('schema_id',$data_diri['schema_id'])->get();
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
        $hasil =  $paket->firstWhere('jumlah','<',3); // jika data apl01 lebih dari 3 maka akan dimasukkan ke paket hasesmen yang lain 
        $data_diri['paket_asesmen_id'] = $hasil['id'];
        $createMultipleKelengkapan = array();
        for ($i=0; $i < $data_kelengkapan->count(); $i++) { 
            array_push($createMultipleKelengkapan,['hasil_apl01_id'=> $data_diri['id'],'kelengkapan' => $data_kelengkapan['kelengkapan'.($i+1)],'jawaban_kelengkapan'=>$data_r_kelengkapan['r_kelengkapan'.($i+1)]]);
        }
        $new = [[
            'hasil_apl01_id' => $data_diri['id'],
            'kelengkapan' => 'ktp',
            'jawaban_kelengkapan' => 'ada',
        ],[
            'hasil_apl01_id' => $data_diri['id'],
            'kelengkapan' => 'foto',
            'jawaban_kelengkapan' => 'tidak ada',
        ]];

        // $data_diri['tgl_lahir'] = new Carbon($request->tgl_lahir);
        $result = HasilApl01::create($data_diri);
        $result_kelengkapan = RKelengkapan::insert($createMultipleKelengkapan);

        return response()->json([
            'data_diri' => $result,
            'kelengkapan' => $result_kelengkapan
        ]);
        
    }
}
