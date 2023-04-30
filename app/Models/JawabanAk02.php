<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanAk02 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function unit_kompetensi(){
        return $this->belongsTo(UnitKompetensi::class);
    }
}
