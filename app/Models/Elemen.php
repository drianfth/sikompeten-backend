<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemen extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function unit_kompetensi () {
        return $this->belongsTo(UnitKompetensi::class);
    }
    public function sub_elemens () {
        return $this->hasMany(SubElemen::class);
    }
    public function schema () {
        return $this->belongsTo(Schema::class);
    }
}
