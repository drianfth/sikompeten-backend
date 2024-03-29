<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelengkapan extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id'
    ];

    public function schema () {
        return $this->belongsTo(Schema::class);
    }
}
