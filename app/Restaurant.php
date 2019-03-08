<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = array('id');
    protected $table = 'restaurants';

    public static $rules = array(
        'restaurant_name' => 'required',
        'prefecture' => 'required',
        'place' => 'required',
        'number' => 'required',
        'cuisines' => 'required',
        'review' => 'required'
    );

}
