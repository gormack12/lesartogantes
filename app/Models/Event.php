<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    	'path_to_hero_picture',
    	'theme',
    	'name',
    	'day',
    	'month',
    	'year',
    	'location',
    	'description',
    ];
}
