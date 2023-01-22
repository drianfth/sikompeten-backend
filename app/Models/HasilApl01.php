<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilApl01 extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function paket_asesmens () {
        return $this->belongsTo(PaketAsesmen::class);
    }

}
