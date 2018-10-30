<?php

namespace App\Model\MailJob;

use Illuminate\Database\Eloquent\Model;

class MailService extends Model
{
    protected $table = 'mail__services';
    protected $fillable = ['name', 'short_name'];
}
