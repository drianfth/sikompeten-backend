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
    // protected $fillable = [
    //     'id',
    // ];

    public function paket_asesmens () {
        return $this->belongsTo(PaketAsesmen::class);
    }
    public function r_kelengkapans () {
        return $this->hasMany(RKelengkapan::class);
    }

}
