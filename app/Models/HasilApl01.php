<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilApl01 extends Model
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
    public function schema () {
        return $this->belongsTo(Schema::class);
    }

    public function r_kelengkapans () {
        return $this->hasMany(RKelengkapan::class);
    }
    
    public function asesor_id () {
        return $this->belongsTo(User::class);
    }
    public function hasil_apl02 () {
        return $this->hasOne(HasilApl02::class);
    }
    public function hasil_ak01 () {
        return $this->hasOne(HasilAk01::class);
    }

}
