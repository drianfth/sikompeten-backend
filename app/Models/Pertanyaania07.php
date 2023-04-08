<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaania07 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function jawaban_ia07s () {
        return $this->hasMany(JawabanIa07::class);
    }
    public function unit_kompetensi () {
        return $this->belongsTo(UnitKompetensi::class);
    }
}
