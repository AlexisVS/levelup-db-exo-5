<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $primaryKey = 'numero_registre_national';
    use HasFactory;

    public function consultations()
    {
        return $this->hasOne(Consultation::class);
    }
    public function dossier_medicales()
    {
        return $this->hasOne(Dossier_medicale::class);
    }
}
