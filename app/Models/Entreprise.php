<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entreprise extends Model
{
    use HasFactory;

    protected $casts = [
        'dispositifFormation' => 'boolean',
        'organigramme' => 'boolean',
        'contrat' => 'boolean',
    ];

    protected $guarded = ['id'];

    public function localite() : BelongsTo { //locailte_id
        return $this->belongsTo(Quartier::class,'quartier_id');
    }
}
