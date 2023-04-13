<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanUnitIa03 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function jawaban_ia03s () {
        return $this->hasMany(JawabanIa03::class);
    }
    public function hasil_ia03(){
        return $this->belongsTo(HasilIa03::class);
    }
}
