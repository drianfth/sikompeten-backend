<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAk03 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function hasil_apl01 () {
        return $this->belongsTo(HasilApl01::class);
    }
    public function asesor () {
        return $this->belongsTo(User::class);
    }
    public function user () {
        return $this->belongsTo(User::class);
    }
    public function jawaban_ak03s () {
        return $this->hasMany(JawabanAk03::class);
    }
}
