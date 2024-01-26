<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande_emprunt extends Model
{
    protected $fillable = [
        'montant',
        'objet',
        'status',
        'user_id',
        'seance_id',
    ];
    use HasFactory;
}
