<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkot extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_angkot';

    public function sopir()
    {
        return $this->belongsTo(Sopir::class, 'id_sopir', 'id_sopir')->withDefault();
    }
    public function trayek()
    {
        return $this->belongsTo(Trayek::class, 'id_trayek', 'id_trayek')->withDefault();
    }
}
