<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JpemenuhanDimensi extends Model
{
    use HasFactory;

    public function keputusan_asesmen(){
        return $this->belongsTo(KeputusanAsesmen::class);
    }
}
