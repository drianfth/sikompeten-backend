<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schema extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function unit_kompetensis () {
        return $this->hasMany(UnitKompetensi::class);
    }

    public function paket_asesmen () {
        return $this->hasMany(PaketAsesmen::class);
    }

    public function kelengkapans() {
        return $this->hasMany(Kelengkapan::class);
    }
    public function elemens() {
        return $this->hasMany(Elemen::class);
    }
    public function sub_elemens() {
        return $this->hasMany(Elemen::class);
    }
}
