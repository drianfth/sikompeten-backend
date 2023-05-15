<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAk05 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function sesi(){
        return $this->belongsTo(Sesi::class);
    }
    public function paket_skema(){
        return $this->belongsTo(PaketSkema::class);
    }
    public function asesor(){
        return $this->belongsTo(User::class);
    }
    public function schema(){
        return $this->belongsTo(Schema::class);
    }
    public function jawaban_ak05s () {
        return $this->hasMany(JawabanAk05::class);
    }
}
