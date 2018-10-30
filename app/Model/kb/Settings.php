<?php

namespace App\Model\kb;

use App\BaseModel;

class Settings extends BaseModel
{
    /**
     * @param $table, $fillable
     */
    protected $table = 'kb__settings';
    protected $fillable = ['language', 'dateformat', 'company_name', 'website', 'phone', 'address', 'logo', 'timezone',
        'background', 'version', 'pagination', 'port', 'host', 'encryption', 'email', 'password', ];
}
