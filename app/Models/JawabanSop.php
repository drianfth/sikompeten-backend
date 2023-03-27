<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSop extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function hasil_ia02(){
        return $this->belongsTo(HasilIa01::class);
    }
    public function elemen(){
        return $this->belongsTo(Elemen::class);
    }


}
