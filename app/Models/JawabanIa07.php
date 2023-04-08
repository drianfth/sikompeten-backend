<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanIa07 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function hasil_ia07(){
        return $this->belongsTo(HasilIa07::class);
    }
    
    public function pertanyaania07(){
        return $this->belongsTo(Pertanyaania07::class);
    }
}
