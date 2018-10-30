<?php

namespace App\Model\helpdesk\Utility;

use App\BaseModel;

class Priority extends BaseModel
{
    public $timestamps = false;
    protected $table = 'tickets__priorities';
    protected $fillable = [
        'id', 'name',
    ];
}
