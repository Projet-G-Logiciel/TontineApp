<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'description',
        'user_id'
    ];
    use HasFactory;

    function user(){
        return $this->belongsTo(User::class);
    }
}