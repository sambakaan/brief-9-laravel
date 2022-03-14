<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quartier extends Model
{
    use HasFactory;

    protected $with = ['commune'];

    public function entreprises() {
        return $this->hasMany(Entreprise::class);
    }

    public function commune() {
        return $this->belongsTo(Commune::class);
    }
}
