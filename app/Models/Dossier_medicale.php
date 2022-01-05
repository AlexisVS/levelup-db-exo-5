<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier_medicale extends Model
{
    use HasFactory;

    public function maladies () {
        return $this->belongsTo(Maladie::class, 'maladie_id');
    }
    
    public function dossier_medicale_statuses () {
        return $this->belongsTo(Dossier_medicale_status::class, 'dossier_medicale_status_id');
    }

}
