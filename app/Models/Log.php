<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Log extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_log',
        'log',
        'user_id',
    ];

    function user(){

        return $this->belongsTo(User::class);
    }
}
