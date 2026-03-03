<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'available',
    ];

    /**
     * Hidden from serialization attributes (fields)
     * */

    protected $hidden = [];

    /**
     * Attribute (type) casting
     *
     */
    protected function casts(): array{
        return [];
    }
}
