<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
        'code',
        'description',
    ];

    protected function casts(): array{
        return [
            'read_at' => 'datetime',
        ];
    }

    public function isRead(): bool
    {
        return isset($this->read_at) && $this->read_at;
    }
}
