<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanApl02 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function hasil_apl02 () {
        return $this->belongsTo(HasilApl02::class);
    }
    public function elemen () {
        return $this->belongsTo(Elemen::class);
    }
}
