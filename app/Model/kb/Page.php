<?php

namespace App\Model\kb;

use App\BaseModel;

class Page extends BaseModel
{
    protected $table = 'kb__pages';
    protected $fillable = ['name', 'slug', 'status', 'visibility', 'description'];
}
