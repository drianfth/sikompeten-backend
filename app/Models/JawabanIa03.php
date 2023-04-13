<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanIa03 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function pertanyaania03(){
        return $this->belongsTo(PertanyaanIa03::class);
    }
    public function jawaban_unit_ia03(){
        return $this->belongsTo(JawabanUnitIa03::class);
    }
}
