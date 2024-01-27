<?php

namespace App\Models;

use App\Models\User;
use App\Models\Emprunt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emprunt extends Model
{
    protected $fillable = [
        'montant',
        'status',
        'user_id',
    ];
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class);
    }
}
