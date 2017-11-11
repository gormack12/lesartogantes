<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teammember extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'path_to_picture',
    	'firstname',
    	'lastname',
    	'role',
    	'about',
    	'email',
    ];
}
