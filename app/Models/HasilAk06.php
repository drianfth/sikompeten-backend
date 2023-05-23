<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAk06 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function sesi(){
        return $this->belongsTo(Sesi::class);
    }
    public function paket_skema(){
        return $this->belongsTo(PaketSkema::class);
    }
    public function asesor(){
        return $this->belongsTo(User::class);
    }
    public function schema(){
        return $this->belongsTo(Schema::class);
    }
    public function jpemenuhan_dimensis () {
        return $this->hasMany(JpemenuhanDimensi::class);
    }
    public function jkesesuaian_prinsips () {
        return $this->hasMany(JkesesuaianPrinsip::class);
    }
}
