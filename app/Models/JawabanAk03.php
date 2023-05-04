<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanAk03 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function komponen(){
        return $this->belongsTo(Komponen::class);
    }
}
