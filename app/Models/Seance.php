<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = [
        'dateSeance',
    ];
    use HasFactory;
}
