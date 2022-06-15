<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    use HasFactory;
    
    public function angkot()
    {
        return $this->hasOne(Angkot::class);
    }
    
    public function perjalanan()
    {
        return $this->hasMany(Perjalanan::class);
    }
}
