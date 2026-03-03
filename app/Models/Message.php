<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //Modeling the table -- interact with the data
    /**
     * Mass assignable attributes (table fields)
     *
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'topic_id',
        'message',
        'read_at'
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
        return [
          'read_at' => 'datetime',
        ];
    }
    /**
     * Message is read
     *
     * Returns True if the message has been read
     *
     * @return bool
     * */
    public function isRead(): bool
    {
        return isset($this->read_at) && $this->read_at;
    }
}
