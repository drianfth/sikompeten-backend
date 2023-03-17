<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAk01 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function jawaban_bukti_ak01s () {
        return $this->hasMany(JawabanBuktiAk01::class);
    }
}
