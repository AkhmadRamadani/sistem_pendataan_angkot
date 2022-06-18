<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkot extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_angkot';

    public function trayek()
    {
        return $this->belongsTo(Trayek::class, 'id_trayek')->withDefault();
    }
}
