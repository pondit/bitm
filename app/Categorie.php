<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'title', 'left', 'right', 'parent_id',
    ];
}
