<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $fillable=[
        'title','sub_title','bg_image','nav_image','resume'
    ];
}
