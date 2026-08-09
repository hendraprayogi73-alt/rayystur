<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FraudReport extends Model
{
    protected $fillable = [

        'reporter_name',
        'reporter_phone',
        'reported_name',
        'reported_phone',
        'reported_uid',
        'description',
        'evidence',
        'status'

    ];
}
