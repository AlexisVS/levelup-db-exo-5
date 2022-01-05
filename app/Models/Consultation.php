<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    public function docteurs () {
        return $this->belongsTo(Docteur::class, 'docteur_id');
    }
    
    public function consultation_statuses () {
        return $this->belongsTo(Consultation_status::class, 'consultation_status_id');
    }

    public function locals () {
        return $this->belongsTo(Local::class, 'local_id');
    }

}
