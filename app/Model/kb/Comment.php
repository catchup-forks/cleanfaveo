<?php

namespace App\Model\kb;

use App\BaseModel;
use Illuminate\Database\Eloquent\Model;

/**
 * Define the Model of comment table.
 */
class Comment extends BaseModel
{
    protected $table = 'kb__comments';
    protected $fillable = ['article_id', 'name', 'email', 'website', 'comment', 'status'];
}
