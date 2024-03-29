<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function paket_skema () {
        return $this->belongsTo(PaketSkema::class);
    }
    public function asesor1 () {
        return $this->belongsTo(User::class);
    }
    public function asesor2 () {
        return $this->belongsTo(User::class);
    }
    public function hasil_apl01s () {
        return $this->hasMany(HasilApl01::class);
    }
    public function hasil_apl02s () {
        return $this->hasMany(HasilApl02::class);
    }
    public function hasil_ak01 () {
        return $this->hasMany(HasilAk01::class);
    }
}
