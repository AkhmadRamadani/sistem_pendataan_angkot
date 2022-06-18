<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trayek extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_trayek';

    public function angkot()
    {
        return $this->hasMany(Angkot::class);
    }
}
