<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameAccount extends Model
{
    protected $fillable = [

        'title',
        'game',
        'uid',
        'server',
        'level',
        'prime_level',
        'rank',
        'price',
        'thumbnail',
        'description',
        'status'

    ];
}
