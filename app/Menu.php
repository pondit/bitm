<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'title', 'left', 'right', 'parent_id', 'url',
    ];

}
