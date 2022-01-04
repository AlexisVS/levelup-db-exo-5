<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    use HasFactory;
    
    public function dossier_medicales()
    {
        return $this->hasOne(Dossier_medicale::class);
    }
}
