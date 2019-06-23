<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'name', 'description', 'chef_name', 'url_image'
    ];
}
