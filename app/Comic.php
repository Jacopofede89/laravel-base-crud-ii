<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'author',
        'relese_date',
        'pages'
    ];
    
}
