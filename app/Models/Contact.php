<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'given_name',
        'middle_name',
        'family_name',
        'nickname',
        'email',
        'phone',
    ];
}
