<?php

namespace App\Model\helpdesk\Ticket;

use App\BaseModel;

class Ticket_Status extends BaseModel
{
    protected $table = 'tickets__statuses';
    protected $fillable = [
        'id', 'name', 'state', 'message', 'mode', 'flag', 'sort', 'properties', 'icon_class',
    ];
}
