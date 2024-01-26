<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Versement extends Model
{
    protected $fillable = [
        'montant',
        'type',
        'user_id',
        'seance_id',
    ];
    use HasFactory;
}
