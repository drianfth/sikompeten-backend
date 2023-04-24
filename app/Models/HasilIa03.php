<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilIa03 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sesi(){
        return $this->belongsTo(Sesi::class);
    }
    public function hasil_ak01 () {
        return $this->belongsTo(HasilAk01::class);
    }
    public function hasil_apl01 () {
        return $this->belongsTo(HasilApl01::class);
    }
    public function jawaban_ia03s () {
        return $this->hasMany(JawabanIa03::class);
    }
    public function jawaban_unit_ia03s () {
        return $this->hasMany(JawabanUnitIa03::class);
    }
}
