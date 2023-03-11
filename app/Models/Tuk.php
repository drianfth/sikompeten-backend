<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuk extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function paket_skemas () {
        return $this->hasMany(PaketSkema::class);
    }
}
