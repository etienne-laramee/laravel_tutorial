<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Primary key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}
