<?php

namespace App\Model\helpdesk\Agent_panel;

use App\BaseModel;

class Canned extends BaseModel
{
    /* define the table name */

    protected $table = 'tickets__canned_responses';

    /* Define the fillable fields */
    protected $fillable = ['user_id', 'title', 'message', 'created_at', 'updated_at'];
}
