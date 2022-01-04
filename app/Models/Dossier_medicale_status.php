<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier_medicale_status extends Model
{
    use HasFactory;

    public function dossier_medicales()
    {
        return $this->hasOne(Dossier_medicale::class);
    }
}
