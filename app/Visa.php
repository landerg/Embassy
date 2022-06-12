<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    protected $fillable = [
        'passport_type', 'passport_no', 'country_code', 'first_name',
        'given_name', 'birth_date', 'birth_place', 'sex',
        'issue', 'expire', 'authory'
    ];

    protected $casts = [
        'birth_date' => 'date',
        'issue' => 'date',
        'expire' => 'date',
    ];

}
