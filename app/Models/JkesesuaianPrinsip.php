<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JkesesuaianPrinsip extends Model
{
    use HasFactory;
    public function prosedur_asesmen(){
        return $this->belongsTo(ProsedurAsesmen::class);
    }
}
