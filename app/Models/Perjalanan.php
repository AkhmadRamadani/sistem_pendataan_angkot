<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_perjalanan';
    public function sopir()
    {
        return $this->belongsTo(Sopir::class);
    }
}
