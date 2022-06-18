<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_sopir';
    public function angkot()
    {
        return $this->hasOne(Angkot::class, 'id_sopir')->withDefault();
    }
    
    public function perjalanan()
    {
        return $this->hasMany(Perjalanan::class);
    }
}
