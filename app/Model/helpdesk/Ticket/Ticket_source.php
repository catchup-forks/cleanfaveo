<?php

namespace App\Model\helpdesk\Ticket;

use App\BaseModel;

class Ticket_source extends BaseModel
{
    public $timestamps = false;
    protected $table = 'tickets_sources';
    protected $fillable = [
        'name', 'value', 'css_class',
    ];
}
