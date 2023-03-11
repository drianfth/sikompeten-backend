<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSkema extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id'
    ];

    public function schema () {
        return $this->belongsTo(Schema::class);
    }
    public function tuk () {
        return $this->belongsTo(Tuk::class);
    }

    public function sesis () {
        return $this->hasMany(Sesi::class);
    }

}
