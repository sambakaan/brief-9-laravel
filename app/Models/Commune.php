<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    public function quartiers() {
        return $this->hasMany(Quartier::class);
    }


    public function departement() {
        return $this->belongsTo(Departement::class);
    }



}
