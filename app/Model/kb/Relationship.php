<?php

namespace App\Model\kb;

use App\BaseModel;

class Relationship extends BaseModel
{
    /* define the table  */

    protected $table = 'kb__articles_relationship';
    /* define fillable fields */
    protected $fillable = ['id', 'category_id', 'article_id'];
}
