<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $casts = [
        'dispositifFormation' => 'boolean',
        'organigramme' => 'boolean',
         'contrat' => 'boolean',
    ];

    protected $guarded = ['id'];
}
