<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanIa11 extends Model
{
    use HasFactory;
    public function kegiatan_asesmen () {
        return $this->belongsTo(KegiatanAsesmen::class);
    }
}
