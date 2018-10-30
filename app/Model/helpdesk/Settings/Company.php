<?php

namespace App\Model\helpdesk\Settings;

use App\BaseModel;

class Company extends BaseModel
{
    protected $table = 'core__settings_companies';
    protected $fillable = [
        'company_name', 'website', 'phone', 'address', 'landing_page', 'offline_page',
        'thank_page', 'logo', 'use_logo',
    ];
}
