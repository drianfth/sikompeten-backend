<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RKelengkapan extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function hasil_apl01 () {
        return $this->belongsTo(HasilApl01::class);
    }
}
