<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilApl02 extends Model
{
    use HasFactory;

    protected $guarded = [
        // 'id'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function sesi () {
        return $this->belongsTo(Sesi::class);
    }
    public function hasil_apl01 () {
        return $this->belongsTo(HasilApl01::class);
    }
    public function jawaban_apl02s () {
        return $this->hasMany(JawabanApl02::class);
    }
}
