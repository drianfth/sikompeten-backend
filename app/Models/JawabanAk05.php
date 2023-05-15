<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanAk05 extends Model
{
    use HasFactory;
    public function hasil_apl01(){
        return $this->belongsTo(HasilApl01::class);
    }
}
