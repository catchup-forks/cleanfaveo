<?php

namespace App\Model\MailJob;

use Illuminate\Database\Eloquent\Model;

class FaveoMail extends Model
{
    protected $table = 'faveo_mailboxes';
    protected $fillable = ['drive', 'key', 'value', 'email_id'];
}
