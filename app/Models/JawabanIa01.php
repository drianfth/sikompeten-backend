<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanIa01 extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function hasil_ia02(){
        return $this->belongsTo(HasilIa01::class);
    }
    
    public function sub_elemen(){
        return $this->belongsTo(SubElemen::class);
    }

}
