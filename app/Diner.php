<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diner extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'restaurant_name' => 'required',
        'prefecture' => 'required',
        'place' => 'required',
        'number' => 'required',
        'cuisines' => 'required',
        'review' => 'required'
    );
}
