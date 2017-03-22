<?php

namespace Features;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //define relationship One To Many
    public function user()
        {
            return $this->belongsTo('Features\User');
        }
}
