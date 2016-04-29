<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    protected $fillable = [
        'title', 'sub_title', 'summary', 'html_summary', 'details', 'html_details',
    ];
    protected $dates=['deleted_at'];

}
