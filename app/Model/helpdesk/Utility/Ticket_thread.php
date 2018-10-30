<?php

namespace App\Model\helpdesk\Utility;

use App\BaseModel;

class Ticket_thread extends BaseModel
{
    protected $table = 'tickets__threads';
    protected $fillable = [
        'id', 'ticket_id', 'ticket_subject', 'ticket_message', 'time', 'poster', 'created_at', 'updated_at',
    ];
}
